
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Details</title>
</head>
<body>
    <h1>Game Details</h1>
    <table>
        <thead>
            <th>Details</th>
        </thead>
        <tbody>
        @foreach($games as $game)
        <tr>
            <td>
                <a href="{{route('getGameById', $game->id)}}">{{$game->title]}}</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

</body>
</html>
