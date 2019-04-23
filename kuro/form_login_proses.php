<?php

	session_start();

	$username = $_POST['username'];
	$password = $_POST['pass'];

	if ($username == "admin" && $password == "qwerty")
	{
		$_SESSION['login'] = true;
		header('Location: http://localhost/kuro/TugasAuth+Bootstarp/index.php');
	}
	else if ($username == "kuro" && $password == "sepatubusuk")
	{
		$_SESSION['login'] = true;
		header('Location: http://localhost/kuro/TugasAuth+Bootstarp/index.php');
	}
	else
	{
		$_SESSION['login'] = false;
		header('Location: http://localhost/kuro/TugasAuth+Bootstarp/form_login.php? message=Username atau Password yang di inputkan salah');
		die;
	}
