<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Agenda de Contactos</title>
    <link rel="stylesheet" href="./css/estilos2.css">
</head>

<body>
    <h1>Agenda de Contactos || AGREGAR CONTACTO</h1>

    <form method="POST" action="uso.php">
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" maxlength="50" required>
        <br><br>
        <label for="apellido">Apellido:</label><br>
        <input type="text" name="apellido" id="apellido" maxlength="50">
        <br><br>
        <label for="direccion">Dirección:</label><br>
        <input type="text" name="direccion" id="direccion" maxlength="100">
        <br><br>
        <label for="telefono">Teléfono:</label><br>
        <input type="number" name="telefono" id="telefono" maxlength="20">
        <br><br>
        <label for="movil">Móvil:</label><br>
        <input type="number" name="movil" id="movil" maxlength="20">
        <br><br>
        <label for="correo">Correo:</label><br>
        <input type="email" name="correo" id="correo" maxlength="30" required>
        <br><br>
        <button type="submit" name="accion" value="agregar">Agregar Contacto</button>
    </form>
    <form action='index.php'>
        <input class='botonatr' type='submit' name='enviar' value='INICIO'></input>
    </form>
</body>

</html>