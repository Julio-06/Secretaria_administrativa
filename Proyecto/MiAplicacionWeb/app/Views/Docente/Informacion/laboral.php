<div class="container">
    
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Categoria docente</th>
          <th>Departamento</th>
          <th>Cargo administrativo</th>
          <th>Ubicación</th>
          <th>Repre. Organos de Gobierno</th>
          <th>Docente_Id</th>
        </tr>
      </thead>
      <tbody>
      <?php
          foreach ($datos as $dato) { ?>
              <tr>
                  <td><?php echo $dato["iddocentes_laboral"]?></td>
                  <td><?php echo $dato["categoria_docente"]?></td>
                  <td><?php echo $dato["departamento"]?></td>
                  <td><?php echo $dato["cargo_administrativo"]?></td>
                  <td><?php echo $dato["ubicacion"]?></td>
                  <td><?php echo $dato["repre_organos_gobierno"]?></td>
                  <td><?php echo $dato["docente_id"]?></td>
                  
              </tr>
          <?php }
          ?>
      </tbody>
    </table>
  </div>