<?php

include "koneksi.php";
error_reporting(0);
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");//jika belum login jangan lanjut
}

	$code=$_GET['code'];
	$id=$_GET['id'];
	$email=$_GET['email'];

	if($code=="done"){
		$sql=mysql_query("UPDATE `pembayaran` SET `status_pembayaran`='DONE' WHERE `noid`='$id'");
		$del=mysql_query("UPDATE `mahasiswa` SET `status`='Mahasiswa' WHERE `email`='$email'");

		if($del){
			echo "<script> alert ('Status Pembayaran DONE'); </script>";
			echo "<meta http-equiv='refresh' content='0; url=home.php?page=3'>";
		}else{
			echo "<script> alert ('Gagal'); </script>";
			echo "<meta http-equiv='refresh' content='0; url=home.php?page=3'>";
		}
	}else{
		$sql=mysql_query("DELETE FROM `pembayaran` WHERE `noid`='$id'");
		$del=mysql_query("DELETE FROM `mahasiswa` WHERE `email`='$email'");
		if($del){
			echo "<script> alert ('Data Berhasil Dihapus'); </script>";
			echo "<meta http-equiv='refresh' content='0; url=home.php?page=3'>";
		}else{
			echo "<script> alert ('Data Gagal Dihapus'); </script>";
			echo "<meta http-equiv='refresh' content='0; url=home.php?page=3'>";
		}
	}

?>