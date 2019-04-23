<?php 

include 'config.php';

$Nama = $_POST['Nama'];
$Email = $_POST['Email'];
$Pertanyaan = $_POST['Pertanyaan'];
$Created = date('Y-m-d h:i');

$sql = "INSERT INTO kontak (nama,email,pertanyaan,created) VALUES ('$Nama','$Email','$Pertanyaan','$Created');";

if ($conn->query($sql)===true)
{
	echo "Data Berhasil Di Simpan";
}
else
{
	echo "Error Dengan Pesan :".$sql."<br>".$conn->error;
}

$conn->close();

?>