<?php
ob_start();

if (($_SESSION['usuarioId'] == "") || ($_SESSION['usuarioNome'] == "")) {
	$_SESSION['security'] = "Usuáio necessita estar logado";
	header("Location: index.php");
}
?>
