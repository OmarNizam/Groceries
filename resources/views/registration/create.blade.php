@extends('layouts.master')


@section('content')

  <div class="col-sm-8">
    <h1>Register</h1>
    <form method="POST" action="/register">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Name:</label>
        <input class="form-control" id="name" type="text" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input class="form-control" id="email" type="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input class="form-control" id="password" type="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="password_confirmation">Password confirmation:</label>
        <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" required>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary" name="button">Register</button>
      </div>
      <div class="form-group">
        @include('layouts.errors')
      </div>
    </form>
  </div>

@endsection
