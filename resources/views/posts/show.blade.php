@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="media" style="border:1px solid grey; padding:5px; ">
                        <div class="media-body">
                            <h4 class="media-heading">{{ $post->name }}</h4>
                            <p>{{ $post->body }}</p>
                        </div>
                        <img class="media-object" src={{ $post->image }} alt="Image" style="width:300px; margin-right:8px;">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
