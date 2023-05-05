<x-guest-layout>
    <x-card>
        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <x-card-header>
                <x-card-description>
                    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                </x-card-description>
            </x-card-header>

            <x-card-content>
                <!-- Password -->
                <div class="grid gap-1.5">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" />
                </div>
            </x-card-content>

            <x-card-footer>
                <x-button class="w-full">
                    {{ __('Confirm') }}
                </x-button>
            </x-card-footer>
        </form>
    </x-card>
</x-guest-layout>
