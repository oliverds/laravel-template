<x-guest-layout>
    <x-card>
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <x-card-header>
                <x-card-title>{{ __('Verify Email') }}</x-card-title>

                <x-card-description>
                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </x-card-description>
            </x-card-header>

            @if (session('status') == 'verification-link-sent')
                <x-card-content>
                    <div class="mb-4 font-medium text-sm">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                </x-card-content>
            @endif

            <x-card-footer>
                <x-button class="w-full">
                    {{ __('Resend Verification Email') }}
                </x-button>
            </x-card-footer>
        </form>
    </x-card>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-button variant="link" class="w-full">
            {{ __('Log Out') }}
        </x-button>
    </form>
</x-guest-layout>
