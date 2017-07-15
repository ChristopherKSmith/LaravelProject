@extends('layouts.admin')

@section('content')



<div class="row">
	<div class="col-md-6">
		
		<h1>Edit Categories</h1>
		{!! Form::model($category,['method'=>'PATCH','action'=>['AdminCategoriesController@update', $category->id]]) !!}
		
			<div class = "form-group">
				{!! Form::label('name', 'Name:') !!}
				{!! Form::text('name', null, ['class'=>'form-control']) !!}
			</div>

		
			<div class = "form-group">
				{!! Form::submit('Update Category', ['class'=>'btn btn-primary col-md-3']) !!}
				
			</div>
		{!! Form::close() !!}

		
		{!! Form::open(['method'=>'DELETE','action'=>['AdminCategoriesController@destroy', $category->id]]) !!}

		
		
			<div class = "form-group">
				{!! Form::submit('Delete Category', ['class'=>'btn btn-danger col-md-3 pull-right']) !!}
				
			</div>

		{!! Form::close() !!}
	</div>
	



	<div class="col-md-3">
		<div class="col-md-3">
	    <h1>Categories</h1>
	        <table style="width:100%">
	          <tr>
	            <th>Id</th>
	            <th>Name</th>
	          </tr>

	          
	          @if($categories)
	            @foreach($categories as $category)
	              <tr>
	                <td> {{$category->id}} </td>
	                <td><a href="{{route('categories.edit', $category->id)}}">{{$category->name}}</a></td>
	              </tr>
	            @endforeach

	          @endif
	      </table>
	  </div>
	</div>

</div>
<div class="row">
	@include('includes.form_error');
</div>

@stop