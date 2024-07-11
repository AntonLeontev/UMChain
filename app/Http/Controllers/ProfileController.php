<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfilePasswordUpdate;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Resources\UserResource;
use App\Models\TronWallet;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    public function current(): JsonResource
    {
        $user = auth()->user()
            ->loadCount(['unreadNotifications', 'refLink']);

        if ($user->quiz_is_done) {
            $user->load(['activeRefLink', 'activeDataSource']);
        }

        return new UserResource($user);
    }

    public function update(ProfileUpdateRequest $request): void
    {
        auth()->user()->update($request->validated());

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

    public function telegramImage(int $id)
    {
        $response = Http::telegram()
            ->post('getUserProfilePhotos', [
                'user_id' => $id,
                'limit' => 1,
            ]);

        $fileId = $response->json('result.photos.0.0.file_id');

        $filePath = Http::telegram()
            ->post('getFile', [
                'file_id' => $fileId,
            ])
            ->json('result.file_path');

        $file = Http::get(sprintf('https://api.telegram.org/file/bot%s/%s', config('services.telegram.bot'), $filePath));

        return $file;
    }

    public function storeCalories()
    {

    }
}
