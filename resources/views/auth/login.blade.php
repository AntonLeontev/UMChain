@extends('layouts.auth')

@section('title', __('auth.titles.login'))

@section('h1', __('auth.titles.login'))

@section('content')
    <div class="reg__info">
        <div class="reg__form">
            <form method="POST" action="{{ LaravelLocalization::localizeUrl(route('login')) }}">
                @csrf
                <div class="reg__one">
                    <div class="reg__name">{{ __('Email') }}</div>
                    <div class="reg__field">
                        <input type="email" name="email" value="{{ old('email') }}" required autofocus
                            class="{{ session('wrong__input') }} focus:border-b-pink focus:ring-0">
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
                        <input id="password" type="password" class="login__password {{ session('wrong__input') }} focus:border-b-pink focus:ring-0"
                            name="password" required autocomplete="current-password">
                    </div>
                    @error('password')
                        <div class="">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-8 reg__forget">
                    <a
                        href="{{ LaravelLocalization::localizeUrl(route('password.email')) }}">{{ __('Forget password?') }}</a>
                </div>
                <x-secondary-button type="submit">{{ __('Login') }}</x-secondary-button>
            </form>
            <div class="reg__have">{{ __('Not registered yet?') }}<a
                    href="{{ LaravelLocalization::localizeUrl(route('register')) }}"
                    class="reg__signin">&nbsp;{{ __('Register now') }} </a></div>
        </div>
    </div>
@endsection
