<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFitUpdateRequest;
use App\Models\User;

class FitController extends Controller
{
    public function update(UserFitUpdateRequest $request)
    {
        User::where('id', auth()->id())
            ->update($request->validated());
    }
}
