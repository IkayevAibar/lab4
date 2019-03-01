@extends('layouts.app')

@section('content')

<main role="main">

  <section class="jumbotron text-center ">
    <div class="container">
      <h1 class="jumbotron-heading">Welcome, 
      @if (isset(Auth::user()->id))
      {{Auth::user()->name}}
      @else
      Postman
      @endif
      </h1>
      <p class="lead text-muted">We’ll deliver the best stories and ideas on the topics you care about most straight to your homepage, app, or inbox.</p>
      <p>
        <a href="write" class="btn btn-primary my-2">Write a post</a>
        <a href="#" class="btn btn-secondary my-2">Open a profile</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        @foreach ($LastPosts as $post)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns={{$post->src}} preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: {{$post->title}}"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">{{$post->title}}</text></svg>
            <div class="card-body">
              <p class="card-text">{{$post->body}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a type="button" href="posts/{{$post->id}}" class="btn btn-sm btn-outline-secondary">View</a>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">{{$post->created_at}}</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>

</main>

@endsection

