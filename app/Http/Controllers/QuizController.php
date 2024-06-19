<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuizStoreRequest;
use App\Models\Quiz;
use Illuminate\Support\Arr;

class QuizController extends Controller
{
    public function store(QuizStoreRequest $request)
    {
        $user = auth()->user();

        $user->update([
            'name' => $request->get('name'),
            'quiz_is_done' => true,
        ]);

        Quiz::create([
            'user_id' => $user->id,
            ...Arr::except($request->validated(), 'name'),
        ]);
    }
}
