
<div class="container">
    
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Capacitación</th>
          <th>Año</th>
          <th>Rol</th>
          <th>Horas</th>
          <th>Institución</th>
          <th>Docente_Id</th>
        </tr>
      </thead>
      <tbody>
      <?php
          foreach ($datos as $dato) { ?>
              <tr>
                  <td><?php echo $dato["idcapacitaciones"]?></td>
                  <td><?php echo $dato["nombre_capacitacion"]?></td>
                  <td><?php echo $dato["año"]?></td>
                  <td><?php echo $dato["rol"]?></td>
                  <td><?php echo $dato["horas"]?></td>
                  <td><?php echo $dato["institucion"]?></td>
                  <td><?php echo $dato["docente_id"]?></td>
                  
              </tr>
          <?php }
          ?>
      </tbody>
    </table>
  </div>