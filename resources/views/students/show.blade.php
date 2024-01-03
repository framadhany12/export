@extends('layouts.index')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <p class="card-title">Nama : {{ $students->name }}</p>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Mobile : {{ $students->mobile }}</p>
  </div>
  </div>
</div>
@stop