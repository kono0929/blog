@extends('layouts.app')

@section('content')
<h1>This is a single post page</h1>
 <li><a href="{{route('posts.edit', $post->id)}}">{{$post->title}}</a></li>    


@endsection 

@section('footer')
    
@endsection