@extends('layouts.admin')


@section('content')
<h1>Media</h1>
<table style="width:100%">
  <tr>
    <th>Id</th>
    <th>Name</th> 
    <th>Created</th>
    
  </tr>

  @foreach($photos as $photo)

    <tr>
      <td>{{$photo->id}}</td>
      <td><img height="150" src="{{$photo->file ? $photo->file : 'No Image' }}" alt=""></td> 
      <td>{{$photo->created_at ? $photo->created_at : 'No Date' }}</td>
      
      <td>
         {!! Form::open(['method'=>'DELETE','action'=>['AdminMediasController@destroy', $photo->id]]) !!}
   
    
            <div class = "form-group">
              {!! Form::submit('Delete Image', ['class'=>'btn btn-danger']) !!}
              
            </div>
          {!! Form::close() !!}

      </td>

    </tr>

   

  @endforeach
  
</table>


@stop