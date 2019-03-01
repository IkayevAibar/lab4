@extends('layouts.app')

@section('content')
    
    <div class="container">
        </br>
        @foreach($friends as $friend )
            {{$friend->name}}
            <form action="{{route('showMessenger')}}" method="post">
                @csrf
                <input type="hidden" name='user_id' value={{$friend->id}}>
                <input type="submit">
            </form>
        @endforeach
    </div>
    
@endsection
