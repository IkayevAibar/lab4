@extends('layouts.app')

@section('content')
    
    <div class="container">
        </br>
        <div class="card d-flex">
            <img class="" src={{$toPost->src}} style="width:200px;" alt="">
            <div class="-body card-img-left">
                <h4 class="card-title">{{$toPost->title}}</h4>
                <p class="card-text">{{$toPost->body}}</p>
            </div>
        </div>
    </div>
    
@endsection
