<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="GET">
<label> ingresa cantidad de campos de datos</label>
<input type="number" name="cantidad" required> 
<input class="boton" type="submit" value="generar" name="generar">
</form>    
</body>
</html>
<?php

if (isset($_GET['generar'])){
    // print_r($_GET);
$cantidad=$_GET['cantidad'];
$i=0;
echo '
    <form action="" method="POST">
    
';
while ($i<$cantidad){
$i++;
echo '<div>
<label> ingresa el tipo de input</label>
<select name="input'.$i.'">
        <option value="text">texto</option>
        <option value="password">contraseña</option>
        <option value="url">url</option>
    </select>
</div>';


}
echo ' <input class="boton" type="submit" value="crear" name="crear">
        </form>';
if (isset($_POST['crear'])){
$tipo=$_POST['input'.$i];
print_r($_POST);
foreach ($_POST as $input => $tipo){
    if ($input=="crear"){
    }
    else {
    echo '<input type="'.$tipo.'">';}
}
}
}


?>