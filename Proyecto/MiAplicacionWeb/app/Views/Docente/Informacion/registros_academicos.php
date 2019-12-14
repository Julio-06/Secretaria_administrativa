<div class="container">
    
    <table class="table table-hover">
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