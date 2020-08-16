@extends('layouts.index')
@section('content')
<h3>Edit Post</h3>
<form action="/posts/{{$post->id}}/update" method="POST" enctype="multipart/form-data">
<input name="_method" type="hidden" value="POST">
  {{ csrf_field()}}
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" name="title" value="{{$post->title}}">
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea type="text" class="form-control" name="body">{{$post->body}}</textarea>
    </div>
    <div class="form-group">
      <label for="cover_image">Cover_Image</label>
      <input type="file" class="form-control-file" id="cover_image">
    </div>

   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection