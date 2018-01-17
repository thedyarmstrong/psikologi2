<?php
error_reporting(0);
include "koneksi.php";
session_start();
if(!isset($_SESSION['email'])){
    header("location:index.html");//jika belum login jangan lanjut
}


if(is_array($_FILES)) {
	if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
		$email=$_SESSION['email'];
		$namafile = $_FILES['userImage']['name'];
		$sourcePath = $_FILES['userImage']['tmp_name'];
		$targetPath = "images/".$_FILES['userImage']['name'];
		if(move_uploaded_file($sourcePath,$targetPath)) {
?>
			<img src="<?php echo $targetPath; ?>" width="150px" height="150px" />
<?php
		$sql=mysql_query("UPDATE `mahasiswa` SET `img`='$namafile' WHERE `email`='$email' ");
		}
	}
}
?>