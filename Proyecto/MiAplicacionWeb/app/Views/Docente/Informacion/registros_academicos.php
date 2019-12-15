<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<h2 class="mt-2">Registros académicos</h2>
<div class="table-responsive">
              
  <table class="table table-striped table-sm table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Título</th>
          <th>Nivel</th>
          <th>Año</th>
          <th>Institución</th>
          <th>Título_adjunto</th>
          <th>Docente_Id</th>
        </tr>
      </thead>
      <tbody>
      <?php
          foreach ($datos as $dato) { ?>
              <tr>
                  <td><?php echo $dato["idregistros_academicos"]?></td>
                  <td><?php echo $dato["titulo_obtenido"]?></td>
                  <td><?php echo $dato["nivel"]?></td>
                  <td><?php echo $dato["año"]?></td>
                  <td><?php echo $dato["institucion"]?></td>
                  <td><?php echo $dato["titulo_adjunto"]?></td>
                  <td><?php echo $dato["docente_id"]?></td>
                  
              </tr>
          <?php }
          ?>
      </tbody>
    </table>
  </div>
</main>
