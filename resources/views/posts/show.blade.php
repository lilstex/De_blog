@extends('layouts.index')
@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>

    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <h1>{{$post->title}}</h1>
    <small>Written on {{$post->created_at->toFormattedDateString()}}</small>
        <hr>
    <div>
        {{$post->body}}
    </div>
    <hr>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a>
            <a href="/posts/{{$post->id}}/delete" class="btn btn-danger">Delete</a>
        @endif
    @endif

    <hr>
    <div class="comments">
        <ul class="list-group">
            @foreach ($post->comments as $comment)
            <li class="list-group-item">
                <strong>{{ $comment->created_at->diffForHumans() }} : &nbsp;</strong>
                {{$comment->body}}
            </li>
            @endforeach
        </ul>
    </div>

    <hr>
    <hr>
    <div class="card">
        <div class="card-block">
            <form method="POST" action="/posts/{{$post->id}}/comments">
                {{csrf_field()}}
            <div class="form-group">
                <textarea name="body" placeholder="Your comment here" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Comment</button>
            </div>
            </form>
        </div>
    </div>
@endsection

