<?php
	header('Location: index.php');
	session_start();
	unset($_SESSION['nome']);
	unset($_SESSION['senha']);
?>