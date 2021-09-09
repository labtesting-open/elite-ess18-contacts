<?php
  SESSION_START();  
  $varSession = $_SESSION['nombre'];

  if(!isset($varSession) || $varSession = ''){
    header("Location:index.php");
  }

?>

<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="home.php">
    <img src="public/img/logoNegative.png" width="80" height="44" class="img-fluid" alt="Responsive image">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">
          <span class="fas fa-house-user"></span> Inicio <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contactos.php">
          <span class="fas fa-id-card-alt"></span> Contactos
        </a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="clubs.php">
          <span class="fas fa-layer-group"></span> Clubes
        </a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="#">
          <span class="fas fa-layer-group"></span> Categorias
        </a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="#">
          <span class="fas fa-user"></span> <?php echo $_SESSION['nombre']. ' '.$_SESSION['apellidos']; ?> 
        </a>       
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="procesos/usuarios/desvincular.php">
          <span></span>LogOut 
        </a>      
      </li>

    </ul>
    
  </div>
</nav>
