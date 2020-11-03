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
    include_once ("headerAdim.php");
    ?>
</header>

<!-- MAIN -->

<?php
include_once ("conexion.php");
$id=$_GET["id"];
$pokemon = "SELECT * FROM pokemon WHERE número='$id'";
?>

<main>

    <div class="section card grey lighten-5">
        <form action="modificarSQL.php"  method="post" class="container" enctype="multipart/form-data">
            <br>
            <h5 class="center-align grey-text"> Modificar pokemon</h5>
            <br> <br>

            <?php
            $resultado= mysqli_query($conexion,$pokemon);
            while($row=mysqli_fetch_assoc($resultado)){
            ?>
            <!-- Nombre -->
            <label for="icon_prefix2">Ingrese nombre del pokemon</label>
            <input class="file-path validate" type="text" name="nombre" value="<?php echo $row['Nombre']?>">
            <!-- Numero -->
            <!--<label for="icon_prefix2">Ingrese número del pokemon</label>-->
            <input class="file-path validate" type="hidden" name="numero" value="<?php echo $row['número']?>">
            <!-- Descripcion -->
            <i class="material-icons prefix">mode_edit</i>
            <textarea id="icon_prefix2" name="descripcion" class="materialize-textarea" ><?php echo $row['Descripcion']?></textarea>
            <label for="icon_prefix2">Ingrese descripcion</label>
            <!-- Select -->
            <select name="TipoPokemon" class="browser-default" required>
                <option value="<?php echo $row['tipo']?>"><?php echo $row['tipo']?></option>
                <option value="Electrico">Electrico</option>
                <option value="Agua">Agua</option>
                <option value="Fuego">Fuego</option>
                <option value="Fantasmal">Fantasmal</option>
                <option value="Oscuro">Oscuro</option>
            </select>
            <!-- Nombre imagen -->
            <br><br>
            <input type="file" name="imagen"> <br>
            <br><br>
                    <button type="submit" class="waves-effect waves-light btn white-text">Enviar</button>

            <?php
            } mysqli_free_result($resultado);
            ?>
        </form>
    </div>


</main>

<footer>
</footer>

<script type="text/javascript" src="recursos/materialize/js/materialize.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        M.AutoInit();
    });

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.autocomplete');
        var instances = M.Autocomplete.init(elems, options);
    });

</script>
</body>
</html>