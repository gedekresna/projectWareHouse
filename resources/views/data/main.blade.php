@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Page Data</h1>  
  </div>
  
  <div class="card-container" style="display: flex; flex-wrap:wrap;">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">A1</h5>
        <h6 class="card-subtitle mb-2 text-muted">Berat : (Y')</h6>
        <h6 class="card-subtitle mb-2 text-muted">Jumlah : (Z')</p>
       <button type="button" class="btn btn-secondary">Secondary</button>
    <button type="button" class="btn btn-success">Success</button>

      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">A2</h5>
        <h6 class="card-subtitle mb-2 text-muted">Berat : (Y')</h6>
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

  <div class="add-data">
    <div class="row">
        <div class="col-9">
            <h4>Data Table</h4>
        </div>
        <div class="col-3">
            <a class="btn btn-primary" href="/createData" role="button">Tambah Data</a>
        </div>
      </div>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
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
        <tr>
          <td>1,015</td>
          <td>random</td>
          <td>tabular</td>
          <td>information</td>
          <td>information</td>
          <td>information</td>
          <td>
            <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
            <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
          </td>
        </tr>
        <tr>
          <td>1,015</td>
          <td>random</td>
          <td>tabular</td>
          <td>information</td>
          <td>information</td>
          <td>information</td>
          <td>
            <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
            <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
          </td>
        </tr>
        <tr>
          <td>1,015</td>
          <td>random</td>
          <td>tabular</td>
          <td>information</td>
          <td>information</td>
          <td>information</td>
          <td>
            <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
            <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
          </td>
        </tr>
      </tbody>

    </table>
  </div>
@endsection