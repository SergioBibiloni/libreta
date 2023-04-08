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
            <h1 class="textosextra">Agenda de Contactos || BUSCAR CONTACTO</h1>
            <br>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Obtener el correo del formulario
                $correo = $_POST['correo'];

                include 'conexion.php';
                // Instanciamos un objeto Conexion (PDO)
                $pdo = new Conexion();
                // Preparar la sentencia SQL para buscar el contacto
                $stmt = $pdo->prepare('SELECT * FROM contactos WHERE correo = :correo');
                $stmt->execute(['correo' => $correo]);

                // Obtener el resultado de la búsqueda
                $contacto = $stmt->fetch(PDO::FETCH_ASSOC);

                // Comprobar si se ha encontrado el contacto
                if (!$contacto) {
                    echo 'No se ha encontrado ningún contacto con ese correo';
                    echo '<br>';
                    echo "<button onclick='window.history.back()'>Volver</button>";
                } else {
                    // Preparar la sentencia SQL para eliminar el contacto
                    $stmt = $pdo->prepare('DELETE FROM contactos WHERE correo = :correo');
                    $stmt->execute(['correo' => $correo]);
                    echo 'El contacto ha sido eliminado correctamente';
                    echo "<br>";
                    echo "<form action='index.php'>";
                    echo " <input  type='submit' name='enviar' value='INICIO'></input>";
                    echo "</form>";
                }
            }
            ?>

        </section>
    </section>

</body>
<br><br>
<footer>

</footer>

</html>