<!-- Modal -->
<div class="modal fade" id="edit{{$critica->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR CRÍTICA</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('home.update', $critica->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre Película: </label>
                        <input type="text" class="form-control" name="nombrePelicula" id="" aria-describedby="helpId" placeholder="" value="{{$critica->nombrePelicula}}" />
                    </div>
                    <div class="mb-3">
                        <!-- <label for="" class="form-label">Nombre Usuario: </label> -->
                        <input type="hidden" class="form-control" name="nombreUsuario" id="" aria-describedby="helpId" placeholder="" value="{{ Auth::user()->name }}" />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Comentario: </label>
                        <input type="text" class="form-control" name="comentario" id="" aria-describedby="helpId" placeholder="" value="{{$critica->comentario}}" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>













<!-- Modal -->
<div class="modal fade" id="delete{{$critica->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ELIMINAR CRÍTICA</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('home.destroy', $critica->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method("DELETE")
                <div class="modal-body">
                    ¿Está seguro de que desea de eliminar el comentario de <strong>{{$critica->nombreUsuario}}</strong>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>