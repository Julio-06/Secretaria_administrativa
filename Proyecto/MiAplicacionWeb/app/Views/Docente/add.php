<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <h2 class="mt-2">Registro de nuevo docente</h2>
    <form action="?controller=Docente&&action=save" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="primer_nombre" class="col-md-4 col-form-label">Primer nombre:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="primer_nombre" name="primer_nombre" placeholder="Primer nombre del docente" required>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="segundo_nombre" class="col-md-4 col-form-label">Segundo nombre:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="segundo_nombre"  name="segundo_nombre" placeholder="Segundo nombre del docente"required>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="primer_apellido" class="col-md-4 col-form-label">Primer apellido:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="primer_apellido"  name="primer_apellido" placeholder="Primer apellido del docente"required>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="segundo_apellido" class="col-md-4 col-form-label" >Segundo apellido:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="segundo_apellido"  name="segundo_apellido" placeholder="Segundo apellido del docente"required>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="cedula" class="col-md-4 col-form-label">Cédula:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="cedula"  name="cedula" placeholder="Cédula del docente"required>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="cedula" class="col-md-4 col-form-label">Fecha de nacimiento:</label>
                    <div class="col-md-8">
                        <input type="date" class="form-control" id="fecha_de_nacimiento"  name="fecha_de_nacimiento" placeholder="Fecha de nacimiento" required>
                    </div>
                </div>
            </div>  
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group row">
                    <label for="cedula" class="col-md-3 col-form-label">Genero:</label>
                    <div class="col-md-2">
                        <select  class="mdb-select md-forl" id="genero"  name="genero" placeholder="genero"required>
                        <option value="" disabled selected>Seleccione el genero</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group row">
                    <label for="cedula" class="col-md-3 col-form-label">Sangre:</label>
                    <div class="col-md-2">
                            <select name="sangre" class="mdb-select md-forl" id="sangre" placeholder="Tipo de sangre" required>
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
                        <input type="text" class="form-control" id="peso"  name="peso" placeholder="peso en kg" required>
                    </div>
                    <div class="col-md-0">
                        <label for="peso" class="col-md-0 col-form-label">Kg</label>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group row">
                    <label for="cedula" class="col-md-3 col-form-label">Estatura:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="estatura"  name="estatura" placeholder="en metros"required>
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
                            <textarea class="form-control rounded-2" name="estado_salud" id="estado_salud" required>Padecimientos de algunas enfermedades, alergias, etc.</textarea>
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


        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</main>