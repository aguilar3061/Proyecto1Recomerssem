<?php 

session_start();


?>
<nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
    <img src="/RECOMENSSEM/media/logo-ninot-small.png" alt="logo" width="100" height="45">

 
  <div class="collapse navbar-collapse" id="navbarSupportedContent" 
  >
    <ul class="navbar-nav mr-auto">
    </ul>

    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="navbar-brand"  href="/RECOMENSSEM/index.php">Mercat del ninot</a>
      </li>
    </ul>
   
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <?php if(isset($_SESSION['user'])){?>
          <?php if(isset($_SESSION['admin'])) { ?>
            <a class="dropdown-item" href="/RECOMENSSEM/PAGINAS/GESTION_USUARIOS/gestionUsuarios.php" id="gestionUsuarios" >Gestionar usuarios</a>
          <?php }?>
            <a class="dropdown-item" href="/RECOMENSSEM/PAGINAS/LOGOUT/logout.php" id="cerrarSesion" >Cerrar sesion</a>

          <?php
          }else{?>
              <a class="dropdown-item" href="/RECOMENSSEM/PAGINAS/INICIAR_SESION/iniciarSesion.php" id="iniciarSesion">Iniciar sesion</a>
              <a class="dropdown-item" href="/RECOMENSSEM/PAGINAS/REGISTRO/registro.php" id="Registrarse">Registrarse</a><?php } ?>
          
        </div>
      </li>
    </ul>
  </div>
</nav>