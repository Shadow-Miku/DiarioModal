@extends('Template')

@section('contenido')
@include('modalInsertar')

@if (session()->has('actualizar'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'Recuerdo fresquisimo!',
            'success'
          ) </script>"!!}        
@endif

@if (session()->has('elimina'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'El recuerdo ya no anda fresh',
            'success'
          ) </script>"!!}        
@endif

@if (session()->has('confirmacion'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'Recuerdo fresquisimo!',
            'success'
          ) </script>"!!}        
    @endif

    <h1 class="display-1 mt mt-4 mb-4 text-center"> Recuerdo </h1>
    
      <div class="container col-md-6 mb-5 mt-5 d-grid gap-2">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalInsertar">
          <i class="bi bi-plus"></i>  Agrega otro recuerdo we 
        </button>
      </div>

    @foreach($ConsultaRec as $consulta)
    @include('modalActualizar')
    @include('modalEliminar')
    

    <div class="container col-md-6 mt-5 mb-5">
        <div class="card text-center">
            <div class="card-header">
              <h5 class="text-primary text center">{{$consulta->fecha}}</h5>
            </div>

            <div class="card-body">
              <h5 class="card-title">{{$consulta->titulo}}</h5>
              <p class="card-text">{{$consulta->recuerdo}}</p>
            </div>

            <div class="card-footer text-muted">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalActualizar{{$consulta->idRecuerdos}}">
                  <i class="bi bi-pen"></i> Cambia el pasado we 
                </button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalEliminar{{$consulta->idRecuerdos}}">
                  <i class="bi bi-trash2"></i>  Fusilalo en caliente 
                </button>
            </div>
          </div>
          </div>
          @endforeach
@stop
