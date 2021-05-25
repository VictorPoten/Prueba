<?php

$user="root";
$pass="";
$host="localhost";

$connection= mysqli_connect($host, $user, $pass);

$email= $_POST["email"];
$contraseña= $_POST["contraseña"];

if(!$connection){
    echo"error" . mysql_error();
}

$datab= "testing";
$db=mysqli_select_db($connection,$datab);

$instruccion_SQL="INSERT INTO prueba (`email`, `contraseña`) VALUES ('$email','$contraseña')";

$resultado=mysqli_query($connection,$instruccion_SQL);
?>