@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Data</h1>  
  </div>

  <form>
    <div class="form-group">
      <label for="exampleFormControlInput1">Merk</label>
     <input class="form-control" type="text" placeholder="Masukkan Merk">
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Seri</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Seri">
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Berat 1 box</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Berat 1 box"> 
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Jumlah box</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Jumlah box"> 
    </div>

    <label for="exampleFormControlInput1">Rak</label>
    <select class="form-control">
      <option>A1</option>
      <option>A2</option>
      <option>A3</option>
    </select>
  </form>

  <a href="#" class="btn btn-primary">Simpan</a>

@endsection