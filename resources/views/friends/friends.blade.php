@extends('layouts.app')

@section('content')
    
    <div class="container">
        </br>
        @foreach($friends as $friend )
            {{$friend->name}}
            <a type="button" action="friend/{{$friend->id}}/sendMessage" name="" id="" class="btn btn-primary" btn-lg btn-block">send message</a>
        @endforeach
    </div>
    
@endsection
