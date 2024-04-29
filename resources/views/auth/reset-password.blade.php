@extends('layouts.auth')

@section('title', __('auth.titles.reset-password'))

@section('h1', __('auth.titles.reset-password'))

@section('content')
    <div class="reg__info">
        <div class="reg__form">
            <form method="POST" action="{{ route('password.update') }}">
                {{ session()->get('ref_master_slug') }}
                @csrf
                @if (session()->has('package_message'))
                    <div class="reg__have">{{ session()->get('package_message') }}</div>
                @endif
				<input type="hidden" name="token" value="{{ $request->get('token') }}">
                <div class="reg__one">
                    <div class="reg__name">{{ __('Email') }}</div>
                    <div class="reg__field">
                        <input type="email" name="email" value="{{ old('email') ?? $request->email }}" required>
                    </div>
					@error('email')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="reg__one">
                    <div class="reg__name">{{ __('Password') }}</div>
                    <div class="reg__field">
                        <input type="password" name="password" required autocomplete="new-password">
                    </div>
					@error('password')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="reg__one">
                    <div class="reg__name">{{ __('Repeat password') }}</div>
                    <div class="reg__field">
                        <input type="password" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
				
				<x-secondary-button class="mt-4" type="submit">{{ __('Reset Password') }}</x-secondary-button>
            </form>
        </div>
    </div>
@endsection
