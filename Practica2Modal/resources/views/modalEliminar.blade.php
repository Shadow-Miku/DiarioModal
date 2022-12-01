<!-- Modal -->
<div class="modal fade" id="modalEliminar{{$consulta->idRecuerdos}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEliminar{{$consulta->idRecuerdos}}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Eliminar Recuerdo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      <form method="POST" action="{{route('recuerdo.destroy',$consulta->idRecuerdos)}}">
              @csrf
              @method('delete')
            {{$consulta->titulo}}
            {{$consulta->recuerdo}}  
      </div>

      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">nel prro</button>
        <button type="submit" class="btn btn-primary">jimon</button>
      </form>
      </div>
    </div>
  </div>
</div>