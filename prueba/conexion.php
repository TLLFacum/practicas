<?php
$server="localhost";
$user= "root";
$pass="";
$db="forsembly";
    $conexion=mysqli_connect($server,$user,$pass,$db) or DIE("ERROR" .mysqli_connect_error());
//esta es la conexion a nuestra base de datos que vamos a usar en los demas archivos
?>