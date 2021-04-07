<?php
$servername = "localhost";
$database = "bd_landing";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("fallo: " . mysqli_connect_error());
}



$nombre = $_GET["nombre"];
$numero = $_GET["numero"];
$mail = $_GET["mail"];
$ciudad = $_GET["ciudad"];
$mascota = $_GET["mascota"];
$comenta = $_GET["comenta"];

$sql = "INSERT INTO `leads` (`id`, `nombre`, `numero`, `mail`, `ciudad`, `mascota`, `comenta`, `fecha`) VALUES (NULL, '".$nombre."', '".$numero."', '".$mail."', '".$ciudad."', '".$mascota."', '".$comenta."', current_timestamp());";

if ($conn->query($sql) === TRUE) {
    echo "completo";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

mysqli_close($conn);

header("Location: ../index.html");

?>