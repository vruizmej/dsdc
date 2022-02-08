@extends('layouts.app', [
    'namePage' => 'Medicamentos',
    'class' => 'sidebar-mini',
    'activePage' => 'table',
  ])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header" style="display: flex;
          justify-content: space-between;">
            <h4 class="card-title text-info"> Lista de  Medicamentos</h4>
            <button class="btn btn-danger btn-fab btn-icon btn-round">
              <i class="fa fa-plus"></i>
            </button>
          </div>

          <div class="container">
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-info" href="#">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Medicamentos</li>
              </ol>
            </nav>
          </div>
          
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-info">
                  <th>
                    ID
                  </th>
                  <th>
                    Nombre
                  </th>
                  <th>
                    Cantidad
                  </th>
                  <th class="text-right">
                    Tipo
                  </th>
                </thead>
                <tbody>
                    @foreach ($medicamento as $medicamento)
                    <tr>
                        <td>{{$medicamento->idmedi}}</td>
                        <td>{{$medicamento->nombre}}</td>
                        <td>{{$medicamento->cantidad}}</td>
                        <td>{{$medicamento->idtipo}}</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
     
@endsection