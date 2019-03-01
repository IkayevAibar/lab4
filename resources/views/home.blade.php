@extends('layouts.app')

@section('content')
<div class="alert alert-warning alert-dismissible fade show" role="alert" style="position:fixed; top:60px; left:85%; margin-bottom:15px;">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    <strong style="font-size:20px;">You are logged in!</strong> 
</div>

<script>
    $(".alert").alert();
</script>
<div class="container" >
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="card-header">Posts</div>
                
                
                
                @foreach ($posts as $post)
                        <div class="media" style=" padding:5px; margin-top:10px; ">
                            <img class="media-object pull-left" src={{ $post->image }} alt="Image" style="width:75px; margin-right:8px;">
                            <div class="media-body ">
                                <h4 class="media-heading"><a class="" href="news/{{ $post->id }}"> {{ $post->name }}</a></h4>
                                <p>{{ $post->body }}</p>
                            </div>
                            
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
