<?php
//devuelve los datos en formato JSON
require_once("dbConnection.php");
$name = [];
$query = "select id_mascota, nombre, edad, enfermedades, tipo from mascota, tipo 
where mascota.id_tipo = tipo.id_tipo";

$query_result = mysqli_query($connection, $query) or die (mysqli_error());

while ($row = mysqli_fetch_assoc($query_result)) {
  $name[] = $row;
}
echo json_encode($name);
?>