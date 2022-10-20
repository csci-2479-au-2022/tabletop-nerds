
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Info</title>
</head>
<body>
    <nav>
        <p><a href="{{route('game-list')}}">Back to Games</a></p>
    </nav>
    <h1>Game Information</h1>
        <h2>{{$game->title}}: {{$game->id}}</h2>
        <p>Rating: {{$game->rating}}</p>
        <p>Age: {{$game->age}}</p>
</body>
</html>
