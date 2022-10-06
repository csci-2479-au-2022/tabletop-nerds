
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
    @foreach($games as $game)
    <p>{{$game['title']}}</p>
    @endforeach 

    <h3>Game Info</h3>
    @foreach($info as $info)
    <p>{{$info['description']}}</p>
    @endforeach
</body>
</html>