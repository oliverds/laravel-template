<x-guest-layout>
    <x-card>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <x-card-header>
                <x-card-title>{{ __('Log in') }}</x-card-title>

                @if (Route::has('register'))
                    <x-card-description>
                        {{ __('Not a member?') }}
                        <a class="underline underline-offset-4 hover:text-primary" href="{{ route('register') }}">
                            {{ __('Register') }}
                        </a>
                    </x-card-description>
                @endif
            </x-card-header>

            <x-card-content>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <div class="grid w-full items-center gap-4">
                    <!-- Email Address -->
                    <div class="grid gap-1.5">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" />
                    </div>

                    <!-- Password -->
                    <div class="grid gap-1.5">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" />
                    </div>

                    <!-- Remember Me -->
                    <div>
                        <label for="remember_me" class="inline-flex items-center">
                            <x-checkbox-input id="remember_me" type="checkbox" name="remember" />
                            <span class="ml-2 text-sm font-medium leading-none">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                </div>
            </x-card-content>

            <x-card-footer>
                <x-button class="w-full">
                    {{ __('Log in') }}
                </x-button>
            </x-card-footer>
        </form>
    </x-card>

    @if (Route::has('password.request'))
        <p class="mt-4 text-center text-sm text-muted-foreground">
            <a class="underline underline-offset-4 hover:text-primary" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        </p>
    @endif
</x-guest-layout>
