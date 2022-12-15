@props(['game', 'shouldRemove'])

{{-- all the x-whatever attributes are Alpine.js features --}}
@auth
<div
    {{-- this is the JS functionality --}}
    x-ref="game"
    x-cloak
    x-data="game"
    x-init="setGame ({{$game->id}}, {{$game->is_on_wishlist}})"
>
    <h2>{{$game->title}}</h2>
    <p>Complexity Rating: {{$game->complexity_rating}} / 5.00</p>
    <p>Average play time: {{$game->playing_time_minutes}}</p>
    <p>Number of players: {{$game->min_number_players}} to {{$game->max_number_players}}</p>
    <p>Category: {{$game->gameCategories}}</p>
    <p>Publisher: {{$game->publisher->name}}</p><br>
    <div x-show="isOnWishlist">
        <p>You already have {{$game->title}} on your Wishlist PEASANT, wouldst thou like to remove?</p>
    </div>

    <div x-show="!isOnWishlist">
        <p>Wait... Didn't you want to add {{$game->title}} to your Wishlist?</p>
    </div>
    {{-- the @click is the Alpine click handler --}}
        <x-primary-button @click="toggleWishlist({{auth()->user()->id}}, {{$shouldRemove}})">
            <span x-show="!isOnWishlist">Add to Wishlist</span>
            <span x-show="isOnWishlist">Remove from Wishlist</span>
        </x-primary-button>
@endauth
</div>
