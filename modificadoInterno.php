<?php

$servername = "localhost";
$database = "ticket_rocktech";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

    // Acceder a las variables enviadas a través del método POST
    $id=filter_input(INPUT_POST,"id", FILTER_VALIDATE_INT);
    $nombre = filter_input(INPUT_POST,"nombre", FILTER_SANITIZE_STRING);
    $apellido = filter_input(INPUT_POST,"apellido", FILTER_SANITIZE_STRING);
    $correo = filter_input(INPUT_POST,"correo", FILTER_SANITIZE_STRING);
    $departamento = filter_input(INPUT_POST,"departamento", FILTER_SANITIZE_STRING);
    $requerimiento = filter_input(INPUT_POST,"requerimiento", FILTER_SANITIZE_STRING);
    $descripcion = filter_input(INPUT_POST,"descripcion", FILTER_SANITIZE_STRING);
    $prioridad = filter_input(INPUT_POST,"prioridad", FILTER_SANITIZE_STRING);
    $estado = filter_input(INPUT_POST,"estado", FILTER_SANITIZE_STRING);
    
    // Realizar alguna acción con las variables 
    
$sql = "UPDATE ticket_personal SET nombre='$nombre',apellido='$apellido',correo='$correo',departamento='$departamento',requerimiento='$requerimiento',descripcion='$descripcion',prioridad='$prioridad',estado='$estado' where id_ticketPersonal='$id'";

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header("location:requerimientosInternos.php");

?>
