<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

<?php foreach ($consulta as $dato) { 
    switch ($_GET['table']) {

         case '1':?>
          
        <form action="?controller=Docente&action=update&table=<?php echo $_GET['table']; ?>&regi=<?php echo $dato["idresidencia"]?>" method="POST">
        <h2>Actualizar registro</h2>
            <div class="form-group">
            <label for="sel1">Seleccione su provincia:</label>
            <select class="form-control" id="prueba"  name="provincia" onchange="cambia()">
            
                <option value="Provincia">Provincia</option>
                <option value="Coclé">Coclé</option>
                <option value="Colón">Colón</option>
                <option value="Chiriquí">Chiriquí</option>
                <option value="Darién">Darién</option>
                <option value="Herrera">Herrera</option>
                <option value="Los Santos">Los Santos</option>
                <option value="Panamá">Panamá</option>
                <option value="Veraguas">Veraguas</option>
                <option value="Panamá Oeste">Panamá Oeste</option>
                <option value="Bocas del Toro">Bocas del Toro</option>
                <option value="Comarca Guna Yala">Comarca Guna Yala</option>
                <option value="Comarca Ngobe Buglé">Comarca Ngobe Buglé</option>
                <option value="Comarca Emberá-Wounaan">Comarca Emberá-Wounaan</option>
                
        </select>
        
        
            
            </div>

            <div class="form-group">
            <label for="sel1">Seleccione su distrito:</label>  
            <select class="form-control" name="distrito" id="opt">
            <option value="-">-
            </select>
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
                        
                        <input name="correo_institucional" type="email" class="form-control" placeholder="Correo_institucional" value="<?php echo $dato["correo_institucional"]?>">
                    </div>

                    <div class="form-group">
                        
                        <input name="telefono_institucional" type="number" class="form-control" placeholder="Telefono_institucional" value="<?php echo $dato["telefono_institucional"]?>">
                    </div>
                    <div class="form-group">
                        
                        <input name="extension" type="number" class="form-control" placeholder="Extension" value="<?php echo $dato["extension"]?>">
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
                  
              <label for="sel2">¿Localizar en caso de emergencia?:</label>
                <select  class="form-control" id="sel2" name="localizar_emergencia">
                    <option>Si</option>
                    <option>No</option>
                    
                </select>
              </div>
              <div class="form-group">
                  
                  <input name="prioridad_localizar" type="number" class="form-control" placeholder="Prioridad_localizar" value="<?php echo $dato["prioridad_localizar"]?>">
              </div>
              <div class="form-group">
              <label for="">Fecha de nacimiento:</label>
                  <input name="fecha_de_nacimiento_f" type="date" class="form-control" placeholder="Fecha_de_nacimiento" value="<?php echo $dato["fecha_de_nacimiento_f"]?>">
              </div>
              <div class="form-group">
                  
                  <input name="celular_f" type="number" class="form-control" placeholder="Celular" value="<?php echo $dato["celular_f"]?>">
              </div>
              <div class="form-group">
                  
                  <input name="telefono_residencia" type="number" class="form-control" placeholder="Telefono_residencia" value="<?php echo $dato["telefono_residencia"]?>">
              </div>
              <div class="form-group">
                  
                  <input name="telefono_oficina" type="number" class="form-control" placeholder="Telefono_oficina" value="<?php echo $dato["telefono_oficina"]?>">
              </div>
              <div class="form-group">
                  
                  <input name="correo_electronico" type="email" class="form-control" placeholder="Correo_electronico" value="<?php echo $dato["correo_electronico"]?>">
              </div>

              <a href="?controller=Docente&action=buscar&table=<?php echo $_GET['table']; ?>" class="btn btn-dark">Atras</a> 
              <button type="submit" class="btn btn-dark">Enviar</button>         
            </form>
          <?php break;?>

          <?php case '4':?>
            
            <form action="?controller=Docente&action=update&table=<?php echo $_GET['table']; ?>&regi=<?php echo $dato["iddocentes_laboral"]?>" method="POST">
            <h2>Actualizar registro</h2>
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
                  <label for="">Fecha de finalización:</label>
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
                <label for="">Fecha de finalización:</label>
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
                  <input name="año" type="date" class="form-control" placeholder="Año" value="<?php echo $dato["año"]?>">
              </div>
              <div class="form-group">
                  
                  <input name="institucion" type="text" class="form-control" placeholder="Institución" value="<?php echo $dato["institucion"]?>">
              </div>

              <a href="?controller=Docente&action=buscar&table=<?php echo $_GET['table']; ?>" class="btn btn-dark">Atras</a> 
              <button type="submit" class="btn btn-dark">Enviar</button>         
            </form>            
          
          <?php break; ?>

    <?php case '0':?>
          
          <form action="?controller=Docente&action=update&table=<?php echo $_GET['table']; ?>&regi=<?php echo $dato["iddocentes"]?>" method="POST">
          <h2>Actualizar registro</h2>
          
        <h2 class="mt-2">Datos personales</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="primer_nombre" class="col-md-4 col-form-label">Primer nombre:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="primer_nombre" name="primer_nombre" placeholder="Primer nombre del docente" required value="<?php echo $dato["primer_nombre"]?>">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="segundo_nombre" class="col-md-4 col-form-label">Segundo nombre:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="segundo_nombre"  name="segundo_nombre" placeholder="Segundo nombre del docente" value="<?php echo $dato["segundo_nombre"]?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="primer_apellido" class="col-md-4 col-form-label">Primer apellido:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="primer_apellido"  name="primer_apellido" placeholder="Primer apellido del docente"required value="<?php echo $dato["primer_apellido"]?>">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="segundo_apellido" class="col-md-4 col-form-label" >Segundo apellido:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="segundo_apellido"  name="segundo_apellido" placeholder="Segundo apellido del docente" value="<?php echo $dato["segundo_nombre"]?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="cedula" class="col-md-4 col-form-label">Fecha de nacimiento:</label>
                    <div class="col-md-8">
                        <input type="date" class="form-control"  name="fecha_de_nacimiento" placeholder="Fecha de nacimiento" required value="<?php echo $dato["fecha_de_nacimiento"]?>">
                    </div>
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="celular" class="col-md-4 col-form-label">Celular:</label>
                    <div class="col-md-8">
                        <input type="tel" class="form-control" id="celular"  name="celular" placeholder="Celular personal del docente/admnistrativo" value="<?php echo $dato["celular"]?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="telefono" class="col-md-4 col-form-label">Teléfono residencial:</label>
                    <div class="col-md-8">
                        <input type="tel" class="form-control" id="telefono_casa"  name="telefono_casa" placeholder="Te" value="<?php echo $dato["telefono_casa"]?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telefono" class="col-md-4 col-form-label">Correo personal 1:</label>
                    <div class="col-md-8">
                        <input type="email" class="form-control" id="telefono_casa"  name="correo1" placeholder="Correo" value="<?php echo $dato["correo_personal1"]?>">
                    </div>
                </div>
                
            </div>  
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="cedula" class="col-md-4 col-form-label">Cédula:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="cedula"  name="cedula" placeholder="Cédula del docente"required value="<?php echo $dato["cedula"]?>">
                    </div>
                    
                </div>
                <div class="form-group row">
                    <label  class="col-md-4 col-form-label">Correo personal 2:</label>
                    <div class="col-md-8">
                        <input type="email" class="form-control"   name="correo2" placeholder="Correo" value="<?php echo $dato["correo_personal2"]?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group row">
                    <label for="cedula" class="col-md-3 col-form-label">Genero:</label>
                    <div class="col-md-2">
                        <select  class="mdb-select md-forl" id="genero"  name="genero" placeholder="genero"required value="<?php echo $dato["genero"]?>">
                        <option value="" disabled selected>Seleccione el genero</option>
                        <option value="m">Masculino</option>
                        <option value="f">Femenino</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group row">
                    <label for="cedula" class="col-md-3 col-form-label">Sangre:</label>
                    <div class="col-md-2">
                            <select name="sangre" class="mdb-select md-forl" id="sangre" placeholder="Tipo de sangre" required value="<?php echo $dato["sangre"]?>">
                            <option value="" disabled selected>Seleccione el tipo</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            </select>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group row">
                    <label for="cedula" class="col-md-3 col-form-label">Peso:</label>
                    <div class="col-md-6">
                        <input type="number" class="form-control" id="peso"  name="peso" min="1" max="300" step="1" required value="<?php echo $dato["peso"]?>">
                        <small id="seleccionidline" class="text-muted">Debe estar dado en Kilogramos</small>
                    </div>
                    <div class="col-md-0">
                        <label for="metros" class="col-md-0 col-form-label">Kg</label>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group row">
                    <label for="cedula" class="col-md-3 col-form-label">Estatura:</label>
                    <div class="col-md-6">
                    <input type="number" class="form-control" id="estatura"  name="estatura" min="0.01" max="3.00" step="0.01" required value="<?php echo $dato["estatura"]?>">
                    <small id="seleccionidline" class="text-muted">Debe estar dado en Metros</small>
                    </div>
                    <div class="col-md-0">
                        <label for="metros" class="col-md-0 col-form-label">m</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="Estado de salud" class="col-md-4 col-form-label">Estado de salud:</label>
                    <div class="form-group row">
                        <div class="col-md-8">
                            <textarea class="form-control rounded-2" name="estado_salud" id="estado_salud" placeholder="Padecimientos de algunas enfermedades, alergias, etc." required value="<?php echo $dato["estado_salud"]?>"></textarea>
                        </div>
                    </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="ecivil" class="col-md-4 col-form-label" >Estado civil:</label>
                    <div class="col-md-6">
                            <select name="estado_civil" id="estado_civil" class="mdb-select md-forl" placeholder="Tipo de sangre" required>
                            <option value="" disabled selected>Seleccione</option>
                            <option value="soltero">Soltero</option>
                            <option value="casado">Casado</option>
                            <option value="divorciado">Viudo</option>
                            </select>
                    </div>
                </div>
            </div>
        </div>


        

              <a href="?controller=Docente&action=buscar&table=<?php echo $_GET['table']; ?>" class="btn btn-dark">Atras</a> 
              <button type="submit" class="btn btn-dark">Enviar</button>         
          </form>

     <?php break;?>
        
        <?php default: ?>
            
            <?php break; ?>
    <?php } ?> 
    

 
<?php } ?>
<script type="text/javascript">
			//1) Definir Las Variables Correspondintes
			var opt_1 = new Array ("-","Penonomé","Aguadulce","Antón","La Pintada","Natá","Olá");
			var opt_2 = new Array ("-","Colón","Chagres","Donoso","Omar Torrijos Herrera","Portobelo","Santa Isabel");
			var opt_3 = new Array ("-","David", "Alanje", "Barú", "Boquerón","Boquete","Bugaba","Dolega","Gualaca","Remedios","Renacimiento","San Félix","San Lorenzo","Tierras Altas","Tolé");
            var opt_4 = new Array ("-", "Chepigana", "Pinogana", "Santa Fe");
            var opt_5 = new Array ("-", "Chitré", "Las Minas", "Los Pozos", "Ocú", "Parita", "Pesé", "Santa María");
            var opt_6 = new Array ("-", "Las Tablas", "Guararé", "Los Santos", "Macaracas", "Pedasí", "Pocrí", "Tonosí");
            var opt_7 = new Array ("-", "Panamá", "Balboa", "Chepo", "Chimán", "San Miguelito", "Taboga");
            var opt_8 = new Array ("-", "Santiago", "Atalaya", "Calobre", "Cañazas", "La Mesa", "Las Palmas", "Mariato", "Montijo", "Río de Jesús", "San Francisco", "Santa Fe", "Soná");
            var opt_9 = new Array ("-", "La Chorrera", "Arraiján", "Capira", "Chame","San Carlos");
            var opt_10 = new Array ("-", "Bocas del Toro", "Almirante", "Changuinola", "Chiriquí Grande");
            var opt_11 = new Array ("-", "Narganá", "Ailigandí", "Puerto Obaldía", "Tubualá");
            var opt_12 = new Array ("-", "Besikó", "Jirondai", "Kankintú", "Kusapín","Mironó","Müna","Nole Duima","Ñürüm","Santa Catalina o Calovébora");
            var opt_13 = new Array ("-", "Cémaco", "Sambú");
			// 2) crear una funcion que permita ejecutar el cambio dinamico
			
			function cambia(){
                
				var cosa;
				//Se toma el vamor de la "cosa seleccionada"
                cosa = document.getElementById('prueba').value;
                switch (cosa) {
                    case "Provincia":
                       cosa=0; 
                    break;
                    case "Coclé":
                        cosa=1; 
                    break;
                    case "Colón":
                        cosa=2; 
                    break;
                    case "Chiriquí":
                        cosa=3; 
                    break;
                    case "Darién":
                        cosa=4; 
                    break;
                    case "Herrera":
                        cosa=5; 
                    break;
                    case "Los Santos":
                        cosa=6; 
                    break;
                    case "Panamá":
                        cosa=7; 
                    break;
                    case "Veraguas":
                        cosa=8; 
                    break;
                    case "Panamá Oeste":
                        cosa=9; 
                    break;
                    case "Bocas del Toro":
                        cosa=10; 
                    break;
                    case "Comarca Guna Yala":
                        cosa=11; 
                    break;
                    case "Comarca Ngobe Buglé":
                        cosa=12; 
                    break;
                    case "Comarca Emberá-Wounaan":
                        cosa=13; 
                    break;
                
                    default:
                        break;
                }
				//se chequea si la "cosa" esta definida
				if(cosa!=0){
					//selecionamos las cosas Correctas
					mis_opts=eval("opt_" + cosa);
					//se calcula el numero de cosas
					num_opts=mis_opts.length;
					//marco el numero de opt en el select
					document.getElementById('opt').length = num_opts;
					//para cada opt del array, la pongo en el select
					for(i=0; i<num_opts; i++){
						document.getElementById('opt').options[i].value=mis_opts[i];
						document.getElementById('opt').options[i].text=mis_opts[i];
					}
					}else{
						//si no habia ninguna opt seleccionada, elimino las cosas del select
						document.getElementById('opt').length = 1;
						//ponemos un guion en la unica opt que he dejado
						document.getElementById('opt').options[0].value="-";
						document.getElementById('opt').options[0].text="-";
					}
					//hacer un reset de las opts
					document.getElementById('opt').options[0].selected = true;
					
				}
			
			
		
		</script>

</main>

