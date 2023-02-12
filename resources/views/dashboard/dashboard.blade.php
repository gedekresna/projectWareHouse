@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome back, Aldi</h1>  
  </div>

  <div class="card-container"  style="display: flex; flex-wrap:wrap;">

    <div class="card" style="width: 18rem;" onload="loadCardA1(event,'{{$dataBarang->id}}')">
      <div class="card-body" onclick="display(event,'{{ $dataChart }}')" id="cardA1" value="A1">
        <div class="row">
          <div class="col-3">
            <h5 class="card-title">A1</h5>
          </div>
          <div class="col-9 d-flex flex-row-reverse">
            @if($dataBarang->rak == "A1")
              <h6 class="card-title">(Y){{$dataBarang->berat_per_box}}Kg|(Z){{$dataBarang->jumlah}}</h6>           
          </div>
        </div>
        <h6 class="card-subtitle mb-2 text-muted" id="berat_y_aksen"></h6>
        {{-- {{$lc_id->y_aksen}} --}}
        
        <h6 class="card-subtitle mb-2 text-muted" id="jumlah_z _aksen"></p>
        <button type="button" class="btn btn-secondary">Secondary</button>
         <button type="button" class="btn btn-success">Success</button>
        @endif
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">A2</h5>
        <h6 class="card-subtitle mb-2 text-muted">Berat :(Y')</h6>
        <h6 class="card-subtitle mb-2 text-muted">Jumlah : (Z')</p>
       <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>

      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">A3</h5>
        <h6 class="card-subtitle mb-2 text-muted">Berat : (Y')</h6>
        <h6 class="card-subtitle mb-2 text-muted">Jumlah : (Z')</p>
       <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>

      </div>
    </div>
  </div>
 

    <div class="row">
        <div class="col-6">
          <canvas class="" id="myChart"></canvas>
        </div>
        <div class="col-6">
          <canvas class="" id="myChart2" ></canvas>
        </div>
    </div>
 


  {{-- <h2 class="mt-2">Data Table</h2> --}}
      <div class="table-responsive" id="data-table" style="display:none">
        <table class="table table-striped table-sm">

          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Time</th>
              <th scope="col">Berat Seluruh Box</th>
              <th scope="col">Jumlah Box</th>
              {{-- <th scope="col">Action</th> --}}
            </tr>
          </thead>

          <tbody>
            @foreach ($data as $key => $item )
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->time}}</td>
                <td>{{$item->y_aksen}}</td>
                <td>{{$item->z_aksen}}</td>
                {{-- <td>
                    <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                    <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
                </td> --}}
            </tr>
            </tbody>
            @endforeach
        </table>
        <div class="div d-flex flex-row-reverse" >
          {!! $data->links() !!}
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>

@endsection

<script>

window.onload = function() {
  let id = {{ $dataBarang->id }};
  fetch(`/get-databarang-id/${id}`)
    .then(response => response.json())
    .then(data => {
      // Do something with the data here, such as display it on the page
      console.log(data);
      document.getElementById("berat_y_aksen").innerHTML = JSON.stringify("Berat : " + data.lc_id.y_aksen + " (Y')");
      document.getElementById("jumlah_z _aksens").innerHTML = JSON.stringify("Jumlah : " + data.lc_id.z_aksen + " (Z')");
    });
};

</script>