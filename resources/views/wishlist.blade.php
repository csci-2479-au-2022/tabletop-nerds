<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Game Wishlist') }}
        </h2>
    </x-slot>
    <x-main-body-content>
        <table>
            <thead>
                <th>Your Wishlist</th>
            </thead>
            <tbody>
            @foreach($wishlist as $game)
                <p>{{$game['title']}}</p>
                <tr>
                    <td>
                        <x-wishlist :game="$game" :shouldRemove="$shouldRemove" />
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </x-main-body-content>
</x-app-layout>
