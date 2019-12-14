
<div class="container">
              
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Provincia</th>
        <th>Distrito</th>
        <th>Corregimiento</th>
        <th>Dirrección actual</th>
        <th>Docente_ID</th>
      </tr>
    </thead>
    <tbody>
    <?php
        foreach ($datos as $dato) { ?>
            <tr>
                <td><?php echo $dato["idresidencia"]?></td>
                <td><?php echo $dato["provincia"]?></td>
                <td><?php echo $dato["distrito"]?></td>
                <td><?php echo $dato["corregimiento"]?></td>
                <td><?php echo $dato["direccion_actual"]?></td>
                <td><?php echo $dato["docente_id"]?></td>
                
            </tr>
        <?php }
        ?>
    </tbody>
  </table>
</div>