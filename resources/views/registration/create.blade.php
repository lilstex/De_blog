@extends('layouts.index')
@section('content')
<h3>Register here</h3>
<form action="/register" method="POST">
  {{ csrf_field()}}
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Full name" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <textarea type="email" class="form-control" name="email" placeholder="Email" required></textarea>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password" required>
      </div>
      <div class="form-group">
        <label for="password_confirmation">Password Confirmation</label>
        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
      </div>
   
    <button type="submit" class="btn btn-primary">Register</button>
  </form>
@endsection