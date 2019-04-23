<?php
include 'config.php';

$id = $_GET['id'];
$nama = $_POST['Nama'];
$email = $_POST['Email'];
$pertanyaan = $_POST['Pertanyaan'];
$Updated = date('Y-m-d h:1');

$sql = "UPDATE kontak set
        Nama = '$nama',
        Email = '$email',
        pertanyaan = '$pertanyaan',
        created = '$Updated'
        WHERE id = '$id'";

if ($conn->query($sql)===true)
{
  echo "Data Berhasil Di Simpan";
  header('Location: Kontak_Daftar.php');
  die;
}
else
{
  echo"Error Dengan Pesan " . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?>
