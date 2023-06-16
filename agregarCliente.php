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
<body>





<nav style="background-color: #1a1365;" class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ROCKTECH</a>
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
              <li><a class="dropdown-item" href="requerimientosClientes.php">Requerimientos Clientes</a></li>
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
    
  <img style="display: flex; justify-content: center; top: 100px; margin-top: 60px;" class="logo" src="imgs\rocktech.jpg" alt="">  

  </div>



  <div class="caja">
  <div class="container">
   </div> 
  <div class="container">
    <h1 style="display: flex; justify-content: center; top: 100px; margin-top: 100px;">Tasks</h1>
    <h5 style="display: flex; justify-content: center; top: 100px; margin-top: 10px;">Agregar Requerimiento Cliente</h5>
  </div>
  
  <div  class="container">
    <form action="agregadoTicket.php" method="post">

        <div style="position: relative; justify-content: center; margin: 0px auto; align-items: center;" class="col-md-4">
          <label for="validationServer01" name="nombre" id="nombre" class="form-label">Nombre</label>
          <input type="text" name="nombre" id="nombre" class="form-control " id="validationServer01" placeholder="Mark" required>
        </div>
        
        <div style="position: relative; justify-content: center; margin: 0px auto; align-items: center;" class="col-md-4">
          <label for="validationServer02" id="apellido" name="apellido" class="form-label">Apellido</label>
          <input type="text" id="apellido" name="apellido" class="form-control" id="validationServer02" placeholder="Otto" required>
          <div class="valid-feedback">
          
          </div>
        </div>
        
        <div style="position: relative; justify-content: center; margin: 0px auto; align-items: center;" class="col-md-4">
          <label for="validationServerUsername" name="correo" id="correo" class="form-label">Username</label>
          <div style="position: relative; justify-content: center; margin: 0px auto; align-items: center;" class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend3">@</span>
            <input type="text" name="correo" id="correo" class="form-control" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
              
            </div>
          </div>
        </div>
        
   
        
        <div style="position: relative; justify-content: center; margin: 0px auto; align-items: center;" class="col-md-3">
          <label for="validationServer04" class="form-label"></label>
          <select class="form-select " name="departamento" id="departamento" aria-describedby="validationServer04Feedback" required>
            <option selected disabled value="">Departamento</option>
            <option>Recursos Humanos</option>
            <option>Comercial</option>
            <option>Operaciones</option>
            <option>Ingenieria</option>
            <option>Informatica</option>
            <option>Adquisiciones</option>
          </select>
          <div id="validationServer04Feedback" class="invalid-feedback">
          </div>
        </div>
        
        
          <div style="position: relative; justify-content: center; margin: 0px auto; align-items: center;margin-top: 60px;" class="col-md-4">
          <label for="validationServer02" id="requerimiento" name="requerimiento" class="form-label">Requerimiento</label>
          <input type="text" name="requerimiento" id="requerimiento"class="form-control" id="validationServer02" placeholder="Otto" required>
          <div class="valid-feedback">
               </div>
          </div>
      
        <div style="position: relative; justify-content: center; margin-top: 80px;" class="col-12">
          <textarea class="col" style="display: flex; justify-content: center; margin-top: 40px; width: 100%;" name="descripcion" placeholder="Descripción"></textarea>
          
          </div>
        
        <div style="position: relative; justify-content: center; margin: 0px auto; align-items: center;" class="col-md-3">
          <label for="validationServer04" class="form-label"></label>
          <select class="form-select " name="prioridad" id="prioridad" aria-describedby="validationServer04Feedback" required>
            <option selected disabled value="">Prioridad</option>
            <option>Baja</option>
            <option>Media</option>
            <option>Alta</option>
            <option>Urgente</option>
          </select>
          
          <div id="validationServer04Feedback" class="invalid-feedback">
              
 
          </div>
         
        </div>
         <input class="btn btn-primary" style="display: flex; margin: 0px auto; margin-top:70px" type="submit" value="Enviar">      
      </form>
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