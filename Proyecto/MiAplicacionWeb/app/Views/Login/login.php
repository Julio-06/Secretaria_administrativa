<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/login.css">
    <title>Document</title>
</head>
<body>
    <div class="color ">
        <div class="container mt-5 " >
            <div class="row ">
            <div class="col-sm-8 pr-0 pl-0  border border-right-0 border-gray ">
                <img src="http://www.utp.ac.pa/sites/default/files/img_0524.jpg" class="img-fluid" alt="Responsive image">
            </div>

            <div class="col-sm-4  bg-success text-white pt-5 rounded-right border border-left-0 border-gray ">
                <form action="?controller=Login&action=validar" method="POST">
                    <h2>Inicio de sesión</h2>
                    <div class="form-group">
                        <label for="email">Correo:</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Contraseña:</label>
                        <input name="pass" type="password" class="form-control" id="pwd">
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Recordar usuario
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
               
         </div>
        
    </div>
        
    </div>
    
    </div>
    
</body>
</html>