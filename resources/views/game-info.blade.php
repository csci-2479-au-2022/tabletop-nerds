
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Details</title>
</head>
<body>
    <h1>Game Information</h1>
    <nav>
        <p><a href="{{route('game-list')}}">Back to Games</a></p>
    <nav>
        <h2>{{$game->title}}</h2>
        <p>{{$game->id}}</p>
        <p>{{$game->title}}</p>
</body>
</html>
