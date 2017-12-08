@extends('layouts.master')

@section('content')

  <div class="row">
    @foreach ($groceries as $grocery)
      @include('groceries.grocery')
    @endforeach
  </div>
  @if (Auth::check())
    <p><a class="btn btn-primary" href="/groceries/create" role="button">Add grocery &raquo;</a></p>
  @endif

@endsection
