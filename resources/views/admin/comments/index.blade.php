@extends('layouts.admin')




@section('content')

@if(count($comments) == 0)

	<h1>No Comments</h1>

@else	
	
		<table style="width:100%">
		  <tr>
		    <th>Id</th>
		    <th>Author</th> 
		    <th>Email</th>
		    <th>Content</th>
		    
		  </tr>

	@foreach($comments as $comment)	  
		  <tr>
		    <td>{{$comment->id}}</td>
		    <td>{{$comment->author}}</td> 
		    <td>{{$comment->email}}</td>
		    <td>{{$comment->body}}</td>
		    <td><a href="{{route('home.post',$comment->post->id)}}">View Post</a></td>
		    <td>
		    	@if($comment->is_active == 1)
					{!! Form::open(['method'=>'PATCH','action'=>['PostCommentsController@update', $comment->id]]) !!}
					<input type="hidden" name="is_active" value="0">
					<div class = "form-group">
						{!! Form::submit('Un-Approve Comment', ['class'=>'btn btn-danger']) !!}
						
					</div>

					{!! Form::close() !!}
				@else
					{!! Form::open(['method'=>'PATCH','action'=>['PostCommentsController@update', $comment->id]]) !!}
						<input type="hidden" name="is_active" value="1">
						<div class = "form-group">
							{!! Form::submit('Approve Comment', ['class'=>'btn btn-success']) !!}
							
						</div>
						
					{!! Form::close() !!}
		    	@endif
		    </td>

		    <td>
		    	
					{!! Form::open(['method'=>'DELETE','action'=>['PostCommentsController@update', $comment->id]]) !!}
					
					<div class = "form-group">
						{!! Form::submit('Delete Comment', ['class'=>'btn btn-danger']) !!}
						
					</div>

					{!! Form::close() !!}
				
		    </td>
		  </tr>
	@endforeach	  
		</table>
	
@endif
@stop