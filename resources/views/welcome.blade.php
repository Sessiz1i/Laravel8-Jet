<x-guest-layout>
    <x-slot name="header">{{ __('Anasayfa') }}</x-slot>
    <div class="py-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow sm:rounded-lg">
                <x-jet-welcome/>
            </div>
        </div>
    </div>
</x-guest-layout>