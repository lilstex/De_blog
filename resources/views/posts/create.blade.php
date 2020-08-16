@extends('layouts.index')
@section('content')
<h3>Create Post</h3>
<form action="/posts/store" method="POST" enctype="multipart/form-data">
  {{ csrf_field()}}
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" name="title" placeholder="Title">
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea type="text" class="form-control" name="body" placeholder="Body"></textarea>
    </div>
      <div class="form-group">
        <label for="cover_image">Cover_Image</label>
        <input type="file" class="form-control-file" id="cover_image">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>
@endsection