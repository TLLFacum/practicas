<?php
require("conexion.php");

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
<form action="" method="POST" >
    <!-- ingresamos el nombre de usuario -->
    <label> Nombre de usuario</label>
    <input type="text" name="usuarioU" required>
<br><br>
    <!-- ingresamos la contraseña -->
    <label>Contraseña</label>
    <input type="password" name="passU" required>
<br><br>
    <input type="submit" value= "ingresar" name="ingresar">
</div>
</form> 
</body>
</html>

<?php 
// tomamos los datos para el inicio de sesion
if (isset($_POST['ingresar'])){
$usuario=$_POST['usuarioU'];
$pass=$_POST['passU'];
$q= "SELECT COUNT(*) as contar from usuarios where user = '$usuario' and pass = '$pass' ";
$consulta= mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);
if ($array['contar']>0){
    header("location:../prueba/xd.php");
}
else{
    echo "usuario o contraseña incorrectos bro";
}


}
?>
