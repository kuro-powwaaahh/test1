<h1>Test  Koneksi Database</h1> <br> <br>
<p>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	//create connection
	$conn = new mysqli ($servername, $username, $password);

	//check connection
	if($conn->connect_error)
	{
		die("Koneksi gagal dengan pesan : " . $conn->connect_error);
	}

	echo "Koneksi ke database berhasil";
	 ?>
</p>
