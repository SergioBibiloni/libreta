<?php
session_start();

if (isset($_POST['iniciar_sesion'])) {
	header('Location: index.php');
	exit;
}
?>
