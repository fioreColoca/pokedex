<?php
include_once ("conexion.php");
    $id=$_GET["id"];
    $sql = "DELETE
        FROM pokemon
        WHERE número='$id'";
    $ejecutarInsertar = mysqli_query($conexion, $sql);

    if ($ejecutarInsertar){
        header("Location: indexAdm.php");
    } else{
        header("Location: indexAdm.php");
    }

?>

