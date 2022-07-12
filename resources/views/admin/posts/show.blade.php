@extends('layouts.admin')
@section('content')
    <div class="container">
        <h2>{{$posts->title}}</h2>
        <h3>ID: {{$posts->id}}</h3>
        <h4> {{$posts->category ? $posts->category->name: '-'}}</h4>
        <p>{{$posts->description}} 
        </p>
        <a class="btn btn-primary" href="{{route('admin.posts.index')}}"><- Go back</a>
    </div>
@endsection