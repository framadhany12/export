@extends('layouts.index')
@section('content')
 
 
<div class="card">
  <div class="card-header">Mahasiswa Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $mahasiswa->name }}</h5>
        <p class="card-text">NIM : {{ $mahasiswa->nim }}</p>
        <p class="card-text">Jurusan : {{ $mahasiswa->jurusan }}</p>
  </div>
       
  
  </div>
</div>
@stop