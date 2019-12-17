<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<h2 class="mt-2">Información general</h2>
<!-- inicia Modalpara insertar  -->

<!-- Button trigger modal -->


<?php require_once('Views/Administrativo/Modals/insert.php');   ?>
<div class="table-responsive">
              
  <table class="table table-striped table-sm table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        
        <th>Fecha de nacimiento</th>
        <th>Celular</th>
        <th>Telefono de casa</th>
        <th>Cedula</th>
        <th>Opciones</th>
        
      </tr>
    </thead>
    <tbody>
        <?php
        foreach ($datos as $dato) { ?>
            <tr>
                <td><?php echo $dato["idadministrativo"]?></td>
                <td><?php echo $dato["primer_nombre"].' '.$dato["segundo_nombre"]?></td>
                
                <td><?php echo $dato["primer_apellido"].' '.$dato["segundo_apellido"]?></td>
                
                <td><?php echo $dato["fecha_de_nacimiento"]?></td>
                <td><?php echo $dato["celular"]?></td>
                <td><?php echo $dato["telefono_casa"]?></td>
                <td><?php echo $dato["cedula"]?></td>
                <td>
          <a href="?controller=Administrativo&action=editar&table=<?php echo $_GET['table']; ?>&no=<?php echo $dato['idadministrativo']?>" class="btn btn-danger" >
          Editar
          </a>
         
          </td>
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
        <th>Correos_personales</th>
        
      </tr>
    </thead>
    <tbody>
    <?php
        foreach ($datos as $dato) { ?>
          <tr>
              <td><?php echo $dato["genero"]?></td>
              <td><?php echo $dato["sangre"]?></td>
              <td><?php echo $dato["peso"]?></td>
              <td><?php echo $dato["estatura"]?></td>
              <td><?php echo $dato["estado_salud"]?></td>
              <td><?php echo $dato["estado_civil"]?></td>
              <td><?php echo $dato["correo_personal1"].' '. $dato["correo_personal2"]?></td>
              
              
          </tr>
        <?php }
        ?>
    </tbody>
  </table>
</div>
</main>
