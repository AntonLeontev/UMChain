<script setup>
import AppLayout from "../Layouts/AppLayout.vue";
</script>
<template>
    <AppLayout>
	<div class="flex items-center justify-center h-full">
        <div class=" reg__info">
            <div class="reg__form">
                <form method="POST">
                    <div class="reg__one">
                        <div class="reg__name">Email</div>
                        <div class="reg__field">
                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                                class="{{ session('wrong__input') }} focus:border-b-pink focus:ring-0"
                            />
                        </div>
                    </div>
                    <div class="reg__one">
                        <div class="reg__name">Password</div>
                        <div class="reg__field">
                            <input
                                id="password"
                                type="password"
                                class="login__password {{ session('wrong__input') }} focus:border-b-pink focus:ring-0"
                                name="password"
                                required
                                autocomplete="current-password"
                            />
                        </div>
                    </div>
                    <div class="mb-8 reg__forget">
                        <a
                            href="{{ LaravelLocalization::localizeUrl(route('password.email')) }}"
                            >Forget password</a
                        >
                    </div>
					<button type="button">Login</button>
                </form>
                <div class="reg__have">
                    Not registered yet?
					<a
                        href="{{ LaravelLocalization::localizeUrl(route('register')) }}"
                        class="reg__signin"
                        >&nbsp;Register
                    </a>
                </div>
            </div>
        </div>
	</div>
    </AppLayout>
</template>
