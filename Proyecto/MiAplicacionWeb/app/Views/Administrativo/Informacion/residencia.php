<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<h2 class="mt-2">Dirección</h2>
<!-- inicia Modalpara insertar  -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
  Insertar
</button>

<?php require_once('Views/Administrativo/Modals/insert.php'); ?>
<div class="table-responsive">
              
  <table class="table table-striped table-sm table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Provincia</th>
        <th>Distrito</th>
        <th>Corregimiento</th>
        <th>Dirrección actual</th>
        <th>Opciones</th>
       
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
                
                <td>
          <a href="?controller=Administrativo&action=editar&table=<?php echo $_GET['table']; ?>&no=<?php echo $dato['idresidencia']?>" class="btn btn-danger" >
          Editar
          </a>
          <a href="?controller=Administrativo&action=confirmacion&table=<?php echo $_GET['table']; ?>&no=<?php echo $dato['idresidencia']?>" class="btn btn-danger" >
            Eliminar
          </a>
          </td>

                
            </tr>
            
        <?php }
        ?>
    </tbody>
  </table>
</div>
</main>
