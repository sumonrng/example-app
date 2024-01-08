<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($data as $id=>$user)
        <h3>
            {{$user->sponsor_id }} |
            {{$user->username }} |
            {{$user->email }} |
            {{$user->name }} |
            {{$user->country }} |
            {{$user->city }} |
            {{$user->name }} |
        </h3>
    @endforeach
</body>
</html>