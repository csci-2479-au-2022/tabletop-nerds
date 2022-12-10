<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Game Information') }}
        </h2>
    </x-slot>
    <x-main-body-content>
        <x-game-info :game="$game" :shouldRemove="$shouldRemove" />
    </x-main-body-content>
</x-app-layout>
