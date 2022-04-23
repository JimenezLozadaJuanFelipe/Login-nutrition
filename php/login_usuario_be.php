<?php

session_start();
include 'conexionbasedatos_be.php';

$usuario = $_POST['usuario'];
$contrasena = md5($_POST['contrasena']);

$validar_login = mysqli_query($conexion, " SELECT  *  FROM usuarios  WHERE usuario='$usuario'
    and contrasena = '$contrasena' ");


if (mysqli_num_rows($validar_login) > 0 ) {

    $_SESSION['usuario'] = $usuario;
    
    header("location: ../php/dashboard.php");
    exit();

}else{
    echo '
    <script>
     alert("Usuario no existe, por favor verifique los datos introducidos");
    window.location ="../index.php";
     </script>
 ';
 exit();
}

?>