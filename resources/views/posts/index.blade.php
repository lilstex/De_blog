@extends('layouts.index')
@section('content')

<h1>Posts</h1>

@foreach($posts as $post)
<div class="well">
    <div class="row">
        <div class="col-md-4 col-sm-4">
            <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
        </div>
        <div class="col-md-8 col-sm-8">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>

            <p class="blog-post-meta">{{$post->user->name}} on {{$post->created_at->toFormattedDateString()}}</p>
        
            <p>{{$post->body}}</p>
        </div>
    </div>
   
   
</div>
@endforeach

@endsection

