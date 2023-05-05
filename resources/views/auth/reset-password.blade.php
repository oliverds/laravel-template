<x-guest-layout>
    <x-card>
        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <x-card-header>
                <x-card-title>{{ __('Reset Password') }}</x-card-title>
            </x-card-header>

            <x-card-content>
                <div class="grid gap-4">
                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email Address -->
                    <div class="grid gap-1.5">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" />
                    </div>

                    <!-- Password -->
                    <div class="grid gap-1.5">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" type="password" name="password" required autocomplete="new-password" />
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
                    {{ __('Reset Password') }}
                </x-button>
            </x-card-footer>
        </form>
    </x-card>
</x-guest-layout>
