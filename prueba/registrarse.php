<?php
require_once("conexion.php");
// require_once("verificarContraseña.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Forsembly</title>
</head>
<body>
<form action="" method="POST">
    <!-- ingresamos el nombre del propietario de la cuenta -->
    <label>Nombre(en lo posible del propietario de quien va a usar la cuenta)</label>
    <input type="text" name="nombre" required>
    <br><br>
    <!-- ingresamos el apellido del mismo -->
    <label>Apellido del mismo</label>
    <input type="text" name="apellido" required>
    <br><br>
    <!-- ingresamos usuario -->
    <label>Usuario de la cuenta</label>
    <input type="text" name="user" required>
    <br><br>
    <!-- ingresamos el correo del propietario de la cuenta-->
    <label> Correo </label>
    <input type="text"  name="email" required>
    <br><br>
    <!-- ingresamos el tipo de empresa-->
    <label>tipo de empresa u organizacion para la que esta creando la cuenta</label>
    <select name="organizacion">
        <option value="empresa">empresa</option>
        <option value="PyMe">PyMe</option>
        <option value="escuela">trabajo</option>
        <option value="medicina">centro medico,hospital ,etc</option>
        <option value="centro cultural">centro cultural</option>
        <option value="otros">otros</option>
    </select>
    <br><br>
    <!-- ingresamos la empresa / organizacion de la empresa-->
    <label>empresa donde trabaja o es dueño</label>
    <input type="text" name="nombreOrg" required>
    <br><br>
    <!-- lugar donde reside la empresa-->
    <label>lugar de la empresa(opcional)</label>
    <input type="text" name="lugarOrg" >
    <br><br>
    <!-- ingresamos la contraseña -->
    <label>Password</label>
    <input type="password" name="password" required>
    <br><br>
    <label>confirma tu ontraseña</label>
    <input type="password" name="confirmPassword" required>
    <br><br>
    <?php

    ?>
    <input type="submit" value="Registrar" name="Registrar">
    </form>
</body>
</html>
<?php 
//ahora vamos a guardar los datos del usuario 
if(isset($_POST['Registrar'])){
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$user=$_POST['user'];
$email=$_POST['email'];
$tipo=$_POST['organizacion'];
$nombreOrg=$_POST['nombreOrg'];
$lugarOrg=$_POST['lugarOrg'];
$password=$_POST['password'];
$Cpassword=$_POST['confirmPassword'];


$sql="INSERT INTO usuarios (nombre , apellido , user , email ,organizacion ,nombreOrg, lugarOrg , pass )VALUES ('$nombre','$apellido','$user','$email','$tipo','$nombreOrg','$lugarOrg','$password')";
$insertar= mysqli_query($conexion,$sql)? print ("ok , usuario agregado"): print ("error al cargar");
header('location:../prueba/login.php');
}
?>