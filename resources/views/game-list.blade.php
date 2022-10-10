
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Game List</h1><h2>{{$greeting}}</h2>
    <table>
        <thead>
            <th>Title</th>
        </thead>
        <tbody>
        @foreach($games as $game)
        <tr>
            <td>
                <a href="{{route('gamelist', $game->id)}}">{{$game->title]}}</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

</body>
</html>
