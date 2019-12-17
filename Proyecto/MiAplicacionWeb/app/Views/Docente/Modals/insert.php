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
                  
                  <input name="telefono_institucional" type="text" class="form-control" placeholder="Telefono_institucional" >
              </div>
              <div class="form-group">
                  
                  <input name="extension" type="text" class="form-control" placeholder="Extension" >
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
                    
                    <input name="celular_f" type="text" class="form-control" placeholder="Celular" >
                </div>
                <div class="form-group">
                    
                    <input name="telefono_residencia" type="text" class="form-control" placeholder="Telefono_residencia" >
                </div>
                <div class="form-group">
                    
                    <input name="telefono_oficina" type="text" class="form-control" placeholder="Telefono_oficina" >
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