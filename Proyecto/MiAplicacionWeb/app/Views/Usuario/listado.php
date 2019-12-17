
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

  <h2>Buscar Docentes/Administrativo</h2>
    
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Cedula</th>
        <th>Correo</th>
        <th>Cargo</th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php
            foreach ($users as $dat) { ?>
                <tr>
                <td><?php echo $dat["primer_nombre"] . ' ' . $dat["segundo_nombre"] ?></td>
                <td><?php echo $dat["primer_apellido"] . ' ' . $dat["segundo_apellido"] ?></td>
                <td><?php echo $dat["cedula"] ?></td>
                <td><?php echo $dat["correo_personal1"] ?></td>
                <td><?php echo $dat["id_rol"] ?></td>
                <td><a href="?controller=Usuario&action=buscar&no=<?php echo $dat["cedula"]?>">Ver</a></td>
                </tr>
            <?php }
            ?>
    </tbody>
  </table>
  <div align="center">
<br>
</div>


</main>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


