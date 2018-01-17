<?php
include "koneksi.php";
$page=$_GET['page'];

switch($page)
{
	case "1";
	break;

	case "2";
	include "datamahasiswa.php";
	break;

	case "3";
	include "cekpembayaran.php";
	break;

	case "4";
	include "proses_pembayaran.php";
	break;

	case "5";
	include "berita.php";
	break;

	case "6";
	include "tambah_berita.php";
	break;

	case "7";
	include "del_berita.php";
	break;
}
?>