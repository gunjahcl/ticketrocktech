<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ROCKTECH TASK/TICKET</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="./estilos/estilos.css">
</head>
<body class="home">





<nav style="background-color: #1a1365;" class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">ROCKTECH</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="administradores.php">Administradores</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Soporte
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="requerimientosInternos.php">Requerimientos Internos</a></li>
              <li><a class="dropdown-item" style="background-color: #0a4275;" href="requerimientosClientes.php">Requerimientos Clientes</a></li>
              <li>
              </li>
              <li><a class="dropdown-item" href="requerimientos.php">Recomendaciones</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
<div class="container-fluid">
      
    <img class="" style="position: absolute; width: 1400px; height: 1000px; margin: 0px auto; top: 0px; justify-content: end; display: flex; left: 0px;" src="./imgs/fondohome.jpg" alt="">
  </div>

  <div class="container">
    <div>
      <img class="" style="display: flex; margin: 0px auto; width: 100px; justify-content: center; position: relative; margin-top: 150px;" src="./imgs/LogooRocktechblanco.png" alt="">
    </div>
  </div>
  
</div>
<div class="container-fluid">
        
 

  </div>



  <div class="caja">
  <div class="container">
   </div> 
  <div class="container">
    <h1 style="display: flex; justify-content: center; top: 100px; margin-top: 100px;">tasks</h1>
    <h5 style="display: flex; justify-content: center; top: 100px; margin-top: 10px;">requerimientos</h5>
  </div>
  
  <div  class="container">
  
    <div style="width: 190px; height: 100px; background-color: #1a1365; margin-top: -100px;" class="logo"><button type="button" class="btn btn-outline-primary">
      <a style="color: white; text-decoration: none; display: flex; margin: 0px auto; margin-top: 10px;" href="./agregarCliente.php">Requerimientos Clientes</a>
    </button>
    
    </div>

    <div style="width: 190px; height: 100px; background-color: #1a1365;" class="logo">
      <button type="button" class="btn btn-outline-primary">
        <a style="color: white; text-decoration: none; display: flex; margin: 0px auto; margin-top: 10px;" href="./agregarInterno.php">Requerimientos Internos</a>

      </button>  
        </div>
  
      
      
  </div>



        <section class="footer">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #0a4275;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <span class="me-3">Register for free</span>
          <button type="button" class="btn btn-outline-light btn-rounded">
            Sign up!
          </button>
        </p>
      </section>
      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-white" href="https://rocktechla.com/">rocktechla.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>