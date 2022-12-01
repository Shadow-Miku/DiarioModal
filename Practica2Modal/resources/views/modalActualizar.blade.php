<!-- Modal -->
<div class="modal fade" id="modalActualizar{{$consulta->idRecuerdos}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalActualizar{{$consulta->idRecuerdos}}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar Recuerdo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <form class="m-4" method="POST" action="{{route('recuerdo.update',$consulta->idRecuerdos)}}">
            
            @csrf

            {!! method_field('PUT') !!}

            <!--Errores individuales y guardar los datos escritos-->
            <div class="mb-3">
                <label class="form-label">Titulo: </label>
                <input type="text" class="form-control" name="txtTitulo" value="{{$consulta->titulo}}">
                <p class="text-primary fst-italic"> {{ $errors->first('txtTitulo') }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Recuerdo: </label>
                <input type="text" class="form-control" name="txtRecuerdo" value="{{$consulta->recuerdo}}">
                <p class="text-primary fst-italic"> {{ $errors->first('txtRecuerdo') }} </p>
            </div>
            
        </div>

<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">no no mergas</button>
        <button type="submit" class="btn btn-primary">en caliente</button>
  </div>

</form>

      </div>
    </div>
  </div>
</div>