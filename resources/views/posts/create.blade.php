@extends('layouts.index')
@section('content')
<h3>Create Post</h3>
<form action="/posts/store" method="POST">
  {{ csrf_field()}}
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" name="title" placeholder="Title">
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea type="text" class="form-control" name="body" placeholder="Body"></textarea>
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection