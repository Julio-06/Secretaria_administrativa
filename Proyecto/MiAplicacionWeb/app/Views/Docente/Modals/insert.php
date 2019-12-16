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
                    <label for="">Fecha de finalización</label>
                    <input name="año" type="date" class="form-control" placeholder="Año" >
                </div>
                <div class="form-group">
                    
                    <input name="institucion" type="text" class="form-control" placeholder="Institución" >
                </div>

                
                         
              </form>
        
            <?php break; ?>

         <?php case '1':?>
          
            <form action="?controller=Docente&action=agregar&table=<?php echo $_GET['table']; ?>" method="POST">
              <div class="form-group">
              <label for="sel1">Seleccione su provincia:</label>
                <select class="form-control" id="sel1" name="provincia" placeholder="Provincias">
                    <option>Bocas del Toro</option>
                    <option>Coclé</option>
                    <option>Colón</option>
                    <option>Chiriquí</option>
                    <option>Darién</option>
                    <option>Herrera</option>
                    <option>Los Santos</option>
                    <option>Panamá</option>
                    <option>Veraguas</option>
                    <option>Panamá Oeste</option>
                </select>
                  
                  
              </div>

              <div class="form-group">
                  
                  <input name="distrito" type="text" class="form-control" placeholder="Distrito" >
              </div>
              <div class="form-group">
                  
                  <input name="corregimiento" type="text" class="form-control" placeholder="Corregimiento" >
              </div>
              <div class="form-group">
                  
                  <input  rows="5" name="direccion_actual" type="text" class="form-control" placeholder="Direccion_actual" >
              </div>
             

              
              <button type="submit" class="btn btn-dark">Enviar</button> 
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>   
            </form>
              
            <?php break;?>
         <?php case '2':?>
          
            <form action="?controller=Docente&action=agregar&table=<?php echo $_GET['table']; ?>" method="POST">
              <div class="form-group">
                  
                  <input name="correo_institucional" type="email" class="form-control" placeholder="Correo_institucional" >
              </div>

              <div class="form-group">
                  
                  <input name="telefono_institucional" type="number" class="form-control" placeholder="Telefono_institucional" >
              </div>
              <div class="form-group">
                  
                  <input name="extension" type="number" class="form-control" placeholder="Extension" >
              </div>

              
              <button type="submit" class="btn btn-dark">Enviar</button> 
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>     
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
                <label for="sel2">¿Localizar en caso de emergencia?:</label>
                <select  class="form-control" id="sel2" name="localizar_emergencia">
                    <option>Si</option>
                    <option>No</option>
                    
                </select>
                    
                    
                </div>
                <div class="form-group">
                    
                    <input name="prioridad_localizar" type="number" class="form-control" placeholder="Prioridad_localizar" >
                </div>
                <div class="form-group">
                    <label for="">Fecha de nacimiento:</label>
                    <input name="fecha_de_nacimiento_f" type="date" class="form-control" placeholder="Fecha_de_nacimiento" >
                </div>
                <div class="form-group">
                    
                    <input name="celular_f" type="number" class="form-control" placeholder="Celular" >
                </div>
                <div class="form-group">
                    
                    <input name="telefono_residencia" type="number" class="form-control" placeholder="Telefono_residencia" >
                </div>
                <div class="form-group">
                    
                    <input name="telefono_oficina" type="number" class="form-control" placeholder="Telefono_oficina" >
                </div>
                <div class="form-group">
                    
                    <input name="correo_electronico" type="email" class="form-control" placeholder="Correo_electronico" >
                </div>

                <button type="submit" class="btn btn-dark">Enviar</button> 
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> 
                        
              </form>
            <?php break;?>

            <?php case '4':?>
              
              <form action="?controller=Docente&action=agregar&table=<?php echo $_GET['table']; ?>" method="POST">
                <div class="form-group">
                <label for="sel2">Categoria de docente:</label>
                    <select class="form-control" id="sel2" name="categoria_docente">
                    <option>Completo</option>
                    <option>Parcial</option>
                    
                    </select>
                </div>

                <div class="form-group">
                    
                <label for="sel2">Departamento:</label>
                <select  class="form-control" id="sel2" name="departamento">
                    <option>No definido</option>
                    <option>Arquitectura y Redes de Computadoras</option>
                    <option>Computación y Simulación de Sistemas</option>
                    <option>Ingenieria de Software</option>
                    <option>Programación de Computadoras</option>
                    <option>Sistemas de Información,Control y Evaluación de Recursos Informáticos</option>
                </select>
                </div>
                <div class="form-group">
                <label for="sel2">Cargo administrativo:</label>
                <select  class="form-control" id="sel2" name="cargo_administrativo">
                    <option>Sin cargo</option>
                    <option>Decano</option>
                    <option>Vicedecano</option>
                    <option>Jefe de Departamento</option>
                    <option>Coordinador de Carrera</option>
                    <option>Coordinador de FISC en Centro Regional</option>
                    <option>Coordinador de Extension</option>
                    <option>Coordinador de Postgrado</option>
                    <option>Coordinador de Investigación</option>
                    <option>Director de Centro Regional</option>
                    <option>Subdirector Académico de Centro Regional</option>
                    <option>Subdirector administrativo de Centro Regional</option>
                    <option>Subdirector de investigación,postgrado y extension de Centro Regional</option>
                    <option>Coordinador de Extension en Centro Regional</option>
                    <option>Coordinador de Postgrado en Centro Regional</option>
                    <option>Coordinador de Investigación en Centro Regional</option>
                </select>
                    
                    
                </div>
                <div class="form-group">
                <label for="sel2">Ubicación:</label>
                <select  class="form-control" id="sel2" name="ubicacion">
                    <option>Sede</option>
                    <option>Azuero</option>
                    <option>Bocas del Toro</option>
                    <option>Chiriquí</option>
                    <option>Coclé</option>
                    <option>Colón</option>
                    <option>Panamá Oeste</option>
                    <option>Veraguas</option>
                </select>
                    
                </div>
                <div class="form-group">
                <label for="sel2">Representación ante órganos de gobierno:</label>
                <select  class="form-control" id="sel2" name="repre_organos_gobierno">
                    <option>Ninguno</option>
                    <option>Junta de Facultad</option>
                    <option>Consejo General</option>
                    <option>Consejo Académico</option>
                    <option>Consejo de Investigación</option>
                    <option>Consejo administrativo</option>
                </select>         
                </div>   
                <button type="submit" class="btn btn-dark">Enviar</button> 
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>    
              </form>
            <?php break;?>

            <?php case '5':?>
              <form action="?controller=Docente&action=agregar&table=<?php echo $_GET['table']; ?>" method="POST">
                <div class="form-group">
        
                    
                    <input name="nombre_capacitacion" type="text" class="form-control" placeholder="Nombre capacitación" >
                </div>

                <div class="form-group">
                    <label for="">Fecha de finalización:</label>
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
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> 
                        
              </form>
            <?php break;?>

          <?php case '6':?>
              <form action="?controller=Docente&action=agregar&table=<?php echo $_GET['table']; ?>" method="POST">
                <div class="form-group">
                    
                    <input name="titulo" type="text" class="form-control" placeholder="Título obtenido" >
                </div>

                <div class="form-group">
                    <label for="">Fecha de finalización:</label>
                    <input name="año" type="date" class="form-control" placeholder="Año" >
                </div>
                <div class="form-group">
                    
                    <input name="institucion" type="text" class="form-control" placeholder="Institución" >
                </div>

                <button type="submit" class="btn btn-dark">Enviar</button> 
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> 
                        
              </form>            
              
          <?php break; ?>

          <?php case '7':?>
            
                 
            <form action="?controller=Docente&action=agregar&table=<?php echo $_GET['table']; ?>" method="POST">
              <div class="form-group">
                  
                  <input name="titulo" type="text" class="form-control" placeholder="Título obtenido" >
              </div>
              <div class="form-group">
              <label for="sel2">Nivel:</label>
                <select  class="form-control" id="sel2" name="nivel">
                    <option>Diplomado</option>
                    <option>Técnico</option>
                    <option>Licienciatura</option>
                    <option>Postgrado</option>
                    <option>Maestría</option>
                    <option>Doctorado</option>
                </select>  
                  
                  
              </div>

              <div class="form-group">
                  <label for="">Fecha de finalización:</label>
                  <input name="año" type="date" class="form-control" placeholder="Año" >
              </div>
              <div class="form-group">
                  
                  <input name="institucion" type="text" class="form-control" placeholder="Institución" >
              </div>

              
              <button type="submit" class="btn btn-dark">Enviar</button> 
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>        
            </form>            
          
          <?php break; ?>
        
          <?php default:?>
                  
            <?php break; ?>

   <?php   }  ?>
   </div>
      <div class="modal-footer">
        
          
          
      </div>
                            
    </div>
  </div>
</div>   
<!--termina  Modalpara insertar  -->


</main>