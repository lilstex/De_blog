@extends('layouts.index')
@section('content')

<h1>Posts</h1>

@foreach($posts as $post)
<div class="well">
    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>

    <p class="blog-post-meta">{{$post->user->name}} on {{$post->created_at->toFormattedDateString()}}</p>

    <p>{{$post->body}}</p>
   
</div>
@endforeach

@endsection

