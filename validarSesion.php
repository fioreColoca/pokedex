<?php
session_start();
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$_SESSION['Usuario'] = $usuario;
$_SESSION['Clave'] = $clave;
header("Location: indexAdm.php");
?>