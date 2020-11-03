<!doctype html>
<html lang="en">
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
    include_once ("header.php");
    ?>
</header>


<!-- MAIN -->

<br>

<main>

    <section class="container">
        <div class="row">

        <?php
    $inc =include_once("conexion.php");
    $busqueda = $_POST["busqueda"];

    if($busqueda == " "){
        $consulta = "select * from pokemon";
    } else {
        $consulta = "select * from pokemon where Nombre like '$busqueda%' or  tipo like '%$busqueda%' or  número like '$busqueda%' ";
    }
            $resultado = mysqli_query($conexion, $consulta);
        $nombre= null;
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
                                <br>
                                <a href="PokemonInformacion.php?id=<?php echo $numero ?>" class="waves-effect waves-amber btn-flat amber right">Ver más</a>
                            </div>
                        </div>
                    </article>

                    <?php
                }

                } else {
                echo "esto no anda";
            }

            if($nombre == null){
                ?>
                <div class="container red darken-3 white-text">
                    <br>
                <h5 class="center"> <?php echo "Pokemon no encontrado"?> </h5>
                    <br>
                </div>
                <br>
                <br>
                <?php
                $consulta2 = "select * from pokemon";
                $resultado = mysqli_query($conexion, $consulta2);
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
                                    <br>
                                    <a href="PokemonInformacion.php?id=<?php echo $numero ?>" class="waves-effect waves-amber btn-flat amber right">Ver más</a>
                                </div>
                            </div>
                        </article>

                        <?php
                    }

                } else {
                    echo "esto no anda";
                }
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