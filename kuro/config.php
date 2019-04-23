<?php

$servername = "localhost:3306";
$username = "root";
$password = "sepatubusuk";
$database = "belajar_db";

//create connection

$conn = new mysqli ($servername, $username, $password, $database);

//check connection

if($conn->connect_error)
{
	die("Koneksi gagal dengan pesan : " . $conn->connect_error);
}


?>
