@extends('layouts.master')

@section('content')
  <h1>Create a Grocery</h1>

  <hr>

  <form method="POST" action="/groceries" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name">Grocery name:</label>
      <input type="text" class="form-control" id="name" placeholder="" name="name" required>
    </div>

    <div class="form-group">
      <label for="amount">Grocery amount:</label>
      <select class="form-control" name="amount">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
    </div>

    <div class="form-group">
      <label for="exampleInputFile">Choose a photo</label>
      <input type="file" id="exampleInputFile" name="photo">
    </div>

    <button type="submit" class="btn btn-primary">Create</button>

    <div class="form-group">
      @include('layouts.errors')
    </div>

  </form>
@endsection
