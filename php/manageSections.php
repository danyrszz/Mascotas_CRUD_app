<?php

if(!isset($_GET['page'])){
  $page = null; 
}else{
  $page= $_GET['page'];
}

switch($page){

  case "success" :
    include ("views/updatedCorrectly.html");
    break;

  case "addPet" :
    include ("addPet.php");
    break;
  
  case "registerPet" :
    include ("views/form.html");
    break;

  case "listPets" :
    include ("views/petList.html");
    break;

  case "delete" :
    include("deletePet.php");
    break;

  default :
    include ("views/form.html");
    break;
}

?>