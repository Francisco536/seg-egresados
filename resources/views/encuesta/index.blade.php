@extends('adminlte::page')

@section('content_header')
    <h4>CUESTIONARIO DE SEGUIMIENTO A EGRESADOS</h4>

@stop

@section('content')
    <div class="card">
        <div class="card-header"><dt>INDICACIONES</dt></div>

        <div class="card-body" style="align-content: center">

            <dt>Por favor lea cuidadosamente y conteste este cuestionario de la siguiente manera, según sea el caso:</dt>
            <ol>
                <li>En el caso de preguntas cerradas, seleccione la que considere apropiada.</li>
                <li>En las preguntas de valoración se utiliza la escala del 1 al 5 en la que 1 es “muy malo” y 5 es “muy bueno”.</li>
                <li>En los casos de preguntas abiertas escriba una respuesta en los espacios.</li>
                <li>Al final anexamos un inciso para comentarios y sugerencias, le agradeceremos anote ahí lo que considere prudente para mejorar nuestro sistema educativo o bien los temas que, a su juicio, omitimos en el cuestionario.</li>
            </ol>
            <br>
            <div class="row mb-0" style="align-content: center">
                <div class="col-md-3 offset-md-8">
                    <a href="{{route('add.encuesta')}}" type="button" class="btn btn-primary btn-block">Responder Encuesta <i class="fas fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!');
    </script>
@stop
