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
    <h4><a href="{{ route('member') }}" class="btn btn-success btn-sm"> Add Member</a></h4>
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
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($members as $id=>$user)
    <tr>
      <td>{{$user->id }}</td>
      <td>{{$user->sponsor_id }}</td>
      <td>{{$user->username }}</td>
      <td>{{$user->email }}</td>
      <td>{{$user->name }}</td>
      <td>{{$user->country }}</td>
      <td>{{$user->city_name }}</td>
      <td><a href="{{ route('singleuser',$user->id)}}" class="btn btn-primary btn-sm"> Show</a></td>
      <td><a href="{{ route('update.edit',$user->id)}}" class="btn btn-success btn-sm"> Update</a></td>
      <td><a href="{{ route('deleteuser',$user->id)}}" class="btn btn-danger btn-sm"> Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="mt-5">
  {{-- {{$data->links('pagination::bootstrap-4')}} --}}
  {{-- {{$data->links('pagination::bootstrap-5')}} --}}
  {{$members->links()}}
</div>
</body>
</html>