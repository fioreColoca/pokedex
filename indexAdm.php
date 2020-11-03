<?php
session_start();
$varsesion = $_SESSION['Usuario'];
$varsesion2 = $_SESSION['Clave'];

include_once ("conexion.php");

$consulta = "select Usuario,Clave from usuario where Usuario like '$varsesion' and  
                                                    Clave like '$varsesion2'";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    while ($row = $resultado->fetch_array()) {
        $nombre = $row['Usuario'];
        $clave = $row['Clave'];
    }
}

if($varsesion == null || $varsesion = '' || $varsesion2 == null || $varsesion2 = '' || $nombre != $varsesion || $clave != $varsesion2){
    header("Location: index.php");
}


?>


<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/css.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="recursos/materialize/css/materialize.min.css" media="screen,projection">

    <title> Pokedex </title>
</head>
<body>

<header>
    <?php
    include_once ("headerAdim.php");
    ?>
</header>
<h4 class="center-align grey-text"> Bienvenidx <?php echo $_SESSION['Usuario']?> </h4>

<br>
<div class="container center-align">
    <a href="formulario.php" class="waves-effect waves-light btn"><i class="material-icons right">add</i>Agregar pokemon</a>
</div>
<br>

<!-- MAIN -->

<br>
<main>
    <section class="container">
        <div class="row">

            <?php
            $inc =include_once("conexion.php");

            $consulta = "select * from pokemon";
            $resultado = mysqli_query($conexion, $consulta);
            if ($resultado) {
                while ($row = $resultado->fetch_array()) {
                    $nombre = $row['Nombre'];
                    $descripcion = $row['Descripcion'];
                    $numero = $row['número'];
                    $tipo = $row['tipo'];
                    $imagen = $row['imagen'];
                    ?>
                    <article class="col l4 m6 s12">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="<?php echo $imagen ?>" width="400px" height="300px">
                            </div>
                            <div class="card-content center-align teal lighten-2">
                                <h5 class="activator white-text titulo"> <?php  echo $nombre; ?><i class="material-icons right">more_vert</i></h5>
                            </div>
                            <div class="card-reveal blue-grey lighten-5">
                                <h3 class="card-title grey-text text-darken-2 titulo"><?php  echo $nombre;?><i class="material-icons right">close</i></h3>
                                <h5>Número: <?php echo $numero ?> </h5>
                                <br>
                                <div class="center-align">
                                    <img src="recursos/img/<?php echo $tipo;?>.png" width="80px" height="100px">
                                </div>
                                <br>
                                <div class="center-align">
                                    <a href="modificarFormulario.php?id=<?php echo $numero ?>" class="waves-effect waves-light btn" name="botonModificar">Modificar</a>
                                    <a href="eliminar.php?id=<?php echo $numero ?>"  class="waves-effect waves-light btn red darken-3"><i class="material-icons right">clear</i>Borrar</a>
                                </div>
                                <br>
                                <a href="PokemonInfoAdm.php?id=<?php echo $numero ?>" class="waves-effect waves-amber btn-flat amber right">Ver más</a>
                            </div>
                        </div>
                    </article>

                    <?php
                }
            } else {
                echo "esto no anda";
            }

            ?>
        </div>

    </section>


</main>

<footer>
</footer>



<script type="text/javascript" src="recursos/materialize/js/materialize.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        M.AutoInit();
    });
</script>
</body>
</html>