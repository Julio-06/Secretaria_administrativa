<?php
	session_start();

?>

<div class='container'>

<div class='row'>

<div class='col-md-12'>
<nav class="navbar navbar-dark sticky bg-primary flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="?controller=Home&action=index">Secretaría Administrativa</a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="?controller=Login&action=salir">Salir</a>
        </li>
    </ul>
</nav>
</div>

</div>
<br>
<div class='row'>

<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
        <ul class="nav flex-column">

        <li class="nav-item">
                <a class="nav-link" href="?controller=Docente&action=index">
                    Inicio
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="?controller=Docente&action=index">
                    Informaciòn
                </a>
            </li>

            
                
            



            <li class="nav-item">
                <a class="nav-link" href="?controller=Docente&action=index">
                    Listar Docentes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controller=Docente&action=add">
                    Registrar Docente
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controller=Administrativo&action=index">
                    Listar Administrativos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Mensaje 
                </a>
            </li>
        </ul>

    </div>
</nav>
</div>
</div>




