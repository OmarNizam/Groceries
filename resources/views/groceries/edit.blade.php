@extends('layouts.master')

@section('content')
  <h1>Edit {{ $grocery->name }}</h1>
  <hr>
  <form method="POST" action="/groceries/{{ $grocery->id }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="form-group">
      <label for="name">Grocery name:</label>
      <input type="text" class="form-control" id="name" placeholder="" name="name" value="{{ $grocery->name }}" required>
    </div>
    <div class="form-group">
      <label for="amount">Grocery amount:</label>
      <select class="form-control" name="amount">
        @for ($i=1; $i < 11; $i++)
          @if ($i === $grocery->amount)
            <option selected>{{$i}}</option>
          @else
            <option>{{$i}}</option>
          @endif
        @endfor
      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputFile">Choose a photo</label>
      <input type="file" id="exampleInputFile" name="photo">
    </div>
    <button type="submit" class="btn btn-success">Edit</button>
    <div class="form-group">
      @include('layouts.errors')
    </div>
  </form>
@endsection
