<?php

$servername = "localhost";
$database = "ticket_rocktech";
$username = "root";
$password = "";

$mysqli = new mysqli($servername, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM ticket_personal";
$resultado = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="./estilos/estilos.css">
    <title>Requerimientos Internos</title>
</head>
<body>
  
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
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
              <li><a class="dropdown-item" href="requermientosClientes.php">Requerimientos Clientes</a></li>
              <li>
              </li>
              <li><a class="dropdown-item" href="#">Recomendaciones</a></li>
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


<div class="container">
  <h1 style="display: flex; position: relative; margin-top: 100px; justify-content: center;" id="requerimientosinternos">Requerimientos Internos</h1>
</div>

    <div class="container" style="display:flex;max-width: 100%">
  
    <table style="display:flex; margin-top: 50px" class="table table-dark table-striped" border="1" cellspacing="0" align="center">
        <tr>
            <th scope="col" style="width: 100px">ID Ticket</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Correo</th>
            <th scope="col">Departamento</th>
            <th scope="col" style="width: 600px">Requerimiento</th>
            <th scope="col" style="width: 600px">Descripcion</th>
            <th scope="col">Prioridad</th>
            <th scope="col">Estado</th>
            <th scope="col" style="width: 130px">Fecha Inicio</th>
            <th scope="col" style="width: 130px">Fecha Final</th>
            <th scope="col">Modificar</th>
            <th scope="col">Borrar</th>
            <!-- Agrega más encabezados de columnas según tus necesidades -->
        </tr>

        <?php while ($fila = $resultado->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $fila['id_ticketPersonal']; ?></td>
                <td><?php echo $fila['nombre']; ?></td>
                <td><?php echo $fila['apellido']; ?></td>
                <td><?php echo $fila['correo']; ?></td>
                <td><?php echo $fila['departamento']; ?></td>
                <td><?php echo $fila['requerimiento']; ?></td>
                <td><?php echo $fila['descripcion']; ?></td>
                <td><?php echo $fila['prioridad']; ?></td>
                <td><?php echo $fila['estado']; ?></td>
                <td><?php echo $fila['fecha_inicio']; ?></td>
                <td><?php echo $fila['fecha_termino']; ?></td>
                <td><a onclick="return confirm('Desea Modificar este requerimiento ?')" title="Modificar Producto" href="modificarInterno.php?id=<?=$fila["id_ticketPersonal"]?>"><h3><img width="50" height="50" src="imgs/modificar.png"/></h3></a></td>
                <td><a onclick="return confirm('Desea Borrar este requerimiento ?')" title="Borrar Producto" href="borrarInterno.php?id=<?=$fila["id_ticketPersonal"]?>"><h3><img width="50" height="50" src="imgs/eliminar.png"/></h3></a></td>
                
                <!-- Agrega más celdas de datos según tus necesidades -->
            </tr>
        <?php } ?>

    </table>
    
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
<?php
$mysqli->close();
?>
