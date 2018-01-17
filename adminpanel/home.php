<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['username'])){
    header("location:login.php");//jika belum login jangan lanjut
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Psikologi Jayabaya Content Management System</title>
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="cmspsikologi.php">Psikologi Jayabaya</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="home.php?page=2">Data Mahasiswa</a></li>
        <li><a href="home.php?page=3">Cek Pembayaran</a></li>
        <li><a href="home.php?page=5">Buat Berita</a></li>
      </ul>


    <!--Login session nama dan logout -->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>

      <?php echo strtoupper($_SESSION['username']);?>


      || Logout</a></li>
      </ul>

   </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<style>
body {
  font: 100%/1.6em "Helvetica Neue", HelveticaNeue, Verdana, Arial, Helvetica, sans-serif;
  margin: 0;
  padding: 0;
  color: #333;
  background-color: #fff;
}

</style>
<script>
$(document).ready( function () {
  var table = $('#example').DataTable();
} );
</script>

<br/><br/><br/>

<!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"> -->
<link href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.dataTables.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

    <link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
    <script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>

<div class="container">

<?php include "isi.php"; ?>

</div>
</body>
</html>