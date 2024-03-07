<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">AGREGAR CRÍTICA</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('home.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre Película: </label>
                        <input type="text" class="form-control" name="nombrePelicula" id="" aria-describedby="helpId" placeholder="" />
                    </div>
                    <div class="mb-3">
                        <!-- <label for="" class="form-label">Nombre Usuario: </label> -->
                        <input type="hidden" value="{{ Auth::user()->name }}" class="form-control" name="nombreUsuario" id="" aria-describedby="helpId" placeholder="" />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Comentario: </label>
                        <input type="text" class="form-control" name="comentario" id="" aria-describedby="helpId" placeholder="" />
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