<div class="container">            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Primer_nombre</th>
        <th>Segundo_nombre</th>
        <th>Primer_apellido</th>
        <th>Segundo_apellido</th>
        <th>Fecha de nacimiento</th>
        <th>Celular</th>
        <th>Telefono de casa</th>
        <th>Cedula</th>
        
      </tr>
    </thead>
    <tbody>
        <?php
        foreach ($datos as $dato) { ?>
            <tr>
                <td><?php echo $dato["iddocentes"]?></td>
                <td><?php echo $dato["primer_nombre"]?></td>
                <td><?php echo $dato["segundo_nombre"]?></td>
                <td><?php echo $dato["primer_apellido"]?></td>
                <td><?php echo $dato["segundo_apellido"]?></td>
                <td><?php echo $dato["fecha_de_nacimiento"]?></td>
                <td><?php echo $dato["celular"]?></td>
                <td><?php echo $dato["telefono_casa"]?></td>
                <td><?php echo $dato["cedula"]?></td>
            </tr>
        <?php }
        ?>
    </tbody>
  </table>
  
  <table class="table table-hover">
    <thead>
      <tr>
      <th>Genero</th>
        <th>Sangre</th>
        <th>Peso</th>
        <th>Estatura</th>
        <th>Estado de salud</th>
        <th>Estado civil</th>
        <th>Correo_personal1</th>
        <th>Correo_personal2</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
    </tbody>
  </table>
</div>