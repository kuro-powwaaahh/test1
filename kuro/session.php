<?php
	session_start();

	if(!isset($_SESSION['login']))
	{
		header('Location: form_login.php');
	}
?>
