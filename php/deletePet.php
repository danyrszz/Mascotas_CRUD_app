<?php
include_once("dbConnection.php");
$id_mascota = $_GET["id"];
$query = "delete from mascota where id_mascota=$id_mascota";
$result = mysqli_query($connection, $query) or die (mysql_error());

if($result){
  header("Location: index.php?page=success");
}else{
  die ("Error");
}
?>