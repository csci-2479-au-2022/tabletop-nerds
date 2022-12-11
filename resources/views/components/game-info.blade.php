@props(['game', 'shouldRemove'])

{{-- all the x-whatever attributes are Alpine.js features --}}

<div
    {{-- this is the JS functionality --}}
    x-ref="game"
    x-cloak
    x-data="game"
    x-init="setGame ({{$game->id}}, {{$game->is_on_wishlist}})"
>
    <h2>{{$game->title}}</h2>
    <p>Rating: {{$game->rating}}</p>
    <p>Age: {{$game->age}}</p><br>
    <div x-show="isOnWishlist">
        <p>You already have {{$game->title}} on your Wishlist PEASANT, wouldst thou like to remove?</p>
    </div>

@auth

    <h2>Leave a Review!</h2>
    <form>
        <label for="rating">Rating 1-10: </label>
        <input type="number" name="rating" min="1" max="10">
        <br>
        <label for="review">Review: </label>
        <input type="text" size="50" maxlength="100">

    </form>


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
