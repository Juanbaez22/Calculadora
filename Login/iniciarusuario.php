<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Diseñoindex.css">
    <title>validar</title>
</head>
</html>

<?php

include('db.php');

$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];


$consulta = "SELECT* FROM Personal where usuario = '$USUARIO' and password ='$PASSWORD' ";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:TipoCalculadora/TipoCalculadora.php");

}else{
    include("login.php");
    ?>
  
  <STYLE >
<!--
.test{position: absolute; top: 485px; left: 570px; color: black; }
-->

</STYLE>

<div class=test style="color: #3742fa;">
ERROR DE AUTENTIFICACION

</div>
 
  <?php
    
}
mysqli_free_result($resultado);
mysqli_close($conexion);


?>