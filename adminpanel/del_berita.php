<?php

include "koneksi.php";
$id=$_GET['id'];

$del=mysql_query("DELETE FROM `berita` WHERE noid='$id'");

	if ($del){ 
	echo "<script> alert ('Data telah dihapus'); </script>";
	echo "<meta http-equiv='refresh' content='0; url=home.php?page=5'>";
	}else{
	echo "<script> alert ('Data gagal dihapus'); </script>";
	echo "<meta http-equiv='refresh' content='0; url=home.php?page=5'>";
	}




?>