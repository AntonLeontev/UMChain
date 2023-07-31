@extends('layouts.auth')

@section('title', __('auth.titles.forgot-password'))

@section('h1', __('auth.titles.forgot-password'))

@section('content')
<div class="">
	<div class="reg__subtitle">{{__('Enter the Email you entered during registration, we will send you a link to change your password')}}</div>
	<div class="reg__wrapper">
		<div class="reg__info">
			<div class="reg__form">
				<form method="POST" action="{{ LaravelLocalization::localizeUrl(route('password.email')) }}">
					@csrf
					<div class="mb-8 reg__one">
						<div class="reg__name">{{__('Email')}}</div>
						<div class="reg__field">
							<input type="email" name="email" value="{{ old('email') }}" required autofocus>
						</div>
						@error('email')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
					</div>
					<x-secondary-button type="submit">{{__('Submit')}}</x-secondary-button>
				</form>
				<div class="reg__have">{{__('Not registered yet?')}}<a href="{{ LaravelLocalization::localizeUrl(route('register')) }}" class="reg__signin">&nbsp;{{__('Register now')}}</a></div>
			</div>
		</div>
	</div>
</div>
@endsection
