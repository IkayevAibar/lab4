@extends('layouts.app')

@section('content')
    
    <div class="container">
        </br>
    <table class="table table-striped table-hover ">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>function</th>
		</tr>
	</thead>
	<tbody>
	    @foreach($friends as $friend )
        <tr>
			<td>1</td>
			<td>{{$friend->name}}</td>
			<td>
            <form action="{{route('showMessenger')}}" method="get">
                @csrf
                <input type="hidden" name='user_id' value={{$friend->id}}>
                
                <button type="submit" class="btn btn-primary">Open Dialog</button>
            </form>
            </td>
		</tr>
		
        @endforeach
        </tbody>
    </table>
    </div>
    
@endsection
