<?php

/* ----------------- CONEXION CON SQL ----------------------------*/

include_once ("conexion.php");

/* ------------ AGREGAR CAMPOS -----------------*/
include_once ("subirImagen.php");
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $numero = $_POST["numero"];
        $tipo = $_POST["TipoPokemon"];
        $futuroDato = subirImagen();

        $sql = "INSERT INTO pokemon
        VALUES('$nombre','$descripcion','$numero','$tipo','$futuroDato')";

        $ejecutarInsertar = mysqli_query($conexion, $sql);

        if($ejecutarInsertar){
            header("Location: indexAdm.php");
        }    header("Location: indexAdm.php");;


?>