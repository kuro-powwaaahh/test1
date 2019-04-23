<?php

include 'config.php';
$sql = "DELETE FROM kontak WHERE id=". $_GET['id'];
$result = $conn->query($sql);
echo "Data Berhasil Di Hapus";

 ?>
