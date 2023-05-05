<section class="space-y-6">
    <x-card>
        <x-card-header>
            <x-card-title>{{ __('Delete Account') }}</x-card-title>

            <x-card-description class="max-w-xl">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
            </x-card-description>
        </x-card-header>

        <x-card-footer>
            <x-button
                variant="destructive"
                x-data=""
                x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
            >{{ __('Delete Account') }}</x-button>

            <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                    @csrf
                    @method('delete')

                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Are you sure you want to delete your account?') }}
                    </h2>

                    <p class="mt-1 text-sm text-gray-600">
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                    </p>

                    <div class="mt-6">
                        <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                        <x-input-label
                            id="password"
                            name="password"
                            type="password"
                            class="mt-1 block w-3/4"
                            placeholder="{{ __('Password') }}"
                        />

                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                    </div>

                    <div class="mt-6 flex justify-end">
                        <x-button variant="ghost" type="button" x-on:click="$dispatch('close')">
                            {{ __('Cancel') }}
                        </x-button>

                        <x-button variant="destructive" class="ml-3">
                            {{ __('Delete Account') }}
                        </x-button>
                    </div>
                </form>
            </x-modal>
        </x-card-footer>
    </x-card>
</section>
