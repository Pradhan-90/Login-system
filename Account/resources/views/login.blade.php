@extends('layout')

@section('content') 
<h1 class="text-center">Login</h1>
<div class="container d-flex justify-content-center text-center" style="padding-top: 10 ;">

<form action="/loginsubmit" method="POST" >
    @csrf
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password" placeholder="Enter password" id="pwd">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
