@extends('layouts.admin')



@section('content')

<h1>users</h1>
<table id="table" style="width:100%">
  <tr>
    <th>Id</th>
    <th>Photos</th>
    <th>Name</th> 
    <th>Email</th>
    <th>Role</th>
    <th>Status</th>
    <th>Created At</th>
    <th>Updated At</th>
  </tr>


@if($users)
	@foreach($users as $user)
  <tr>
    <td>{{$user->id}}</td>

    <td><a href="{{route('users.edit', $user->id)}}"><img height='50' src="{{$user->photo ? $user->photo->file : 'No User Photo'}}" alt=""></a></td>

    <td>{{$user->name}}</td> 
    <td>{{$user->email}}</td>
    <td>{{$user->role ? $user->role->name : 'User Has no Roles'}}</td>
    <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
    <td>{{$user->created_at->diffForHumans()}}</td>
    <td>{{$user->updated_at->diffForHumans()}}</td>
  </tr>
 	@endforeach
 @endif

</table>

@stop

