<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<h2 class="mt-2">Diplomados</h2>


<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
  Insertar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nuevo registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

            <form action="?controller=Docente&action=agregar&table=6" method="POST">
                    <div class="form-group">
                        
                        <input name="titulo" type="text" class="form-control" placeholder="Título obtenido" >
                    </div>

                    <div class="form-group">
                        
                        <input name="año" type="date" class="form-control" placeholder="Año" >
                    </div>
                    <div class="form-group">
                        
                        <input name="institucion" type="text" class="form-control" placeholder="Institución" >
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Título adjuto</label>
                        <input name="tituload" type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    
                        
                    <button type="submit" class="btn btn-dark">Enviar</button>
                    
            </form>
                    
       </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        
                    </div>
                    
    </div>
  </div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter1">
  Editar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h1>aaaa</h1>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-dark">Save changes</button>
      </div>
    </div>
  </div>
</div>




<div class="table-responsive">
  <table class="table table-striped table-sm table-hover">
    <thead>
        <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Año</th>
        <th>Institución</th>
        <th>Título_adjunto</th>
        <th>Docente_Id</th>
        
        <th>Docente_Id</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($datos as $dato) { ?>
            <tr>
                <td><?php echo $dato["iddiplomados"]?></td>
                <td><?php echo $dato["titulo_obtenido"]?></td>
                <td><?php echo $dato["año"]?></td>
                <td><?php echo $dato["institucion"]?></td>
                
                <td><?php echo $dato["docente_id"]?></td>
                
            </tr>
        <?php }
        ?>
    </tbody>
    </table>
</div>
</main>
