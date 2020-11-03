
<nav class="nav-wrapper amber headerPrimero darken-1">
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <a href="indexAdm.php"><img src="recursos/img/pokebola.png" class="brand-logo imgpk center" width="50" height="50"></a>
    <form action="cerrarSesion.php">
        <div class="left hide-on-med-and-down sidenav-trigger"> <button data-target="cerrarSesion" class="waves-effect deep-orange darken-3 modal-trigger btn">Cerrar sesión</button></div>
    </form>
</nav>
<form class="sidenav ingresarMovil" id="mobile-demo" action="cerrarSesion.php">
    <h5 class="center"> <?php echo $_SESSION['Usuario']?> , ¿Deseas cerrar sesión? </h5>
    <br>
    <div class="center-align">
        <button class="waves-effect deep-orange darken-3 btn">Cerrar sesión</button>
    </div>
    <div class="center-align">
        <img src="recursos/img/pikachuSaludandoo.gif" width="210" height="170" class="imgPikachu">
    </div>
</form>

<nav>
    <div class="nav-wrapper amber darken-1">
        <form method="post" action="buscarAdm.php">
            <div class="input-field">
                <input  id="search" type="search" required name="busqueda">
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
            </div>
        </form>
    </div>
</nav>
<br>

