<?php

include_once ("conexion.php");


function nulo($nombreUsuario, $clave, $clave2, $email)
{
    if (strlen(trim($nombreUsuario)) == null|| strlen(trim($clave)) || strlen(trim($clave2))  == null || strlen(trim($email)) == null) {
        return true;
    } else {
        return false;
    }
}

function validarEmail($str)
{
    return (false !== strpos($str, "@") && false !== strpos($str, "."));
}

function validarPassword($clave, $clave2)
{
    if ($clave == $clave2) {
        return true;
    } else {
        return false;
    }
}

function nombreExiste($Usuario,$conexion){
    $consulta = "select Usuario from usuario where Usuario like UPPER('$Usuario')";
    $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {
                while ($row = $resultado->fetch_array()) {
                    $usuario = $row['Usuario'];
                    return true;
                    } return false;
            }
    }


function emailExistente($Email,$conexion){
    $consulta = "select Email from usuario where Email like UPPER('$Email')";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        while ($row = $resultado->fetch_array()) {
            $email = $row['Email'];
            return true;
        } return false;
    }
}
?>