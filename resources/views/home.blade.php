@extends('layouts.app', [
    'namePage' => 'Dashboard',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'home',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')
  <div class="panel-header panel-header-lg">
    <canvas id="bigDashboardChart"></canvas>
  </div>
  <div class="content">
    <div class="row">
      <div class="col-lg-4">
        <div class="card card-chart">
          <div class="card-header">
            <h4 class="card-title">Medicamentos <i style="color: red;" class="now-ui-icons ui-2_favourite-28"></i></h4>
            <div class="dropdown">
              <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                <i class="now-ui-icons loader_gear"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <a class="dropdown-item text-danger" href="#">Remove Data</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="lineChartExample"></canvas>
            </div>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card card-chart">
          <div class="card-header">
            <h4 class="card-title">Asignaciones <i style="color: green;" class="now-ui-icons shopping_cart-simple"></i></h4>
            <div class="dropdown">
              <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                <i class="now-ui-icons loader_gear"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <a class="dropdown-item text-danger" href="#">Remove Data</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
            </div>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card card-chart">
          <div class="card-header">
            <h4 class="card-title">Usuarios <i style="color: rgb(18, 109, 230);" class="now-ui-icons users_circle-08"></i></h4>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="barChartSimpleGradientsNumbers"></canvas>
            </div>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card  card-tasks">
          <div class="card-header ">
            <h5 class="card-category">Backend development</h5>
            <h4 class="card-title">Tasks</h4>
          </div>
          <div class="card-body ">
            <div class="table-full-width table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" checked>
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </td>
                    <td class="text-left">Sign contract for "What are conference organizers afraid of?"</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                      </button>
                      <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox">
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </td>
                    <td class="text-left">Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                      </button>
                      <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" checked>
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </td>
                    <td class="text-left">Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                    </td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                      </button>
                      <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer ">
            <hr>
            <div class="stats">
              <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h5 class="card-category"> Lista De Todas Las Personas</h5>
            <h4 class="card-title"> Estadísticas de empleados</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Nombre
                  </th>
                  <th>
                    Correo
                  </th>
                  <th>
                    Correo Electronico Verificado
                  </th>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->email_verified_at}}</td>
                  @endforeach
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
@endpush