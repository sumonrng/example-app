<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Member Details</h1>
    @foreach ($data as $id=>$member)
        <h3>ID:{{$member->id}}</h3>
        <h3>Sponsor ID:{{$member->sponsor_id}}</h3>
        <h3>User Name:{{$member->username}}</h3>
        <h3>Email:{{$member->email}}</h3>
        <h3>Name:{{$member->name}}</h3>
        <h3>Country:{{$member->country}}</h3>
        <h3>City:{{$member->city}}</h3>
    @endforeach
</body>
</html>