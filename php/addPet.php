<?php
require_once("dbConnection.php");

$age = $_POST["age"];
$name = $_POST["name"];
$type = $_POST["type"];
$sickness = $_POST["sickness"];

if($sickness == null){
   $sickness = "Mascota sana";
}

$query = 
'insert into mascota (id_tipo, nombre, edad, enfermedades) 
values ('.$type.',"'.$name.'",'.$age.',"'.$sickness.'")';

if (mysqli_query($connection, $query)){
  header("Location: index.php?page=success");
}else{
  die ("Error");
}
?>