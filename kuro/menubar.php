<?php
$page = (isset($_GET['halaman']))? $_GET['halaman'] : '';

switch($page){
  case 'beranda':
  include "Berhasil.php";
  break;

  case 'profilku':
  include "Profil.php";
  break;

  case 'kontak':
  include "Kontak.php";
  break;

	case 'daftar':
  include "Kontak_Daftar.php";
  break;

	case 'multimedia':
  include "Multimedia.php";
  break;

	case 'koneksi':
  include "Test_Koneksi.php";
  break;

	case 'logout':
  include "form_login.php";
  break;

  case 'delete':
  include "Kontak_Delete.php";
  break;

  case 'edit':
  include "Kontak_Edit.php";
  break;

  default:
	  include "Berhasil.php";
}
?>
