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

<main>
    <?php
    include_once ("conexion.php");
    $id=$_GET["id"];
    $pokemon = "SELECT Nombre,Descripcion,imagen FROM pokemon WHERE número='$id'";
    $resultado= mysqli_query($conexion,$pokemon);

    ?>
<br>
  <div class="container ">
      <div class="card blue-grey lighten-5">
          <br>
          <?php             while($row=mysqli_fetch_assoc($resultado)){ ?>
          <h4 class="center-align"> <?php echo $row['Nombre']?> </h4>
            <div class="container row">
                <div class="col l4 m12  s12 center-align">
                <img src="<?php echo $row['imagen'] ?>" height="200px", width="200px">
                </div>
                <div class="col l8 m12 s12">
                    <br>
                    <p> <?php echo $row['Descripcion']?></p>
                </div>
          <br>
          <br>
            </div>

          <?php } mysqli_free_result($resultado); ?>
      </div>

  </div>
</main>

<footer>
</footer>

<?php

/* include_once ("conexionSql.php");*/


?>


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