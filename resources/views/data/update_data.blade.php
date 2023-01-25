@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Update Data</h1>  
  </div>

  <form action="/dataBarang/{{$data->id}}" method="POST">
    @method('put')
    @csrf
    <div class="form-group">
      <label for="merk">Merk</label>
     <input class="form-control  @error('merk') is-invalid @enderror" type="text" id="merk" name="merk" placeholder="Masukkan Merk" required autofocus value="{{old('merk', $data->merk)}}">
     @error('merk')
       <div class="is-invalid">
        {{$message}}
       </div>
     @enderror
    </div>
    <br>

    <div class="form-group">
      <label for="seri">Seri</label>
      <input type="text" class="form-control @error('seri') is-invalid @enderror" id="seri" name="seri" placeholder="Masukkan Seri" value="{{old('seri', $data->seri)}}">
      @error('seri')
       <div class="is-invalid">
        {{$message}}
       </div>
     @enderror
    </div>
    <br>

    <div class="form-group">
      <label for="berat_per_box">Berat 1 box</label>
      <input type="number" class="form-control @error('berat_per_box') is-invalid @enderror" id="berart_per_box" name="berat_per_box" placeholder="Masukkan Berat 1 box" value="{{old('berat_per_box', $data->berat_per_box)}}"> 
      @error('berat_per_box')
       <div class="is-invalid">
        {{$message}}
       </div>
     @enderror
    </div>
    <br>

    <div class="form-group">
      <label for="jumlah">Jumlah box</label>
      <input type="number" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah box" value="{{old('jumlah', $data->jumlah)}}"> 
      @error('jumlah')
       <div class="is-invalid">
        {{$message}}
       </div>
     @enderror
    </div>
    <br>

    <div class="form-group">
      <label for="rak">Rak</label>
    <select class="form-control @error('rak') is-invalid @enderror" id="rak" name="rak">
      <option value="A1" @if ($data->rak == "A1") selected @endif>A1</option>
      <option value="A2" @if ($data->rak == "A2") selected @endif>A2</option>
      {{-- <option value="A3" @if ($data->rak == "A3") selected @endif>A3</option> --}}
      <option value="A3" @if ($data->rak == "A3")
          selected
      @elseif(old('rak'))
          selected
      @endif>A3</option>
    </select>
    @error('rak')
       <div class="is-invalid">
        {{$message}}
       </div>
     @enderror
    </div> 
    <br>

    <button type="submit" class="btn btn-primary">Simpan</button>
    {{-- <a href="/dataBarang" type="submit" class="btn btn-primary">Simpan</a> --}}
  </form>
 

@endsection