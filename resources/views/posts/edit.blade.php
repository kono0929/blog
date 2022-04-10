@extends('layouts.app')

@section('content')
<h1>Edit Page</h1>
<form method="post" action="/posts/{{$post->id}}">
@csrf
    <input type="text" name="title" placeholder="Enter title" value="{{$post->title}}">
    <input type="hidden" name="_method" value="PUT">
    
    <input type="submit" name="submit" value="UPDATE">
</form>

<form method="post" action="/posts/{{$post->id}}">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    
    <input type="submit" value="DELETE">
</form>

@endsection 

@section('footer')
    
@endsection