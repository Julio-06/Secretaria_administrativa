<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

<?php foreach ($consulta as $dato) { 
    switch ($_GET['table']) {

         case '1':?>
          
            <form action="?controller=Docente&action=update&table=<?php echo $_GET['table']; ?>&regi=<?php echo $dato["idresidencia"]?>" method="POST">
            <h2>Actualizar registro</h2>
              <div class="form-group">
                  
                  <input name="provincia" type="text" class="form-control" placeholder="Provincia" value="<?php echo $dato["provincia"]?>" >
              </div>

              <div class="form-group">
                  
                  <input name="distrito" type="text" class="form-control" placeholder="Distrito" value="<?php echo $dato["distrito"]?>">
              </div>
              <div class="form-group">
                  
                  <input name="corregimiento" type="text" class="form-control" placeholder="Corregimiento" value="<?php echo $dato["corregimiento"]?>">
              </div>
              <div class="form-group">
                  
                  <input name="direccion_actual" type="text" class="form-control" placeholder="Direccion_actual" value="<?php echo $dato["direccion_actual"]?>">
              </div>
             

              <a href="?controller=Docente&action=buscar&table=<?php echo $_GET['table']; ?>" class="btn btn-dark">Atras</a> 
              <button type="submit" class="btn btn-dark">Enviar</button>         
            </form>
              
        <?php break;?>

            <?php case '2':?>
          
                <form action="?controller=Docente&action=update&table=<?php echo $_GET['table']; ?>&regi=<?php echo $dato["idinformacion_institucional"]?>" method="POST">
                <h2>Actualizar registro</h2>
                    <div class="form-group">
                        
                        <input name="correo_institucional" type="text" class="form-control" placeholder="Correo_institucional" value="<?php echo $dato["correo_institucional"]?>">
                    </div>

                    <div class="form-group">
                        
                        <input name="telefono_institucional" type="text" class="form-control" placeholder="Telefono_institucional" value="<?php echo $dato["telefono_institucional"]?>">
                    </div>
                    <div class="form-group">
                        
                        <input name="extension" type="text" class="form-control" placeholder="Extension" value="<?php echo $dato["extension"]?>">
                    </div>

                    <a href="?controller=Docente&action=buscar&table=<?php echo $_GET['table']; ?>" class="btn btn-dark">Atras</a> 
                    <button type="submit" class="btn btn-dark">Enviar</button>         
                </form>

           <?php break;?>

          <?php case '3':?>

            <form action="?controller=Docente&action=update&table=<?php echo $_GET['table']; ?>&regi=<?php echo $dato["idfamiliares_emergencia"]?>" method="POST">
            <h2>Actualizar registro</h2>
              <div class="form-group">
                  
                  <input name="parentesco" type="text" class="form-control" placeholder="Parentesco" value="<?php echo $dato["parentesco"]?>">
              </div>

              <div class="form-group">
                  
                  <input name="nombre" type="text" class="form-control" placeholder="Nombre" value="<?php echo $dato["nombre"]?>">
              </div>
              <div class="form-group">
                  
                  <input name="apellido" type="text" class="form-control" placeholder="Apellido" value="<?php echo $dato["apellido"]?>">
              </div>
              <div class="form-group">
                  
                  <input name="localizar_emergencia" type="text" class="form-control" placeholder="Localizar_emergencia" value="<?php echo $dato["localizar_emergencia"]?>">
              </div>
              <div class="form-group">
                  
                  <input name="prioridad_localizar" type="" class="form-control" placeholder="Prioridad_localizar" value="<?php echo $dato["prioridad_localizar"]?>">
              </div>
              <div class="form-group">
                  
                  <input name="fecha_de_nacimiento_f" type="date" class="form-control" placeholder="Fecha_de_nacimiento" value="<?php echo $dato["fecha_de_nacimiento_f"]?>">
              </div>
              <div class="form-group">
                  
                  <input name="celular_f" type="text" class="form-control" placeholder="Celular" value="<?php echo $dato["celular_f"]?>">
              </div>
              <div class="form-group">
                  
                  <input name="telefono_residencia" type="text" class="form-control" placeholder="Telefono_residencia" value="<?php echo $dato["telefono_residencia"]?>">
              </div>
              <div class="form-group">
                  
                  <input name="telefono_oficina" type="text" class="form-control" placeholder="Telefono_oficina" value="<?php echo $dato["telefono_oficina"]?>">
              </div>
              <div class="form-group">
                  
                  <input name="correo_electronico" type="text" class="form-control" placeholder="Correo_electronico" value="<?php echo $dato["correo_electronico"]?>">
              </div>

              <a href="?controller=Docente&action=buscar&table=<?php echo $_GET['table']; ?>" class="btn btn-dark">Atras</a> 
              <button type="submit" class="btn btn-dark">Enviar</button>         
            </form>
          <?php break;?>

          <?php case '4':?>
            
            <form action="?controller=Docente&action=update&table=<?php echo $_GET['table']; ?>&regi=<?php echo $dato["iddocentes_laboral"]?>" method="POST">
            <h2>Actualizar registro</h2>
              <div class="form-group">
                  
                  <input name="categoria_docente" type="text" class="form-control" placeholder="Categoria_docente" value="<?php echo $dato["categoria_docente"]?>">
              </div>

              <div class="form-group">
                  
                  <input name="departamento" type="text" class="form-control" placeholder="Departamento" value="<?php echo $dato["departamento"]?>">
              </div>
              <div class="form-group">
                  
                  <input name="cargo_administrativo" type="text" class="form-control" placeholder="Cargo_administrativo" value="<?php echo $dato["cargo_administrativo"]?>">
              </div>
              <div class="form-group">
                  
                  <input name="ubicacion" type="text" class="form-control" placeholder="Ubicación" value="<?php echo $dato["ubicacion"]?>">
              </div>
              <div class="form-group">
                  
                  <input name="repre_organos_gobierno" type="text" class="form-control" placeholder="Repre_organos_gobierno" value="<?php echo $dato["repre_organos_gobierno"]?>">
              </div>

              <a href="?controller=Docente&action=buscar&table=<?php echo $_GET['table']; ?>" class="btn btn-dark">Atras</a> 
              <button type="submit" class="btn btn-dark">Enviar</button>         
            </form>
          <?php break;?>

          <?php case '5':?>
            <form action="?controller=Docente&action=update&table=<?php echo $_GET['table']; ?>&regi=<?php echo $dato["idcapacitaciones"]?>" method="POST">
            <h2>Actualizar registro</h2>
              <div class="form-group">
      
                  
                  <input name="nombre_capacitacion" type="text" class="form-control" placeholder="Nombre capacitación" value="<?php echo $dato["nombre_capacitacion"]?>">
              </div>

              <div class="form-group">
                  
                  <input name="año" type="date" class="form-control" placeholder="Año" value="<?php echo $dato["año"]?>">
              </div>
              <div class="form-group">
                  
                  <input name="rol" type="text" class="form-control" placeholder="Rol" value="<?php echo $dato["rol"]?>">
              </div>
              <div class="form-group">
                  
                  <input name="horas" type="number" class="form-control" placeholder="Horas" value="<?php echo $dato["horas"]?>">
              </div>
              <div class="form-group">
                  
                  <input name="institucion" type="text" class="form-control" placeholder="Institución" value="<?php echo $dato["institucion"]?>">
              </div>

              <a href="?controller=Docente&action=buscar&table=<?php echo $_GET['table']; ?>" class="btn btn-dark">Atras</a> 
              <button type="submit" class="btn btn-dark">Enviar</button>         
            </form>
          <?php break;?>

        <?php case '6':?>
            <form action="?controller=Docente&action=update&table=<?php echo $_GET['table']; ?>&regi=<?php echo $dato['iddiplomados']?>" method="POST">
                <h2>Actualizar registro</h2>

                <div class="form-group">
                    <input name="titulo" type="text" class="form-control" value="<?php echo $dato['titulo_obtenido']?>" placeholder="Título obtenido">
                </div>

                <div class="form-group">
                    
                    <input name="año" type="date" class="form-control" value="<?php echo $dato['año']?>" placeholder="Año">
                </div>
                <div class="form-group">
                    
                    <input name="institucion" type="text" class="form-control" value="<?php echo $dato['institucion']?>" placeholder="Institución">
                </div>
                <a href="?controller=Docente&action=buscar&table=<?php echo $_GET['table']; ?>" class="btn btn-dark">Atras</a>  
                <button type="submit" class="btn btn-dark">Enviar</button> 
                    
            </form>
         <?php   break; ?>

        
        
        
        <?php case '7':?>
            
                 
            <form action="?controller=Docente&action=update&table=<?php echo $_GET['table']; ?>&regi=<?php echo $dato['idregistros_academicos']?>" method="POST">
            <h2>Actualizar registro</h2>
              <div class="form-group">
                  
                  <input name="titulo" type="text" class="form-control" placeholder="Título obtenido" value="<?php echo $dato["titulo_obtenido"]?>">
              </div>
              <div class="form-group">
                  
                  <input name="nivel" type="text" class="form-control" placeholder="Nivel obtenido" value="<?php echo $dato["nivel"]?>">
              </div>

              <div class="form-group">
                  
                  <input name="año" type="date" class="form-control" placeholder="Año" value="<?php echo $dato["año"]?>">
              </div>
              <div class="form-group">
                  
                  <input name="institucion" type="text" class="form-control" placeholder="Institución" value="<?php echo $dato["institucion"]?>">
              </div>

              <a href="?controller=Docente&action=buscar&table=<?php echo $_GET['table']; ?>" class="btn btn-dark">Atras</a> 
              <button type="submit" class="btn btn-dark">Enviar</button>         
            </form>            
          
          <?php break; ?>
        
        <?php default: ?>
            
            <?php break; ?>
    <?php } ?> 
    

 
<?php } ?>


</main>

