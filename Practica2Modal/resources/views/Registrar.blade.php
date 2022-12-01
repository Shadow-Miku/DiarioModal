@extends('Template')

@section('contenido')

    @if (session()->has('confirmacion'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'Recuerdo fresquisimo!',
            'success'
          ) </script>"!!}        
    @endif

    <div class="container mt-5 col-md-6">

        <h1 class="display-2 text-center mb-5"> Registro del sufrimiento </h1>

        <div class="card mb-5">

            <div class="card-header fw-bold">
                Bitacora de sufrimiento...
            </div>

            <div class="card-body">

                <form class="m-4" method="POST" action="{{route('recuerdo.store')}}">
                    @csrf
                    <!--Errores individuales y guardar los datos escritos-->
                    <div class="mb-3">
                        <label class="form-label">Titulo: </label>
                        <input type="text" class="form-control" name="txtTitulo" value="{{old('txtTitulo')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('txtTitulo') }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Recuerdo: </label>
                        <input type="text" class="form-control" name="txtRecuerdo" value="{{old('txtRecuerdo')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('txtRecuerdo') }} </p>
                    </div>
                    
            </div>

            <div class="card-footer">

                <button type="submit" class="btn btn-success m-1">Guardar Bitacora</button>
            
            </form>

            </div>
        </div>
    </div>
    
@stop
