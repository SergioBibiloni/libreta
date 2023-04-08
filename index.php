<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Agenda de Contactos</title>
    <link rel="stylesheet" href="./css/estilos1.css">
</head>

<body></body>
<section class="fecha">
<?php
session_start();

// Comprobar si la variable de sesión de fecha y hora existe
if (!isset($_SESSION['fecha_hora_acceso'])) {
    // Si no existe, establecer la variable de sesión con la fecha y hora actual
    $_SESSION['fecha_hora_acceso'] = date('Y-m-d H:i:s');
}

// Mostrar la fecha y hora de acceso
echo 'Fecha y hora de acceso: ' . $_SESSION['fecha_hora_acceso'];

if (isset($_GET['logout'])) {
    // Cerrar sesión
    session_destroy();
    // Redirigir al inicio
    header("Location: portada.html");
    exit;
}
?>
</section>
    <h1>Agenda de Contactos</h1>

    <form method="POST" action="agregar.php">
        <button type="submit" name="accion" value="agregar">Agregar Contacto</button>
    </form>
    <form method="POST" action="buscar.php">
        <button type="submit" name="accion" value="agregar">Buscar Contacto</button>
    </form>
    <form method="POST" action="eliminar.php">
        <button type="submit" name="accion" value="agregar">Eliminar Contacto</button>
    </form>
    <form method="POST" action="#">
        <button type="submit" name="accion" value="agregar">Editar Contacto</button>
    </form>

</body>

<!-- hora y fecha de acceso-->

<br>
<button class="botoncerrar">
<a class="cerrarsesion" href="?logout=1">Cerrar sesión</a>
</button>
    
</html>



