<x-guest-layout>
    <x-card>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <x-card-header>
                <x-card-title>{{ __('Register') }}</x-card-title>

                <x-card-description>
                    {{ __('Already have an account?') }}
                    <a class="underline underline-offset-4 hover:text-primary" href="{{ route('login') }}">
                        {{ __('Log in') }}
                    </a>
                </x-card-description>
            </x-card-header>

            <x-card-content>
                <div class="grid w-full item-center gap-4">
                    <!-- Name -->
                    <div class="grid gap-1.5">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" />
                    </div>

                    <!-- Email Address -->
                    <div class="grid gap-1.5">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" />
                    </div>

                    <!-- Password -->
                    <div class="grid gap-1.5">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="grid gap-1.5">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" />
                    </div>
                </div>
            </x-card-content>

            <x-card-footer>
                <x-button class="w-full">
                    {{ __('Register') }}
                </x-button>
            </x-card-footer>
        </form>
    </x-card>
</x-guest-layout>
