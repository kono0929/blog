@extends('layouts.app')

@section('content')
<h1>Create Page</h1>
{{-- <form method="post" action="/posts"> --}}
{!! Form::open(['method' => 'post','route' => 'posts.store']) !!}
@csrf
    <input type="text" name="title" placeholder="Enter title">
    <input type="submit" name="submit" value="SUBMIT">
{{!! Form::close() !!}}
@endsection 

@section('footer')
    
@endsection