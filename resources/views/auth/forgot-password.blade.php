<x-guest-layout>
    <x-card>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <x-card-header>
                <x-card-title>{{ __('Fogot Password') }}</x-card-title>
            </x-card-header>

            <x-card-content>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <div class="grid gap-4">
                    <p class="text-sm text-muted-foreground">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </p>

                    <!-- Email Address -->
                    <div class="grid gap-1.5">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" />
                    </div>
                </div>
            </x-card-content>

            <x-card-footer>
                <x-button class="w-full">
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </x-card-footer>
        </form>
    </x-card>
</x-guest-layout>
