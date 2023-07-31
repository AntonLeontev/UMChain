@extends('layouts.auth')

@section('title', __('auth.titles.login'))

@section('h1', __('auth.titles.login'))

@section('content')
    <div class="reg__info">
        <div class="reg__form">
            <form method="POST" action="{{ LaravelLocalization::localizeUrl(route('password.store')) }}">
                {{ session()->get('ref_master_slug') }}
                @csrf
                @if (session()->has('package_message'))
                    <div class="reg__have">{{ session()->get('package_message') }}</div>
                @endif
                <div class="reg__one">
                    <div class="reg__name">{{ __('Email') }}</div>
                    <div class="reg__field">
                        <input type="email" name="email" value="{{ old('email') }}" required>
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
                <div class="mb-8 reg__agreement">
                    <input id="happy" type="checkbox" class="custom-checkbox" name="happy" value="yes" required>
                    <label for="happy"><span>{{ __('I agree to') }}&nbsp;<a
                                href=""
                                class="happy__hide">{{ __('the processing of personal data.') }}</a></span></label>
                </div>
				
				<x-secondary-button type="submit">{{ __('Reset Password') }}</x-secondary-button>
            </form>
        </div>
    </div>
@endsection
