@props(['game', 'shouldRemove'])

{{-- all the x-whatever attributes are Alpine.js features --}}
<div
    {{-- this is the JS functionality --}}
    x-ref="game"
    x-cloak
    x-data="game({{$game->id}}, {{$game->is_on_wishlist}})"
>
    {{-- title is an attribute on the Book model, i.e. there is a title column in the table --}}
    <h3>{{$game->title}}</h3>
    <div x-show="isOnWishlist">
        <p>This game is on your wishlist already</p>
    </div>

    <div x-show="!isOnWishlist">
        <p>This game can be added to your wishlist</p>
    </div>
    {{-- the @click is the Alpine click handler --}}
    @auth
        <x-primary-button @click="toggleWishlist({{auth()->user()->id}}, {{$shouldRemove}})">
            <span x-show="!isOnWishlist">Add to wishlist</span>
            <span x-show="isOnWishlist">Remove from wishlist</span>
        </x-primary-button>
    @endauth
</div>
