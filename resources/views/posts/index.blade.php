@extends('layouts.app')

@section('content')
<h1>this is index page</h1>
<ul>
    @foreach ($posts as $post)

    <li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></li>    
    @endforeach
</ul>

<a href="posts/create">New Create</a>
@endsection 

@section('footer')
    
@endsection