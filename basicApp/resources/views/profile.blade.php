@extends('layouts.app')

<html>
    @section('content')
        <body>
            
            <h1>Welcome to your profile {{$name}}</h1>
            <h2>Details:</h2>
            <b><ol>
                <li>{{$id}}</li>
                <li>{{$dob}}</li>
            </ol></b>

            <h2>Team:</h2>
            <ul>
                @foreach($names as $n)
                    <li>{{$n}}</li>
                @endforeach
            </ul>
    @endsection
        
        </body>
</html>

