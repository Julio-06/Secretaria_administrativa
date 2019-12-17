<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<?php if($datos==TRUE){?>

<div class="alert alert-success">
<strong>Registro exitoso</strong> Su registro se ha realizado exitosamente  <a href="?controller=Docente&action=buscar&table=<?php echo $_GET['table']; ?>" class="alert-link">Cerrar</a>.
</div>

<?php } 
elseif ($resp==TRUE) {
?>

<div class="alert alert-success">
<strong>Actualización exitosa</strong> Su registro se ha actualizado exitosamente  <a href="?controller=Docente&action=buscar&table=<?php echo $_GET['table']; ?>" class="alert-link">Cerrar</a>.
</div>


<?php }
elseif ($eliminado==TRUE){ ?>

<div class="alert alert-success">
    <strong>Registro eliminado!</strong> Su registro se ha eliminado exitosamente <a href="?controller=Docente&action=buscar&table=<?php echo $_GET['table']; ?>" class="alert-link">Cerrar</a>.
</div>


<?php }?>

</main>
