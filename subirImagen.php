<?php
function subirImagen()
{
    $NuevoNombre = $_POST["nombre"];

    if ($_FILES["imagen"]["error"] <= 0) {
        $NombreImagen = $_FILES["imagen"]["name"];
        $NombreImagenCambiada = cambiarNombre($NombreImagen, $NuevoNombre);
        $destination = "recursos/img/" . $NombreImagenCambiada;

        move_uploaded_file($_FILES["imagen"]["tmp_name"],
            $destination);
        header("Location:formulario.php?imagen=" . $destination);
        return $destination;
        exit();
    }
    header("Location: indexAdm.php");
    exit();
};


function cambiarNombre($NombreImagen,$NuevoNombre){
    $imagenTipoArchivo = strtolower(pathinfo($NombreImagen,PATHINFO_EXTENSION));

    switch ($imagenTipoArchivo){
        case "jpg" :
            return $NombreImagenCambiado = $NuevoNombre . ".jpg";
            break;
        case "png" :
            return $NombreImagenCambiado = $NuevoNombre . ".png";
            break;

        case "jpeg" :
            return $NombreImagenCambiado = $NuevoNombre . ".jpeg";
            break;

        case "gif" :
            return $NombreImagenCambiado = $NuevoNombre . ".gif";
            break;

        default:
            header("Location: indexAdm.php");
    }
}


function cambiarImagen()
{
    $NuevoNombre = $_POST["nombre"];

    if ($_FILES["imagen"]["error"] <= 0) {
        $NombreImagen = $_FILES["imagen"]["name"];
        $NombreImagenCambiada = cambiarNombre($NombreImagen, $NuevoNombre);
        $destination = "recursos/img/" . $NombreImagenCambiada;

        move_uploaded_file($_FILES["imagen"]["tmp_name"],
            $destination);
        header("Location:formulario.php?imagen=" . $destination);
        return $destination;
        exit();
    }
    return null;
}




?>