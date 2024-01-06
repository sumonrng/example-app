<h1>Hello</h1>
@php
    //$user = "Samiul Islam";
    // $name = ['Samiul','Raian','Tanisha'];
@endphp
@foreach ($name as $id => $u)
    <h1>{{ $id }} {{ $u['name'] }} | {{ $u['mobile'] }} | {{ $u['email'] }} | <a href="{{ route('test2',$id)}}">Show</a></h1>
    
@endforeach
{{-- <h1>{{ $user }}</h1>
<h1>{{ !empty($city) ? $city : 'No City' }}</h1>
<h1>{{ !empty($user) ? $user : 'No User' }}</h1> --}}
{{-- <h1>{!! $city !!}</h1> --}}
{{-- <script> --}}
    {{-- // var data  = @json($name);
    // var data  = {{ Js::from($name); }}
    // data.forEach(element => {
    //     console.log(element);
    // });
    // var data  = @json($user); --}}
    
{{-- </script> --}}