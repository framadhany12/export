@extends('layouts.index')
@section('content')
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ url('mahasiswa') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>NIM</label></br>
        <input type="text" name="nim" id="nim" class="form-control"></br>
        <label>Jurusan</label></br>
        <input type="text" name="jurusan" id="jurusan" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop