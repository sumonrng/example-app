<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>User Page</h1>
    {{-- <h2>{{ $id }} </h2> --}}
    {{-- @dd($id) --}}
    <h2>{{ $id['name'] }} </h2>
    <h2>{{ $id['mobile'] }} </h2>
    <h2>{{ $id['email'] }} </h2>
    @php 
    // dd($id);
    @endphp
</body>
</html>