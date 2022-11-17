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

<div
    x-data="wishlistController"
    x-init="setGame({{$gameInfo->id}}, {{$gameInfo->is_on_wishlist}})">
    <div x-show="isOnWishlist">
        <p>This game is on your wishlist</p>
    </div>

    <div x-show="!isOnWishlist">
        <p>This game is not on your wishlist</p>
    </div>
    <x-primary-button @click="toggleOnWishlist">
        <span x-show="!isOnWishlist">Add game to  wishlist!</span>
        <span x-show="isOnWishlist">Remove from wishlist</span>
    </x-primary-button>
</div>
    </x-main-body-content>
</x-app-layout>
