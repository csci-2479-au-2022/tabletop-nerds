<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Wishlist') }}
        </h2>
    </x-slot>
    <body>
        <h1>This is your wishlist - hopefully you get what you wish for!</h1>
        @foreach($wishlist as $game)
        <p>{{$game['title']}}</p>
        <x-game :game="$game" :shouldRemove="$shouldRemove" />
        @endforeach
    </body>
    </html>
</x-app-layout>
