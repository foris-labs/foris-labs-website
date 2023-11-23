<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Settings\TriviaSettings;
use Carbon\CarbonImmutable;
use Illuminate\Http\Request;

class TriviaController extends Controller
{
    public function getForToday(TriviaSettings $triviaSettings)
    {
        $currentTime = now();
        $user = auth('api')->user();

        $startTime = CarbonImmutable::createFromTimeString($triviaSettings->startTime);
        $endTime = CarbonImmutable::createFromTimeString($triviaSettings->endTime);
        $resetTime = CarbonImmutable::createFromTimeString($triviaSettings->resetTime);

        if($currentTime->isAfter($endTime) && $currentTime->isBefore($resetTime->addDay())) {
            return response()->json([
                'message' => 'Trivia time window has elapsed.',
                'data' => null,
            ]);
        }

        $hasTakenTrivia = $user->trivias()
            ->whereTime('created_at', '>=',  $startTime)
            ->whereTime('created_at', '<=',  $endTime)
            ->exists();

        if ($hasTakenTrivia) {
            return response()->json([
                'message' => 'Trivia already taken for today.',
                'data' => null,
            ]);
        }

        $questions = Question::inRandomOrder()
            ->with('options')
            ->limit($triviaSettings->questionPerDay)
            ->get();

        return response()->json([
            'message' => 'Trivia available. You can participate now.',
            'data' => $questions,
        ]);
    }

    public function start(Request $request)
    {
        $user = auth('api')->user();
        $user->trivias()->create([
            'score' => 0,
        ]);

        return response()->json([
            'message' => 'Trivia started.',
            'data' => null,
        ]);
    }

    public function submit(Request $request)
    {
    }

}
