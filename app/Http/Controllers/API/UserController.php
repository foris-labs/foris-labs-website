<?php

namespace App\Http\Controllers\API;

use App\Enums\Currency;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\UpdateCurrencyRequest;
use App\Http\Requests\API\UserUpdateRequest;
use App\Http\Requests\UserFeedbackRequest;
use App\Http\Resources\ErrorResponse;
use App\Http\Resources\Leaderboard;
use App\Http\Resources\UserResource;
use App\Models\Avatar;
use App\Models\User;
use App\Services\LeaderboardService;
use Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected ?User $user;

    public function __construct()
    {
        $this->user = auth('api')->user();
    }

    public function show()
    {
        return new UserResource($this->user);
    }

    public function currencies()
    {
        return $this->user->currencies;
    }

    public function avatars()
    {
        $this->user->loadMissing('avatars');

        return $this->user->avatars->map(fn($avatar) => $avatar->slug);
    }

    public function updateAvatar(Request $request)
    {
        $avatar = Avatar::where('slug', $request->input('name'))->first();

        if (!$avatar) {
            return ErrorResponse::notFound('Avatar not found');
        }

        $this->user->setCurrentAvatar($avatar);

        return response()->json([
            'message' => 'Avatar updated successfully'
        ]);
    }


    public function updateCurrencies(UpdateCurrencyRequest $request)
    {
        $currencies = $this->user->currencies;

        foreach ($request->validated('currencies') as $currency) {
            if ($request->boolean('relative')) {
                $currencies[$currency['currency']] += $currency['amount'];
            } else {
                $currencies[$currency['currency']] = $currency['amount'];
            }
        }

        $this->user->update([
            'currencies' => $currencies
        ]);


        return $this->user->currencies;
    }

    public function updateMetadata(Request $request)
    {
        $key = $request->input('key');
        $value = $request->input('value');

        $metadata = $this->user->metadata;

        $metadata[$key] = $value;

        $this->user->update([
            'metadata' => $metadata
        ]);

        return $this->user->metadata;
    }


    public function update(UserUpdateRequest $request)
    {
        $this->user->update($request->validated());
        $this->user->refresh();

        return new UserResource($this->user);
    }

    public function feedback(UserFeedbackRequest $request)
    {
        $this->user->feedbacks()->create($request->validated());

        return response()->json([
            'message' => 'Feedback submitted successfully'
        ]);
    }

    public function leaderboard(Request $request)
    {
        $leaderboard = LeaderboardService::get();

        return new Leaderboard($leaderboard);
    }
}
