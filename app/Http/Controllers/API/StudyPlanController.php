<?php

namespace App\Http\Controllers\API;

use App\Enums\DifficultyLevel;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\StudyPlan\CreateStudyPlanRequest;
use App\Http\Requests\API\StudyPlan\GenerateRecommendationsRequest;
use App\Http\Requests\API\StudyPlan\GetOnboardingQuestionsRequest;
use App\Http\Requests\API\StudyPlan\UpdateStudyPlanRequest;
use App\Http\Resources\QuestionResource;
use App\Http\Resources\StudyPlanResource;
use App\Models\Question;
use App\Models\StudyPlan;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudyPlanController extends Controller
{
    public function index(Request $request)
    {
        $studyPlans = StudyPlan::where('user_id', $request->user()->id)
            ->with('subject')
            ->get();

        return StudyPlanResource::collection($studyPlans);
    }

    public function show(StudyPlan $studyPlan)
    {
        $studyPlan->load('subject');

        return new StudyPlanResource($studyPlan);
    }

    public function onboardingQuestions(GetOnboardingQuestionsRequest $request): JsonResource
    {
        $subject = Subject::where('slug', $request->validated('subject'))
            ->firstOrFail();

        // Select one random question for each difficulty level
        $subqueries = [];
        foreach (DifficultyLevel::cases() as $level) {
            $subquery = Question::query()
                ->where('source_exam', $request->validated('exam'))
                ->where('subject_id', $subject->id)
                ->where('difficulty_level', $level->value)
                ->inRandomOrder()
                ->limit(1)
                ->toRawSql();

            $subqueries[] = "($subquery)";
        }

        // Combine subqueries with UNION
        $query = implode(' UNION ', $subqueries);

        $questions = Question::fromQuery($query)->load('options');

        return QuestionResource::collection($questions);
    }

    public function recommendations(GenerateRecommendationsRequest $request)
    {
        $score = $request->validated('score');
        $dailyMinutes = $request->validated('daily_minutes');

        $planTypes = ['minimal', 'optimal', 'intense'];
        $averageTimePerQuestion = [4, 2, 1];


        $totalQuestions = [];
        foreach ($planTypes as $index => $planType) {
            $totalQuestions[$index] = floor($dailyMinutes / $averageTimePerQuestion[$index]);
            $totalQuestions[$index] = $totalQuestions[$index] * $score / 15;
        }

        return array_combine($planTypes, $totalQuestions);
    }

    public function store(CreateStudyPlanRequest $request): JsonResource
    {
        $studyPlan = StudyPlan::create([
            'user_id' => $request->user()->id,
            'subject_id' => Subject::where('slug', $request->validated('subject'))->firstOrFail()->id,
            'exam' => $request->validated('exam'),
            'questions_per_day' => $request->validated('questions_per_day'),
            'started_at' => now(),
            'ended_at' => now()->addDays($request->validated('duration')),
        ]);

        return new StudyPlanResource($studyPlan);
    }

    public function update(UpdateStudyPlanRequest $request, StudyPlan $studyPlan)
    {
        $studyPlan->update($request->validated());

        return new StudyPlanResource($studyPlan);
    }

    public function destroy(StudyPlan $studyPlan)
    {
        $studyPlan->delete();

        return response()->json([
            'message' => 'Study plan deleted.'
        ]);
    }


}
