<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfilePasswordUpdate;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\EthWallet;
use App\Models\TronWallet;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function current(): JsonResponse
    {
        return response()->json(auth()->user());
    }

    public function update(ProfileUpdateRequest $request): void
    {
        auth()->user()->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        if (! empty($request->tron)) {
            TronWallet::updateOrCreate(
                ['user_id' => auth()->id()],
                ['address' => $request->tron]
            );
        }

        if (! empty($request->eth)) {
            EthWallet::updateOrCreate(
                ['user_id' => auth()->id()],
                ['address' => $request->eth]
            );
        }
    }

    public function updatePassword(ProfilePasswordUpdate $request): void
    {
        auth()->user()->updateOrFail(['password' => Hash::make($request->new_password)]);
    }
}
