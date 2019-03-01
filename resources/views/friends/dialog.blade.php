@extends('layouts.app')

@section('content')
    
    <div class="container">
        </br>
        @foreach($messages as $message )
            {{$message->content}}
            <a type="button" href="/users/{{$friend->id}}/showMessenger" name="" id="" class="btn btn-primary" btn-lg btn-block">send message</a>
        @endforeach
    </div>
    
@endsection
