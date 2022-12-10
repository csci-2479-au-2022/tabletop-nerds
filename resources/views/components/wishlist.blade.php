@props(['game', 'shouldRemove'])

{{-- all the x-whatever attributes are Alpine.js features --}}
<div
    {{-- this is the JS functionality --}}
    x-ref="game"
    x-cloak
    x-data="game({{$game->id}}, {{$game->is_on_wishlist}})"
    x-init="setGame ({{$game->id}}, {{$game->is_on_wishlist}})"
>
    {{-- title is an attribute on the Book model, i.e. there is a title column in the table --}}
    <br>
    <h2>{{$game->title}}</h2>
    <table>
    <div x-show="isOnWishlist">
    </div>
    </table>
    {{-- the @click is the Alpine click handler --}}
    @auth
        <x-primary-button @click="toggleWishlist({{auth()->user()->id}}, {{$shouldRemove}})">
            <span x-show="isOnWishlist">Remove from Wishlist</span>
        </x-primary-button>
    @endauth
</div>
