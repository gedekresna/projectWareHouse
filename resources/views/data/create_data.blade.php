@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Data</h1>  
  </div>

  <form method="post" action="/dataBarang">
    @csrf
    <div class="form-group">
      <label for="merk">Merk</label>
     <input class="form-control " type="text" id="merk" name="merk" placeholder="Masukkan Merk">
    </div>
    <br>
    <div class="form-group">
      <label for="seri">Seri</label>
      <input type="email" class="form-control" id="seri" name="merk" placeholder="Masukkan Seri">
    </div>
    <br>
    <div class="form-group">
      <label for="berat_per_box">Berat 1 box</label>
      <input type="email" class="form-control" id="berart_per_box" name="berat_per_box" placeholder="Masukkan Berat 1 box"> 
    </div>
    <br>
    <div class="form-group">
      <label for="jumlah">Jumlah box</label>
      <input type="email" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah box"> 
    </div>
    <br>
    <label for="rak">Rak</label>
    <select class="form-control" id="rak" name="rak">
      <option value="A1">A1</option>
      <option value="A2">A2</option>
      <option value="A3">A3</option>
    </select>
  </form>
  <br>
  {{-- <a href="#" class="btn btn-primary">Simpan</a> --}}
  <button type="submit" class="btn btn-primary">Simpan</button>

@endsection