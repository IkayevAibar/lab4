@extends('layouts.app')

@section('content')
    
    <div class="container">
        </br>
        <form class="form mc-auto" style="width:50%; margin-top:80px;" method="get" action=" {{{ url("writed") }}}" >
        
        <input type="hidden" name="userid" id="userid" class="form-control" value={{Auth::user()->id}}>
        
        <div class="form-group">
            <label for="">Title of post</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Enter the name..." aria-describedby="helpId">
            <small id="helpId" class="text-muted">For example: Free Loot!!!</small>
        </div>
        <div class="form-group">
            <label for="">Your post</label>
            <textarea type="text"
                class="form-control " name="body" id="body" aria-describedby="helpId" placeholder="Enter the text..." style="resize: none;width: 500px; height: 150px; margin:auto;"></textarea>
            <small id="helpId" class="form-text text-muted">For example: Hello for everyone, at freeloot.com you can take free loot.</small>
        </div>
        </form>
    </div>
    
@endsection
