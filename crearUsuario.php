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
    <div class="center container red-text">
    <?php
    include_once ("conexion.php");
    include_once ("funcionValidacion.php");


    $error = 0;

    if(!empty($_POST)){
        $nombreUsuario = $conexion->real_escape_string($_POST['usuario']);
        $clave = $conexion->real_escape_string($_POST['clave']);
        $clave2 = $conexion->real_escape_string($_POST['clave2']);
        $email = $conexion->real_escape_string($_POST['email']);

        if(!validarPassword($clave,$clave2)){
            echo "<h5>" . "Las contraseñas no coinciden" . "</h5>";
            $error++;
        }

        if(!nulo($nombreUsuario,$clave,$clave2,$email)){
            echo "<h5>" . "Ingrese todos los datos en los campos" . "</h5>";
            $error++;
        }

        if(!validarEmail($email)){
            echo "<h5>" . "Email no válido" . "</h5>";
            $error++;
        }

        if(nombreExiste($nombreUsuario,$conexion)){
            echo "<h5>" . "Nombre ya existente" . "</h5>";
            $error++;
        }

        if(emailExistente($email,$conexion)){
            echo "<h5>" . "email ya existente" . "</h5>";
            $error++;
        }

        if($error == 0){
            echo "ayuda";
            $nombre = $_POST["usuario"];
            $clave = $_POST["clave"];
            $email = $_POST["email"];
            $consulta = "INSERT INTO usuario VALUES('$nombre','$clave','$email')";

            $ejecutarInsertar = mysqli_query($conexion, $consulta);
            session_start();
            $_SESSION['Usuario'] = $nombre;
            $_SESSION['Clave'] = $clave;
            if($ejecutarInsertar){
                header("Location: indexAdm.php");
            } header("Location: indexAdm.php");
          }

    }

    ?>
    </div>

    <div class="section card grey lighten-5">
        <form action="crearUsuario.php"  method="post" class="container">
            <br>
            <h5 class="center-align grey-text"> Crear Usuario</h5>
            <br> <br>

            <!-- Nombre de Usuario -->
            <label for="icon_prefix2">Ingrese nombre de usuario</label>
            <input class="file-path validate" type="text" name="usuario" required>
            <!-- Contrasenia  -->
            <label for="icon_prefix2">Ingrese contraseña</label>
            <input class="file-path validate" type="password" name="clave" required>
            <!-- Contrasenia  -->
            <label for="icon_prefix2">Repita contraseña</label>
            <input class="file-path validate" type="password" name="clave2" required>
            <!-- Email  -->
            <label for="icon_prefix2">Ingrese mail</label>
            <input class="file-path validate" type="email" name="email" required>
            <br>
            <div class="center-align container">
                <button class="waves-effect waves-light btn container">Enviar</button>
            </div>
        </form>
    </div>
<div class="container center-align">

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