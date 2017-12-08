@extends('layouts.master')

@section('content')
  <div class="col-md-8">
    <h1>Sign in</h1>
    <form method="POST" action="/login">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="email">Email:</label>
        <input class="form-control" id="email" type="email" name="email" >
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input class="form-control" id="password" type="password" name="password" >
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary" name="button">Sign In</button>
      </div>
      <div class="form-group">
        @include('layouts.errors')
      </div>
    </form>
  </div>
@endsection
