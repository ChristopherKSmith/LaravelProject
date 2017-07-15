@extends('layouts.admin')

@section('content')




<div class="row">
  <div class="col-md-6">
    <h1>Create Categories</h1>

        <div class="row">
          
          {!! Form::open(['method'=>'POST','action'=>'AdminCategoriesController@store']) !!}
            <div class = "form-group">
              {!! Form::label('name', 'Name:') !!}
              {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

          
            <div class = "form-group">
              {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
              
            </div>
          {!! Form::close() !!}


        </div>

        <div class="row">
          @include('includes.form_error');
        </div>
  </div>



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


@stop