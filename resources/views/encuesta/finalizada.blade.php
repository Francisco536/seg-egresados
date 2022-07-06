@extends('adminlte::page')

@section('content_header')
<strong>Encuesta Finalizada</strong>
@if (session('success'))
<div class="alert alert-success" role="success">
    {{session('success')}}
</div>
@endif
@stop

@section('content')
    <div class="card">

        <div class="card-body" style="text-align: center; background-color: green">

            <img src="{{URL::asset("assets/img/listo.png")}}" alt="" style="width: 300px; height: 300px;">
            <h5 style="color:aliceblue; font-size:55px">Encuesta Finalizada</h5>
           <h6 style="color:aliceblue; font-size:25px">¡Muchas gracias por su gentil colaboración!</h6>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!');
    $(document).ready(function() {
    setTimeout(function() {
        $(".alert").fadeOut(1500);
    },3000);

});
    </script>
@stop
