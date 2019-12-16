<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<?php if($datos==FALSE){?>

<div class="alert alert-danger">
<strong>Registro Fallido!</strong> Su registro no se  ha realizado exitosamente  <a href="?controller=Docente&action=buscar&table=<?php echo $_GET['table']; ?>" class="alert-link">Cerrar</a>.
</div>

<?php } 
elseif ($resp==FALSE) {
?>

<div class="alert alert-danger">
<strong>Actualización Fallida!</strong> Su actualización no se  ha realizado exitosamente <a href="?controller=Docente&action=buscar&table=<?php echo $_GET['table']; ?>" class="alert-link">Cerrar</a>.
</div>


<?php }
elseif ($eliminado==FALSE) { ?>
    <div class="alert alert-danger">
    <strong>Eliminación Fallida!</strong> La eliminación del registro no se  ha realizado exitosamente <a href="?controller=Docente&action=buscar&table=<?php echo $_GET['table']; ?>" class="alert-link">Cerrar</a>.
    </div>




<?php
}
?>
</main>
