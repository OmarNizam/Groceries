@extends('layouts.master')

@section('content')
  <h1>Download files in Excel and CSV file</h1>

  <div class="container">
    <a href="/downloadExcel/xls"><button class="btn btn-success">Download Excel xls</button></a>
    <a href="/downloadExcel/xlsx"><button class="btn btn-success">Download Excel xlsx</button></a>
    <a href="/downloadExcel/csv"><button class="btn btn-success">Download Excel csv</button></a>
  </div>

@endsection
