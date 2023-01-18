@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome back, Aldi</h1>  
  </div>
 

    <div class="row">
        <div class="col-6">
          <canvas class="" id="myChart" width="100" height="50"></canvas>
        </div>
        <div class="col-6">
          <canvas class="" id="myChart2" width="100" height="50"></canvas>
        </div>
    </div>
 


  <h2 class="mt-2">Data Table</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">

          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Time</th>
              <th scope="col">Berat Seluruh Box</th>
              <th scope="col">Jumlah Box</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($data as $item )
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->time}}</td>
                {{-- <td>{{$item->s1 + $item->s2 + $item->s3 + $item->s4 }}</td> --}}
                @foreach ($y_aksen as $y_val )
                  <td>{{$y_val}}</td>
                @endforeach
                <td>
                    {{-- <a href="/dashboard/posts/{{$item->slug }}" class="badge bg-info"><i class="bi bi-eye"></i></span></a> --}}
                    <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                    <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
                </td>
            </tr>
            </tbody>
            @endforeach
        </table>
      </div>
@endsection