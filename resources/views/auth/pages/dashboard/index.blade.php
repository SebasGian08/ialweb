@extends('auth.index')

@section('content')
    {{-- <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <h1 class="page-header">Bienvenido al Sistema</h1>
        </div>
    </div> --}}

    <!-- Filtro por fecha -->
    <div class="row mb-3">
        <div class="col-md-12">
            <form method="GET" action="{{ route('auth.dashboard.index') }}">
                <div class="row">
                    <div class="col-md-4">
                        <input type="date" name="fecha_inicio" class="form-control" value="{{ request()->fecha_inicio }}">
                    </div>
                    <div class="col-md-4">
                        <input type="date" name="fecha_fin" class="form-control" value="{{ request()->fecha_fin }}">
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">Filtrar por fecha</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Contenedores para los gráficos -->
    <div class="row">
        <div class="col-md-6">
            <div id="container1" style="height: 400px;"></div> <!-- Primer gráfico -->
        </div>
        <div class="col-md-6">
            <div id="container2" style="height: 400px;"></div> <!-- Segundo gráfico -->
        </div>
    </div>
    
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <!-- Script de Highcharts -->
    <script>
        Highcharts.chart('container1', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Total de Carreras'
            },
            series: [{
                name: 'Carreras',
                colorByPoint: true,
                data: [
                    @foreach($carreras as $carrera)
                        {
                            name: '{{ $carrera->nombre }}',   // Nombre de la carrera
                            y: 1    // Solo para crear los segmentos, puedes usar un valor de 1 para indicar que está presente
                        },
                    @endforeach
                ]
            }]
        });
    
        Highcharts.chart('container2', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Total de Cursos-Talleres-Programas'
            },
            series: [{
                name: 'Cursos',
                colorByPoint: true,
                data: [
                    @foreach($cursos as $curso)
                        {
                            name: '{{ $curso->nombre }}',   // Nombre del curso
                            y: 1,   // Valor de 1 para cada curso (para crear los segmentos)
                            category: '{{ $curso->categoria }}'  // Categoría del curso
                        },
                    @endforeach
                ]
            }],
            tooltip: {
                pointFormat: '{point.category}'  // Muestra el nombre del curso y su categoría en el tooltip
            }
        });
    </script>
@endsection
