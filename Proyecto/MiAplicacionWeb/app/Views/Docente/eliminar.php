<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

<div class="alert alert-warning">
    <strong>Cuidado!</strong> Está seguro que desea eliminar el registro
    
    <a class="btn btn-danger" href="?controller=Docente&action=eliminar&table=<?php echo $_GET['table']; ?>&no=<?php echo $_GET['no']; ?>" class="alert-link">Aceptar</a>
    <a href="?controller=Docente&action=buscar&table=<?php echo $_GET['table']; ?>" class="alert-link">Cerrar</a>
</div>
</main>
  