<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Game Information') }}
        </h2>
    </x-slot>
    <x-main-body-content>
        <h2>{{$game->title}}: {{$game->id}}</h2>
        <p>Rating: {{$game->rating}}</p>
        <p>Age: {{$game->age}}</p>
        <x-game-info :game="$game" :shouldRemove="$shouldRemove" />
    </x-main-body-content>
</x-app-layout>
