<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
<!-- Latest compiled and minified CSS -->
<title>Document</title>
</head>
<body>
    <form action="{{ route('addUser') }}" method="POST">
        @csrf
        {{-- @dd($data) --}}
        <div class="form-group" >
          <label for="exampleInputEmail1">Sponsor ID</label>
          <input type="text" value="{{old('sponsor_id')}}" class="form-control @error('sponsor_id') is-invalid @enderror" id="sponsor_id" name="sponsor_id" aria-describedby="emailHelp" placeholder="User Name">
        </div>
        <span class="text-danger">
            @error('sponsor_id')
                {{$message}}
            @enderror
        </span>
        <div class="form-group" >
          <label for="exampleInputEmail1">User Name</label>
          <input type="text" value="{{old('username')}}" class="form-control @error('username') is-invalid @enderror" id="username" name="username" aria-describedby="emailHelp" placeholder="User Name">
        </div>
        <span class="text-danger">
            @error('username')
                {{$message}}
            @enderror
        </span>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="email">
        </div>
        <span class="text-danger">
            @error('email')
                {{$message}}
            @enderror
        </span>
        <div class="form-group">
          <label for="exampleInputPassword1">Name</label>
          <input type="text" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="name">
        </div>
        <span class="text-danger">
            @error('name')
                {{$message}}
            @enderror
        </span>
        <div class="form-group">
          <label for="exampleInputPassword1">Country</label>
          <input type="text" value="{{old('country')}}" class="form-control @error('country') is-invalid @enderror" id="country" name="country" placeholder="country">
        </div>
        <span class="text-danger">
            @error('country')
                {{$message}}
            @enderror
        </span>
        <div class="form-group">
            <label for="exampleInputPassword1">Age</label>
            <input type="text" value="{{old('age')}}" class="form-control" id="age" name="age" placeholder="age">
        </div>
        <span class="text-danger">
            @error('age')
                {{$message}}
            @enderror
        </span>
        <div class="form-group">
            <label for="exampleInputPassword1">City</label>
                <select class="form-control" id="city" name="city">
                    <option selected>Select City</option>
                    @foreach ($data as $id=>$member)
                    <option value="{{ $member->id}}">{{ $member->city_name}}</option>
                    @endforeach
                </select>
        </div>
        
        <span class="text-danger">
            @error('city')
                {{$message}}
            @enderror
        </span>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="text" value="{{old('password')}}" class="form-control" id="password" name="password" placeholder="password">
        </div>
        <span class="text-danger">
            @error('password')
                {{$message}}
            @enderror
        </span>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>