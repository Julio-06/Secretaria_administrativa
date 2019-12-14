<div class="container">
    
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Parentesco</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Localizar_emergencia</th>
          <th>Prioridad_localizar</th>
          <th>Fecha de nacimiento</th>
          <th>Celular</th>
          <th>Telefono_residencia</th>
          <th>Telefono_oficina</th>
          <th>Correo_electronico</th>
          <th>Docente_Id</th>
        </tr>
      </thead>
      <tbody>
      <?php
          foreach ($datos as $dato) { ?>
              <tr>
                  <td><?php echo $dato["idfamiliares_emergencia"]?></td>
                  <td><?php echo $dato["parentesco"]?></td>
                  <td><?php echo $dato["nombre"]?></td>
                  <td><?php echo $dato["apellido"]?></td>
                  <td><?php echo $dato["localizar_emergencia"]?></td>
                  <td><?php echo $dato["prioridad_localizar"]?></td>
                  <td><?php echo $dato["fecha_de_nacimiento_f"]?></td>
                  <td><?php echo $dato["celular_f"]?></td>
                  <td><?php echo $dato["telefono_residencia"]?></td>
                  <td><?php echo $dato["telefono_oficina"]?></td>
                  <td><?php echo $dato["correo_electronico"]?></td>
                  <td><?php echo $dato["docente_id"]?></td>
                  
              </tr>
          <?php }
          ?>
      </tbody>
    </table>
  </div>