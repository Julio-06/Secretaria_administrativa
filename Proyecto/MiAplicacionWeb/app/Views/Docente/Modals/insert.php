<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nuevo registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php  switch ($_GET['table']) { 

              case '0':  ?>
              <form action="?controller=Docente&action=agregar&table=<?php echo $_GET['table']; ?>" method="POST">
                <div class="form-group">
                    
                    <input name="titulo" type="text" class="form-control" placeholder="Título obtenido" >
                </div>

                <div class="form-group">
                    
                    <input name="año" type="date" class="form-control" placeholder="Año" >
                </div>
                <div class="form-group">
                    
                    <input name="institucion" type="text" class="form-control" placeholder="Institución" >
                </div>

                
                <button type="submit" class="btn btn-dark">Enviar</button>         
              </form>
        
            <?php break; ?>

         <?php case '1':?>
          
            <form action="?controller=Docente&action=agregar&table=<?php echo $_GET['table']; ?>" method="POST">
              <div class="form-group">
                  
                  <input name="provincia" type="text" class="form-control" placeholder="Provincia" >
              </div>

              <div class="form-group">
                  
                  <input name="distrito" type="text" class="form-control" placeholder="Distrito" >
              </div>
              <div class="form-group">
                  
                  <input name="corregimiento" type="text" class="form-control" placeholder="Corregimiento" >
              </div>
              <div class="form-group">
                  
                  <input name="direccion_actual" type="text" class="form-control" placeholder="Direccion_actual" >
              </div>
             

              
              <button type="submit" class="btn btn-dark">Enviar</button>         
            </form>
              
            <?php break;?>
         <?php case '2':?>
          
            <form action="?controller=Docente&action=agregar&table=<?php echo $_GET['table']; ?>" method="POST">
              <div class="form-group">
                  
                  <input name="correo_institucional" type="text" class="form-control" placeholder="Correo_institucional" >
              </div>

              <div class="form-group">
                  
                  <input name="telefono_institucional" type="text" class="form-control" placeholder="Telefono_institucional" >
              </div>
              <div class="form-group">
                  
                  <input name="extension" type="text" class="form-control" placeholder="Extension" >
              </div>

              
              <button type="submit" class="btn btn-dark">Enviar</button>         
            </form>

             <?php break;?>

            <?php case '3':?>

              <form action="?controller=Docente&action=agregar&table=<?php echo $_GET['table']; ?>" method="POST">
                <div class="form-group">
                    
                    <input name="parentesco" type="text" class="form-control" placeholder="Parentesco" >
                </div>

                <div class="form-group">
                    
                    <input name="nombre" type="text" class="form-control" placeholder="Nombre" >
                </div>
                <div class="form-group">
                    
                    <input name="apellido" type="text" class="form-control" placeholder="Apellido" >
                </div>
                <div class="form-group">
                    
                    <input name="localizar_emergencia" type="text" class="form-control" placeholder="Localizar_emergencia" >
                </div>
                <div class="form-group">
                    
                    <input name="prioridad_localizar" type="" class="form-control" placeholder="Prioridad_localizar" >
                </div>
                <div class="form-group">
                    
                    <input name="fecha_de_nacimiento_f" type="date" class="form-control" placeholder="Fecha_de_nacimiento" >
                </div>
                <div class="form-group">
                    
                    <input name="celular_f" type="text" class="form-control" placeholder="Celular" >
                </div>
                <div class="form-group">
                    
                    <input name="telefono_residencia" type="text" class="form-control" placeholder="Telefono_residencia" >
                </div>
                <div class="form-group">
                    
                    <input name="telefono_oficina" type="text" class="form-control" placeholder="Telefono_oficina" >
                </div>
                <div class="form-group">
                    
                    <input name="correo_electronico" type="text" class="form-control" placeholder="Correo_electronico" >
                </div>

                
                <button type="submit" class="btn btn-dark">Enviar</button>         
              </form>
            <?php break;?>

            <?php case '4':?>
              
              <form action="?controller=Docente&action=agregar&table=<?php echo $_GET['table']; ?>" method="POST">
                <div class="form-group">
                    
                    <input name="categoria_docente" type="text" class="form-control" placeholder="Categoria_docente" >
                </div>

                <div class="form-group">
                    
                    <input name="departamento" type="text" class="form-control" placeholder="Departamento" >
                </div>
                <div class="form-group">
                    
                    <input name="cargo_administrativo" type="text" class="form-control" placeholder="Cargo_administrativo" >
                </div>
                <div class="form-group">
                    
                    <input name="ubicacion" type="text" class="form-control" placeholder="Ubicación" >
                </div>
                <div class="form-group">
                    
                    <input name="repre_organos_gobierno" type="text" class="form-control" placeholder="Repre_organos_gobierno" >
                </div>

                
                <button type="submit" class="btn btn-dark">Enviar</button>         
              </form>
            <?php break;?>

            <?php case '5':?>
              <form action="?controller=Docente&action=agregar&table=<?php echo $_GET['table']; ?>" method="POST">
                <div class="form-group">
        
                    
                    <input name="nombre_capacitacion" type="text" class="form-control" placeholder="Nombre capacitación" >
                </div>

                <div class="form-group">
                    
                    <input name="año" type="date" class="form-control" placeholder="Año" >
                </div>
                <div class="form-group">
                    
                    <input name="rol" type="text" class="form-control" placeholder="Rol" >
                </div>
                <div class="form-group">
                    
                    <input name="horas" type="number" class="form-control" placeholder="Horas" >
                </div>
                <div class="form-group">
                    
                    <input name="institucion" type="text" class="form-control" placeholder="Institución" >
                </div>

                
                <button type="submit" class="btn btn-dark">Enviar</button>         
              </form>
            <?php break;?>

          <?php case '6':?>
              <form action="?controller=Docente&action=agregar&table=<?php echo $_GET['table']; ?>" method="POST">
                <div class="form-group">
                    
                    <input name="titulo" type="text" class="form-control" placeholder="Título obtenido" >
                </div>

                <div class="form-group">
                    
                    <input name="año" type="date" class="form-control" placeholder="Año" >
                </div>
                <div class="form-group">
                    
                    <input name="institucion" type="text" class="form-control" placeholder="Institución" >
                </div>

                
                <button type="submit" class="btn btn-dark">Enviar</button>         
              </form>            
              
          <?php break; ?>

          <?php case '7':?>
            
                 
            <form action="?controller=Docente&action=agregar&table=<?php echo $_GET['table']; ?>" method="POST">
              <div class="form-group">
                  
                  <input name="titulo" type="text" class="form-control" placeholder="Título obtenido" >
              </div>
              <div class="form-group">
                  
                  <input name="nivel" type="text" class="form-control" placeholder="Nivel obtenido" >
              </div>

              <div class="form-group">
                  
                  <input name="año" type="date" class="form-control" placeholder="Año" >
              </div>
              <div class="form-group">
                  
                  <input name="institucion" type="text" class="form-control" placeholder="Institución" >
              </div>

              
              <button type="submit" class="btn btn-dark">Enviar</button>         
            </form>            
          
          <?php break; ?>
        
          <?php default:?>
                  
            <?php break; ?>

   <?php   }  ?>
   </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          
      </div>
                            
    </div>
  </div>
</div>   
<!--termina  Modalpara insertar  -->


</main>