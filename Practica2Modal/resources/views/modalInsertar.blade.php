<!-- Modal -->
<div class="modal fade" id="modalInsertar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalInsertar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Agregar Recuerdo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

        <div class="modal-body">
          <form class="m-4" method="POST" action="{{route('recuerdo.store')}}">
            @csrf
            <!--Errores individuales y guardar los datos escritos-->
            <div class="mb-3">
              <label class="form-label">Titulo: </label>
                <input type="text" class="form-control" name="txtTitulo" value="">
                  <p class="text-primary fst-italic"> {{ $errors->first('txtTitulo') }}</p>
            </div>

            <div class="mb-3">
              <label class="form-label">Recuerdo: </label>
                <input type="text" class="form-control" name="txtRecuerdo" value="">
                  <p class="text-primary fst-italic"> {{ $errors->first('txtRecuerdo') }} </p>
            </div>          
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">nel prro</button>
            <button type="submit" class="btn btn-primary">jimon dice</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>