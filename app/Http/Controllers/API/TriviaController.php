<?php

namespace App\Http\Controllers\API;

use App\Exceptions\ForisLabsException;
use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionResource;
use App\Models\Question;
use App\Models\Trivia;
use App\Settings\TriviaSettings;
use Carbon\CarbonImmutable;
use Illuminate\Http\Request;
use Throwable;

class TriviaController extends Controller
{
    /**
     * @throws ForisLabsException|Throwable
     */
    public function getForToday(TriviaSettings $triviaSettings)
    {
        $currentTime = now();
        $user = auth('api')->user();

        $startTime = CarbonImmutable::createFromTimeString($triviaSettings->startTime);
        $endTime = CarbonImmutable::createFromTimeString($triviaSettings->endTime);
        $resetTime = CarbonImmutable::createFromTimeString($triviaSettings->resetTime);

        throw_if(
            condition: $currentTime->isAfter($endTime) && $currentTime->isBefore($resetTime),
            exception: ForisLabsException::TriviaWindowClosed()
        );

        throw_if(
            condition: $user->trivias()
                ->whereTime('created_at', '>=', $startTime)
                ->whereTime('created_at', '<=', $endTime)
                ->exists(),
            exception: ForisLabsException::TriviaAlreadyTaken()
        );

        $questions = Question::inRandomOrder()
            ->with('options')
            ->limit($triviaSettings->questionPerDay)
            ->get();

        return response()->json([
            'message' => 'Trivia available. You can participate now.',
            'questions' => QuestionResource::collection($questions),
            'startTime' => $startTime->toTimeString(),
            'endTime' => $endTime->toTimeString(),
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
