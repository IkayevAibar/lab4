@extends('layouts.app')

@section('content')
    
    <div class="container">
        </br>
        <table class="table table-striped table-hover ">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Column heading</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>Column content</td>
			<td>Column content</td>
		</tr>
		
	
</table>
        @foreach($friends as $friend )
        <tr>
			<td>1</td>
			<td>{{$friend->name}}</td>
			<td>
            <form action="{{route('showMessenger')}}" method="post">
                @csrf
                <input type="hidden" name='friend_id' value={{$friend->id}}>
                <input type="submit">
            </form>
            </td>
		</tr>
		
            
            
        @endforeach
        </tbody>
    </div>
    
@endsection
