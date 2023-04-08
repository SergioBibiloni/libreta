<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos22.css">
    <title>INDEX</title>
</head>
<br><br>

<body>

    <section class="container">

        <section class="formulario">
            <h1 class="textosextra">Agenda de Contactos || AGREGAR CONTACTO</h1>
            <br>
            <?php
            // Establecer la conexión a la base de datos
            $dsn = 'mysql:host=localhost;dbname=libreta';
            $usuario = 'root';
            $contraseña = '';
            $opciones = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

            try {
                $conexion = new PDO($dsn, $usuario, $contraseña, $opciones);
            } catch (PDOException $e) {
                echo 'Error al conectar con la base de datos: ' . $e->getMessage();
            }

            // Obtener los datos del formulario
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];
            $movil = $_POST['movil'];
            $correo = $_POST['correo'];

            // Verificar si el nombre contiene números
            if (preg_match('/\d/', $nombre)) {
                echo "El nombre no puede contener números.";
                echo "<button onclick='window.history.back()'>Volver</button>";
                exit();
            }

            // Verificar si el nombre contiene números
            if (preg_match('/\d/', $apellido)) {
                echo "El apellido no puede contener números.";
                echo "<button onclick='window.history.back()'>Volver</button>";
                exit();
            }


            // Preparar la consulta SQL para agregar un nuevo contacto
            $sql = "INSERT INTO contactos (nombre, apellido, direccion, telefono, movil, correo) VALUES (:nombre, :apellido, :direccion, :telefono, :movil, :correo)";
            $consulta = $conexion->prepare($sql);

            // Asignar los valores de los parámetros y ejecutar la consulta
            $consulta->bindParam(':nombre', $nombre);
            $consulta->bindParam(':apellido', $apellido);
            $consulta->bindParam(':direccion', $direccion);
            $consulta->bindParam(':telefono', $telefono);
            $consulta->bindParam(':movil', $movil);
            $consulta->bindParam(':correo', $correo);

            if ($consulta->execute()) {
                echo "El contacto se ha agregado correctamente.";
                echo "<form action='index.php'>";
                echo " <input class='botonatr' type='submit' name='enviar' value='INICIO'></input>";
                echo "</form>";
            } else {
                echo "Ha ocurrido un error al agregar el contacto.";
                echo "<button onclick='window.history.back()'></button>Volver</button>";
            }
            ?>
            <br><br>

        </section>
    </section>

</body>
<br><br>
<footer>

</footer>

</html>