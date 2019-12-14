<div class="container">
    
    <table class="table table-hover">
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