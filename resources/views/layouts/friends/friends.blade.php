@extends('layouts.app')

@section('content')
    
    <div class="container">
        </br>
        @foreach($friends as $friend )
            {{$friend->name}}
            <a type="button" name="" id="" class="btn btn-primary" btn-lg btn-block">send message</a>
        @endforeach
    </div>
    
@endsection
