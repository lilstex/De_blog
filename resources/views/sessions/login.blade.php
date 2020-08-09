@extends('layouts.index')
@section('content')
<div class="col-md-8">
<h3>Sign In</h3>
<form action="/login" method="POST">
  {{ csrf_field() }}
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
      </div>
   
    <button type="submit" class="btn btn-primary">Sign In</button>
  </form>
</div>
@endsection