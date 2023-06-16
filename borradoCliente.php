<?php
$servername = "localhost";
$database = "ticket_rocktech";
$username = "root";
$password = "";


$mysqli = new mysqli($servername, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}


$id = $_GET["id"];
$sql = "DELETE FROM ticket_cliente WHERE id_ticketCliente=$id";

if ($mysqli->query($sql) === TRUE) {
      echo "Datos Eliminadoss";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($mysqli);

header("location:requerimientosClientes.php");
?>