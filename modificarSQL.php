<?php
include_once("conexion.php");
include_once ("subirImagen.php");

/* ------------------ FOTO -------------------- */


$nombreModificado = $_POST['nombre'];
$descripcionModificada = $_POST['descripcion'];
$id=$_POST['numero'];
$tipoMoficiado = $_POST['TipoPokemon'];
$nombre = $_POST['botonModificar'];
$futuroDato =  cambiarImagen();

if($futuroDato==null){
    $sql = "UPDATE pokemon 
        SET Nombre='$nombreModificado',Descripcion='$descripcionModificada',tipo='$tipoMoficiado'
        WHERE número='$id'";}
else {

    $sql = "UPDATE pokemon 
        SET Nombre='$nombreModificado',Descripcion='$descripcionModificada',tipo='$tipoMoficiado',imagen='$futuroDato'
        WHERE número='$id'"; }
$ejecutarInsertar = mysqli_query($conexion, $sql);

if($ejecutarInsertar){
    header("Location: indexAdm.php");
} else{
    header("Location: modificarFormulario.php");
}


?>
