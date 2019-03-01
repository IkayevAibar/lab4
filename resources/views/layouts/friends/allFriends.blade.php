@extends('layouts.app')

@section('content')
    
    <div class="container">
        </br>
        @foreach($friends as $friend)
            {{$friend->name}}
        @endforeach
    </div>
    
@endsection
