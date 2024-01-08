<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>All Member's Information</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">sponsor_id</th>
      <th scope="col">username</th>
      <th scope="col">email</th>
      <th scope="col">name</th>
      <th scope="col">country</th>
      <th scope="col">city</th>
      <th scope="col">View</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $id=>$user)
    <tr>
      <td>{{$user->id }}</td>
      <td>{{$user->sponsor_id }}</td>
      <td>{{$user->username }}</td>
      <td>{{$user->email }}</td>
      <td>{{$user->name }}</td>
      <td>{{$user->country }}</td>
      <td>{{$user->city }}</td>
      <td><a href="{{ route('singleuser',$user->id)}}" class="btn btn-primary btn-sm"> Show</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>