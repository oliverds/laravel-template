<section>
    <x-card>
        <x-card-header>
            <x-card-title>{{ __('Update Password') }}</x-card-title>

            <x-card-description>
                {{ __('Ensure your account is using a long, random password to stay secure.') }}
            </x-card-description>
        </x-card-header>

        <x-card-content>
            <form id="update-password" method="post" action="{{ route('password.update') }}">
                @csrf
                @method('put')

                <div class="grid w-full items-center gap-4">
                    <div class="grid w-full max-w-sm items-center gap-1.5">
                        <x-input-label for="current_password" :value="__('Current Password')" />
                        <x-text-input id="current_password" name="current_password" type="password" autocomplete="current-password" />
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" />
                    </div>

                    <div class="grid w-full max-w-sm items-center gap-1.5">
                        <x-input-label for="password" :value="__('New Password')" />
                        <x-text-input id="password" name="password" type="password" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password')" />
                    </div>

                    <div class="grid w-full max-w-sm items-center gap-1.5">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" />
                    </div>
                </div>
            </form>
        </x-card-content>

        <x-card-footer>
            <div class="flex items-center gap-4">
                <x-button form="update-password">{{ __('Save') }}</x-button>

                @if (session('status') === 'profile-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-muted-foreground"
                    >{{ __('Saved.') }}</p>
                @endif
            </div>
        </x-card-footer>
    </x-card>
</section>
