<nav class="nav-wrapper amber darken-1">
    <a href="index.php"><img src="recursos/img/pokebola.png" class="brand-logo imgpk center" width="50" height="50"></a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <div class="left hide-on-med-and-down sidenav-trigger"> <button data-target="modalIniciar" class="waves-effect waves-light modal-trigger btn">Iniciar sesión</button></div>

</nav>
<form class="sidenav ingresarMovil" id="mobile-demo" action="validarSesion.php" method="post">
    <input placeholder="Usuario" type="text" name="usuario" class="validate">
    <input placeholder="Contraseña" type="password" name="clave" class="validate">

    <div class="center-align">
        <button class="waves-effect waves-light btn">Ingresar</button>
    </div>
    <br>
    <br>
    <div class="center-align container">
        <a href="crearUsuario.php"> Crear usuario</a>
    </div>
    <div class="center-align">
        <img src="recursos/img/pikachuSaludandoo.gif" width="210" height="170" class="imgPikachu">
    </div>
</form>

<form class="modal blue-grey lighten-5" id="modalIniciar" action="validarSesion.php" method="post">
    <br>
    <br>
    <div class="container">
    <input placeholder="Usuario" type="text" name="usuario" class="validate">
    <input placeholder="Contraseña" type="password" name="clave" class="validate">

    </div>
    <div class="center-align">
        <button class="waves-effect waves-light btn">Ingresar</button>
    </div>
    <br>
    <div class="center-align container">
        <a href="crearUsuario.php"> Crear usuario</a>
    </div>
    <br>

    <div class="center-align">
        <img src="recursos/img/Pikachu.png" width="170" height="170" class="center">
    </div>
</form>

<nav>
    <div class="nav-wrapper amber darken-1">
        <form method="post" action="buscarSql.php">
            <div class="input-field">
                <input  id="search" type="search" required name="busqueda">
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
            </div>
        </form>
    </div>
</nav>




<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems);
    });
</script>