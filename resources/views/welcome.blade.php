<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Laravel</title>

    </head>
    <body >
<h1>{{$type}}</h1>
@if($type == 'admin')
    <a href="{{route('link1')}}">link 1</a>
    <a href="{{route('link2')}}">link 2</a>
    <a href="{{route('link3')}}">link 3</a>
@else
    <h1>Not admin</h1>
@endif

  @foreach($users as $user)
      <h1>{{$user['username']}} -  {{$user['age']}}</h1>
  @endforeach


     {{-- hello   --}}
    <!--hello -->

    </body>
</html>
