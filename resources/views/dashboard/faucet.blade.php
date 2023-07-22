<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Faucet') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="text-2xl font-bold text-center mt-6 mb-1">{{ __('What is Faucet') }}</h2>
                <h3 class="text font-semibold text-center mb-4">{{ __('You can get 5000 Credits from Faucet every day, you can use it for translate article.') }}</h3>
                <livewire:faucet />
            </div>
        </div>
    </div>
</x-app-layout>
