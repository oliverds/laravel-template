<section>
    <x-card>
        <x-card-header>
            <x-card-title>{{ __('Profile Information') }}</x-card-title>

            <x-card-description>
                {{ __("Update your account's profile information and email address.") }}
            </x-card-description>
        </x-card-header>

        <x-card-content>
            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form id="update-profile" method="post" action="{{ route('profile.update') }}">
                @csrf
                @method('patch')

                <div class="grid w-full items-center gap-4">
                    <div class="grid w-full max-w-sm items-center gap-1.5">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" name="name" type="text" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" />
                    </div>

                    <div class="grid w-full max-w-sm items-center gap-1.5">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" name="email" type="email" :value="old('email', $user->email)" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" />

                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                            <div class="grid gap-1.5">
                                <p class="text-sm">
                                    {{ __('Your email address is unverified.') }}
                                </p>

                                <div>
                                    <x-button variant="secondary" form="send-verification">
                                        {{ __('Click here to re-send the verification email.') }}
                                    </x-button>
                                </div>

                                @if (session('status') === 'verification-link-sent')
                                    <p class="text-sm">
                                        {{ __('A new verification link has been sent to your email address.') }}
                                    </p>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </form>
        </x-card-content>

        <x-card-footer>
            <div class="flex items-center gap-4">
                <x-button form="update-profile">{{ __('Save') }}</x-button>

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
