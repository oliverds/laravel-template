<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-card>
                <x-card-header>
                    <x-card-title>{{ __("Welcome") }}</x-card-title>
                </x-card-header>
                <x-card-content>
                    {{ __("You're logged in!") }}
                </x-card-content>
            </x-card>
        </div>
    </div>
</x-app-layout>
