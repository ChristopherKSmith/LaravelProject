@extends('layouts.admin')



@section('styles')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.css">
@stop




@section('content')
  <h1>Upload Media</h1>



{!! Form::open(['method'=>'POST','action'=>'AdminMediasController@store', 'class'=>'dropzone']) !!}

  {{-- <div class = "form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
  </div>

  <div class = "form-group">
    {!! Form::submit('Create Default', ['class'=>'btn btn-primary']) !!}
    
  </div> --}}

{!! Form::close() !!}


@stop

















@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.js"></script>
@stop