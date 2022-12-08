<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tabletop Nerds') }}
        </h2>
    </x-slot>
    <body>
        <h1>Here are the search results!</h1>
        @foreach($title as $titles)
        <tr>
            <td>
                {{$titles->title}}
            </td>
        </tr>
        @endforeach
    </body>
    </html>
</x-app-layout>
