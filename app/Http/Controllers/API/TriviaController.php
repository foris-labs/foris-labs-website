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
            condition: !$currentTime->isBetween($resetTime, $endTime),
            exception: ForisLabsException::TriviaWindowClosed()
        );

        throw_if(
            condition: $user->trivias()
                ->whereBetween('created_at', [$resetTime, $resetTime->addDay()])
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

    public function submit(Request $request)
    {
        $user = auth('api')->user();

        $user->trivias()->create([
            'score' => $request->input('score'),
        ]);

        return response()->json([
            'message' => 'Trivia submitted.'
        ]);
    }

}
