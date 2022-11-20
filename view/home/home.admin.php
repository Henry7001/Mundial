<?php require_once HEADER?>
    <div class="container">
        <h1>Bienvenido, <?php echo $_SESSION['name']; ?>.</h1>
        <h2>Rol: Administrador</h2>
        <h3>Acciones disponibles:</h3>
        <ul>
            <li><a href="index.php?type=partidos">Manipular datos de Partidos</a></li>
        </ul>
        <h3> Si reporta un error, comuníqueselo al jefe del departamento de sistemas.</h3>
    </div>
<?php require_once FOOTER?>