@extends('dashboard.layouts.main')

@section('container')

  @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{session('success')}}
    </div>
  @endif

  <div class="add-data">
    <div class="row">
        <div class="col-9">
            <h4>Data Barang</h4>
        </div>
        <div class="col-3 d-flex flex-row-reverse">
            <a class="btn btn-primary" href="/dataBarang/create" role="button">Tambah Data</a>
        </div>
      </div>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm ">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Merk</th>
          <th scope="col">Seri</th>
          <th scope="col">Berat 1 box</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Rak</th>
          <th scope="col">Action</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($data_barang as $item )
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->merk}}</td>
                <td>{{$item->seri}}</td>
                <td>{{$item->berat_per_box}}</td>
                <td>{{$item->jumlah}}</td>
                <td>{{$item->rak}}</td>
                <td>
                    {{-- <a href="/dashboard/posts/{{$item->slug }}" class="badge bg-info"><i class="bi bi-eye"></i></span></a> --}}
                    <a href="/dataBarang/{{$item->id}}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                    <form action="/dataBarang/{{$item->id}}" method="POST" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="badge bg-danger border-0" onclick="return confirm('Are you sure to delete data?')"><span><i class="bi bi-trash"></i></span></button>   
                    </form>
                </td>
            </tr>
        @endforeach
      </tbody>

    </table>
    <div class="div d-flex flex-row-reverse" >
      {!! $data_barang->links() !!}
    </div>
  </div>
@endsection