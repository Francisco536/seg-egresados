@extends('adminlte::page')

@section('content_header')
    <strong>Estadisticas de Encuestas</strong>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">

     <div class="col-lg-3 col-8">
         <div class="small-box bg-warning">
           <div class="inner" style="text-align:center">
             <h3>{{$totEgres}}</h3>
             <p>Egresados Registrados</p>
            </div>
         </div>
       </div>
        <div class="col-lg-3 col-8">
            <div class="small-box bg-success">
              <div class="inner" style="text-align:center">
                <h3>{{$totEnc}}<sup style="font-size: 20px"></sup></h3>
                <p>Encuestas Realizadas</p>
                </div>
            </div>
        </div>


        </div>
        </div>

        <div class="card-body">
            <div class="row">
            <div class="col-lg-6">
                <strong>Egresados registrados por carrera</strong>
                <canvas id="myChart"style="min-height: 250px; height: 250px; max-height: 250px; max-width: 600px;"></canvas>
            </div>
            <div class="col-lg-6">
                <strong>Encuestas realizadas por carrera</strong>
                <canvas id="myChart2"style="min-height: 250px; height: 250px; max-height: 250px; max-width: 600px;"></canvas>
            </div>
        </div>
    </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
    <script>
    console.log('Hi!');
   const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['ING. Sistemas Computacionales', 'ING. Gestión Empresarial', 'ING. Civil', 'ING. Industrial', 'ING. Mecatronica', 'LIC. Administración'],
        datasets: [{
            label: '# of Votes',
            data: [{{$totSistemas}}, {{$totGestion}},{{$totCivil}},{{$totIndustrial}}, {{$totMecatronica}}, {{$totAdmin}}],

            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },

});
const ctx2 = document.getElementById('myChart2').getContext('2d');
    const myChart2 = new Chart(ctx2, {
        type: 'pie',
        data: {
            labels: ['ING. Sistemas Computacionales', 'ING. Gestión Empresarial', 'ING. Civil', 'ING. Industrial', 'ING. Mecatronica', 'LIC. Administración'],
            datasets: [{
                label: '# of Votes',
                data: [{{$EncSistemas}}, {{$EncGestion}},{{$EncCivil}},{{$EncIndustrial}}, {{$EncMecatronica}}, {{$EncAdmin}}],

                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },

    });
  </script>

@stop
