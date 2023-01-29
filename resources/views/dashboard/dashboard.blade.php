@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome back, Aldi</h1>  
  </div>
 

    <div class="row d-flex justify-content-center">
        <div class="col-9" style="height: ">
          <canvas class="" id="myChart"></canvas>
        </div>
        {{-- <div class="col-6">
          <canvas class="" id="myChart2" width="100" height="50"></canvas>
        </div> --}}
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
        {{-- {!! $data->links() !!} --}}
      </div>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>

      <script>
        var datas = {!! json_encode($data) !!};
        let labels = datas.map((data)=>{return data.time})
        let dataChart = datas.map((data)=>{return data.z_aksen})

        var ctx = document.getElementById('myChart').getContext('2d');
          var myChart = new Chart(ctx, {
            type: 'line',
            data: {
              labels: labels,
              datasets: [{
                label: 'Jumlah Box',
                data: dataChart,
                backgroundColor: 'rgba(0, 0, 180, 0.2)',
                borderColor: 'blue',
                borderWidth: 1
              }]
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            }
          });
      </script>

@endsection