<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">           
<h2 class="mt-2">Busqueda de usuario</h2>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  </div>
</nav>
<form class="" id="eleccion" action="?controller=Usuario&action=buscar" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="primer_nombre" class="col-md-4 col-form-label">Primer nombre:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="primer_nombre" name="primer_nombre" placeholder="<?php echo $User['primer_nombre']; ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="segundo_nombre" class="col-md-4 col-form-label">Segundo nombre:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="segundo_nombre"  name="segundo_nombre" placeholder="<?php echo $User['segundo_nombre']; ?>" readonly>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="primer_apellido" class="col-md-4 col-form-label">Primer apellido:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="primer_apellido"  name="primer_apellido" placeholder="<?php echo $User['primer_apellido']; ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="segundo_apellido" class="col-md-4 col-form-label">Segundo apellido:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="segundo_apellido"  name="segundo_apellido" placeholder="<?php echo $User['segundo_apellido']; ?>" readonly>
                    </div>
                </div>
            </div>
            </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="cedula" class="col-md-4 col-form-label">Fecha de nacimiento:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="fecha_de_nacimiento"  name="fecha_de_nacimiento" placeholder="<?php echo $User['fecha_de_nacimiento']; ?>" readonly>
                        <small id="passwordHelpInline" class="text-muted">Año/Mes/Día</small>
                    </div>
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="celular" class="col-md-4 col-form-label">Celular:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="celular"  name="celular" placeholder="<?php echo $User['celular']; ?>" readonly>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="telefono" class="col-md-4 col-form-label">Teléfono residencial:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="telefono_casa"  name="telefono_casa" placeholder="<?php echo $User['telefono_casa']; ?>" readonly>
                    </div>
                </div>
            </div>  
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="cedula" class="col-md-4 col-form-label">Cédula:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="cedula"  name="cedula" placeholder="<?php echo $User['cedula']; ?>" readonly>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group row">
                    <label for="cedula" class="col-md-3 col-form-label">Genero:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="cedula"  name="cedula" placeholder="<?php echo $users['genero']; ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group row">
                    <label for="cedula" class="col-md-3 col-form-label">Sangre:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="cedula"  name="cedula" placeholder="<?php echo $User['sangre']; ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group row">
                    <label for="cedula" class="col-md-3 col-form-label">Peso:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="<?php echo $User['peso']; ?>" id="peso"  name="peso" min="1" max="300" step="1" readonly>
                    </div>
                    <div class="col-md-0">
                        <label for="metros" class="col-md-0 col-form-label">Kg</label>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group row">
                    <label for="cedula" class="col-md-3 col-form-label">Estatura:</label>
                    <div class="col-md-4">
                     <input type="text" class="form-control" id="estatura" placeholder="<?php echo $User['estatura']; ?>"  name="estatura" min="0.01" max="3.00" step="0.01" readonly>
                    </div>
                    <div class="col-md-0">
                        <label for="metros" class="col-md-0 col-form-label">m</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="Estado de salud" class="col-md-8 col-form-label">Estado de salud:</label>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <textarea class="form-control rounded-2" name="estado_salud" id="estado_salud" placeholder="<?php echo $User['estado_salud']; ?>" readonly></textarea>
                        </div>
                    </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="ecivil" class="col-md-8 col-form-label" >Estado civil:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="peso"  placeholder="<?php echo $User['estado_civil']; ?>" name="peso" min="1" max="300" step="1" readonly>
                    </div>
                </div>
            </div>
        </div>
        </form>
      
          