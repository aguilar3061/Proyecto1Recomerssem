<?php 

session_start();


?>
<nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
    <a href="/RECOMENSSEM/index.php">
    <img src="/RECOMENSSEM/media/logo-ninot-small.png" alt="logo" width="100" height="45">

    </a>
    
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent" 
  >
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <?php if(isset($_SESSION['user'])){?>
          <a class="navbar-brand lang" key="Noticias" href="/RECOMENSSEM/PAGINAS/INFO_NOTICIAS/infonoti.php" style="padding-left: 20px;">Noticias</a>
          <a class="navbar-brand lang" key="Juegos" href="/RECOMENSSEM/PAGINAS/JUEGOS/juegos.php">Juegos</a>
          <a class="navbar-brand lang" key="Ofertas" href="/RECOMENSSEM/PAGINAS/OFERTAS/ofertas.php">Ofertas</a>
          <?php
          }?>
      </li>
      
    </ul>
   
    <ul class="navbar-nav">
      <div style="margin-right: 25px;">
      <img src="/RECOMENSSEM/media/catalonia.png" class="translate" id="cat" width="25" height="25" style="cursor: pointer;"/>
      &nbsp
      &nbsp
      <img src="/RECOMENSSEM/media/spain.png" class="translate" id="es"  width="25" height="25" style="cursor: pointer;"/>
      &nbsp
      &nbsp
      <img src="/RECOMENSSEM/media/unitedKingdom.png" class="translate" id="eng"  width="25" height="25" style="cursor: pointer;"/>
      </div>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

        <?php if(isset($_SESSION['user'])){?>
          <?php if(isset($_SESSION['admin'])) { ?>
            <a class="dropdown-item lang" key="GestionUser" href="/RECOMENSSEM/PAGINAS/GESTION_USUARIOS/gestionUsuarios.php" id="gestionUsuarios" >Gestionar usuarios</a>
          <?php }?>
            <a class="dropdown-item lang" key="CerrarSesion" href="/RECOMENSSEM/PAGINAS/LOGOUT/logout.php" id="cerrarSesion" >Cerrar sesion</a>

          <?php
          }else{?>
              <a class="dropdown-item lang" key="IniciarSesion" href="/RECOMENSSEM/PAGINAS/INICIAR_SESION/iniciarSesion.php" id="iniciarSesion">Iniciar sesion</a>
              <a class="dropdown-item lang" key="Registrarse" href="/RECOMENSSEM/PAGINAS/REGISTRO/registro.php" id="Registrarse">Registrarse</a><?php } ?>
          
        </div>
      </li>
    </ul>
  </div>
</nav>