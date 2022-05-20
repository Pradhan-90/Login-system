@extends('layout')

@section('content') 
<h1 class="text-center">User List</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($user as $u)
    <tr>
      <th>{{$u->id}}</th>
      <th>{{$u->name}}</th>
      <th>{{$u->email}}</th> 
    </tr>
    @endforeach
  </tbody>
</table>

@endsection