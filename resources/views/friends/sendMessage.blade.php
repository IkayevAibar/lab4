@extends('layouts.app')

@section('content')
    
    <div class="container">
        </br>
        <form class="form mc-auto" style="width:50%; margin-top:80px;" method="post" action="{{ route('sendMessenger') }}" >
            @csrf
            <input type="hidden" name="user_id" id="userid" class="form-control" value={{Auth::user()->id}}>
            <input type="hidden" name="friend_id" id="friend_id" class="form-control" value={{$user->id}}>
            
            <div class="form-group">
                <label for="">message to <strong>{{$user->name}}</strong></label>
            </div>
            <div>
            <table class="table table-striped table-hover ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>From</th>
                        <th>Content</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($messages as $message )
                    <tr>
                        <td>1</td>
                        <td>{{$message->id}}</td>
                        <td>
                            {{$message->content}}
                        </td>
                    </tr>
                    
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                <label for="">Your message</label>
                <textarea type="text"
                    class="form-control " name="body" id="body" aria-describedby="helpId" placeholder="Enter the text..." style="resize: none;width: 500px; height: 150px; margin:auto;"></textarea>
                <small id="helpId" class="form-text text-muted">For example: Hello , how are you?.</small>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
    
@endsection
