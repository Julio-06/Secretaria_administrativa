
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<h2 class="mt-2">Información institucional</h2>
<div class="table-responsive">
              
  <table class="table table-striped table-sm table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Correo_institucional</th>
          <th>Telefono_institucional</th>
          <th>Extensión</th>
          <th>Docente_Id</th>
        </tr>
      </thead>
      <tbody>
      <?php
          foreach ($datos as $dato) { ?>
              <tr>
                  <td><?php echo $dato["idinformacion_institucional"]?></td>
                  <td><?php echo $dato["correo_institucional"]?></td>
                  <td><?php echo $dato["telefono_institucional"]?></td>
                  <td><?php echo $dato["extension"]?></td>
                  <td><?php echo $dato["docente_id"]?></td>
                  
              </tr>
          <?php }
          ?>
      </tbody>
    </table>
  </div>
</main>
