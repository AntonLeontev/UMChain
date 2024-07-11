<?php

namespace App\Http\Controllers;

use App\Enums\Activity;
use App\Enums\Gender;
use App\Enums\Level;
use App\Enums\WeightDimension;
use App\Enums\WeightDirection;
use App\Http\Requests\QuizStoreRequest;
use App\Models\Quiz;
use App\ValueObjects\Weight;
use Carbon\Carbon;
use Illuminate\Support\Arr;

class QuizController extends Controller
{
    public function __invoke(QuizStoreRequest $request)
    {
        $user = auth()->user();

        $bday = Carbon::parse($request->get('bday'));
        $age = floor($bday->diffInYears(now()));

        $currentWeight = new Weight(
            $request->get('weight_value'),
            WeightDimension::from($request->get('weight_dimension')),
        );

        $targetWeight = new Weight(
            $request->get('target_weight_value'),
            WeightDimension::from($request->get('target_weight_dimension')),
        );

        $direction = match (true) {
            $currentWeight->inKg() > $targetWeight->inKg() => WeightDirection::loss,
            $currentWeight->inKg() < $targetWeight->inKg() => WeightDirection::gain,
            default => WeightDirection::keep,
        };

        $user->update([
            'name' => $request->get('name'),
            'quiz_is_done' => true,
            'height' => $request->get('height_value'),
            'height_dimension' => $request->get('height_dimension'),
            'weight' => $request->get('weight_value'),
            'weight_dimension' => $request->get('weight_dimension'),
            'age' => $age,
            'activity' => Activity::fromQuiz($request->get('physical_activity')),
            'direction' => $direction,
            'level' => Level::fromQuiz($request->get('fat_level'), $direction),
            'gender' => Gender::fromQuiz($request->get('sex')),
        ]);

        Quiz::create([
            'user_id' => $user->id,
            ...Arr::except($request->validated(), 'name'),
        ]);
    }
}
