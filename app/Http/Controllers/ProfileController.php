<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfilePasswordUpdate;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Resources\UserResource;
use App\Models\TronWallet;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    public function current(): JsonResource
    {
        return new UserResource(auth()->user()
            ->loadCount(['unreadNotifications', 'refLink'])
            ->load(['activeRefLink', 'activeDataSource']));
    }

    public function update(ProfileUpdateRequest $request): void
    {
        auth()->user()->update(
            Arr::except($request->validated(), ['tron'])
        );

        if (! empty($request->tron)) {
            TronWallet::updateOrCreate(
                ['user_id' => auth()->id()],
                ['address' => $request->tron]
            );
        }
    }

    public function updatePassword(ProfilePasswordUpdate $request): void
    {
        if (! Hash::check($request->old_password, auth()->user()->password)) {
            throw ValidationException::withMessages([
                'old_password' => [__('auth.password')],
            ]);
        }

        auth()->user()->updateOrFail(['password' => Hash::make($request->new_password)]);
    }

    public function referralData(): JsonResponse
    {
        $registrations = auth()->user()->loadCount('referrals')->referrals_count;
        $clicks = auth()->user()->activeRefLink->loadCount('clicks')->clicks_count;

        return response()->json(compact('registrations', 'clicks'));
    }
}
