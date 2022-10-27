<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Game List') }}
        </h2>
    </x-slot>

    <table>
        <thead>
            <th>Title</th>
        </thead>
        <tbody>
        @foreach($games as $game)
        <tr>
            <td>
                <a href="{{route('game-info', $game->id)}}">{{$game->title}}</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
