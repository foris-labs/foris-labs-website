<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class HandlePendingActivities
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $pendingActivities = $request->input('activities');

        if ($pendingActivities === null) return $next($request);

        $pendingActivities = json_decode($pendingActivities, true);

        Log::build([
            'driver' => 'single',
            'path' => storage_path('logs/activities.log'),
        ])->info('Handling Pending activities', $pendingActivities);

        foreach ($pendingActivities as $activity) {
            $user = $request->user('api');

            $performedAt = $this->fixTimezoneOffset($activity['performed_at']);

            $user->activities()->create([
                'activity' => $activity['activity'],
                'meta' => $activity['meta'] ?? [],
                'performed_at' => Carbon::createFromFormat('Y-m-d\TH:i:s.u P', $performedAt),
            ]);
        }

        $request->request->remove('activities');

        return $next($request);
    }

    protected function fixTimezoneOffset(string $timestamp): string
    {
        // Extract the timezone offset from the timestamp string
        preg_match('/\s([+-]?\d{2}:\d{2})$/', $timestamp, $matches);
        $timezoneOffset = $matches[1];

        // if it doesn't have + or - sign, then add the plus sign
        if (!str_starts_with($timezoneOffset, '+') && !str_starts_with($timezoneOffset, '-')) {
            $timezoneOffset = '+' . $timezoneOffset;
        }

        // Replace the timezone offset in the original timestamp string
        return preg_replace('/\s[+-]?\d{2}:\d{2}$/', $timezoneOffset, $timestamp);
    }
}
