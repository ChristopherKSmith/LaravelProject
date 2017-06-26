@extends('layouts.admin')

@section('content')

<h1>Edit Users</h1>

{!! Form::open(['method'=>'PATCH','action'=>['AdminUsersController@store', $user->id],'files'=>true]) !!}
<div class = "form-group">
	{!! Form::label('name', 'Name:') !!}
	{!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class = "form-group">
	{!! Form::label('email', 'Email:') !!}
	{!! Form::email('email', null, ['class'=>'form-control']) !!}
</div>

<div class = "form-group">
	{!! Form::label('is_active', 'Status:') !!}
	{!! Form::select('is_active', array(1=>'Active' , 0 =>'Not Active'), 0,  ['class'=>'form-control']) !!}
</div>



<div class = "form-group">
	{!! Form::label('role_id', 'Role:') !!}
	{!! Form::select('role_id',array(''=>'Choose Options') + $roles, null, ['class'=>'form-control']) !!}
</div>

<div class = "form-group">
	{!! Form::label('photo_id', 'User Image:') !!}
	{!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
</div>

<div class = "form-group">
	{!! Form::label('password', 'Password:') !!}
	{!! Form::password('password', ['class'=>'form-control']) !!}
</div>



@include('includes.form_error')

@stop