@props(['game', 'shouldRemove'])

{{-- all the x-whatever attributes are Alpine.js features --}}
<div
    {{-- this is the JS functionality --}}
    x-ref="game"
    x-cloak
    x-data="game"
    x-init="setGame ({{$game->id}}, {{$game->is_on_wishlist}})"
>

<table>
    <tr>
        <th><img src="{{$game->image_url}}"></th>
    </tr>
    <tr>
        <td>
            <strong><em>{{$game->title}}</em></strong><br>
            <strong>Complexity Rating:</strong> {{$game->complexity_rating}} / 5.00 <br>
            <strong>Average play time:</strong> {{$game->playing_time_minutes}} <br>
            <strong>Number of players:</strong> {{$game->min_number_players}} to {{$game->max_number_players}}<br>
            <strong>Category:</strong> {{$game->categories->name}}<br>
            <strong>Publisher:</strong> {{$game->publisher->name}}<br><br>
@auth
            <div x-show="isOnWishlist">
                <p><em>You already have {{$game->title}} on your Wishlist PEASANT, wouldst thou like to remove?</em></p>
            </div>
        </td>
    </tr>
</table>

    <div x-show="!isOnWishlist">
        <p><em>Wait... Didn't you want to add {{$game->title}} to your Wishlist?</em></p>
    </div>
    {{-- the @click is the Alpine click handler --}}
        <x-primary-button @click="toggleWishlist({{auth()->user()->id}}, {{$shouldRemove}})">
            <span x-show="!isOnWishlist">Add to Wishlist</span>
            <span x-show="isOnWishlist">Remove from Wishlist</span>
        </x-primary-button>
@endauth
</div>
