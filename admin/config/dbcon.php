<?php

$host = "localhost";
$username = "root";
$password = "";

$database = "citymetromovers";


/*$con = mysqli_connect("$host","$username","$password","$database");

if(!$con){
    header("Location: ../errors/dberror.php");
    die();
}*/

try{
    $con = mysqli_connect("$host","$username","$password","$database");
}
catch(Exception $e){
  header("Location: ../errors/dberror.php");
  die();
}


?>
