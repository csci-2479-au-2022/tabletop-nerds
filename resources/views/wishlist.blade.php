<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Wishlist</title>
</head>
<body>
    <h1>This is your wishlist - hopefully you get what you wish for!</h1>
    @foreach($wishlist as $game)
    <p>{{$game['title']}}</p>
    @endforeach
</body>
</html>
