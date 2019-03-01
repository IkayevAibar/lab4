@extends('layouts.app')

@section('content')
@if (!isset(Auth::user()->id))
    <script>window.location = "/login";</script>
@else
<div class="container d-flex justify-content-center align-content-center " style="">
    
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
        <div class="form-group">
          <label for=""></label>
          <input type="text"
            class="form-control" name="src" id="src" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">image source</small>
        </div>
        <button type="submit" class="btn btn-primary">Post</button>
    </form>
</div>
@endif
@endsection
