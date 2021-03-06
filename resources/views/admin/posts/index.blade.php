@extends('layouts.admin')

@section('content')

@if(Session::has('deleted_post'))
    <p class="bg-danger">{{ session('deleted_post') }}</p>
@endif

@if(Session::has('created_post'))
    <p class="bg-success">{{ session('created_post') }}</p>
@endif

<h1>Posts</h1>

<table style="width:100%">
  <tr>
    <th>Id</th>
    <th>Photo</th>
    <th>Owner</th> 
    <th>Category</th>
    <th>Title</th>
    <th>Body</th>
    <th>View Post</th>
    <th>Comments</th>
    <th>Created</th>
    <th>Updated</th>
  </tr>

  
  @if($posts)
    @foreach($posts as $post)
  	  <tr>
  	    <td> {{$post->id}} </td>
        <td> <a href="{{route('posts.edit',$post->id)}}"><img height="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400X400' }}" alt=""></a></td>
  	    <td> {{$post->user->name}} </td> 
  	    <td> {{$post->category ? $post->category->name : 'Uncategorized'}} </td>
        <td> {{$post->title}} </td>
        <td> {{str_limit($post->body,30)}} </td>
        <td><a href="{{route('home.post', $post->id)}}">View Post</a></td>
        <td><a href="{{route('comments.show', $post->id)}}">View Comments</a></td>
        <td> {{$post->created_at->diffForhumans()}} </td>
        <td> {{$post->updated_at->diffForhumans()}} </td>
  	  </tr>
    @endforeach

  @endif
</table>

@stop