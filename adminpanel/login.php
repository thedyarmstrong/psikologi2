<?php
error_reporting(0);
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$op = $_GET['op'];

if($op=="in"){
    $sql = mysql_query("SELECT * FROM adminuser WHERE username='$username' AND password='$password'");

        if(mysql_num_rows($sql)==1){//jika berhasil akan bernilai 1
            $qry = mysql_fetch_array($sql);
            $_SESSION['username'] = $qry['username'];

                if($qry){
                    header("location:home.php?page=1");

                }

                }else{
                ?>
<script language="JavaScript">
    alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
    document.location='index.php';
</script>
<?php
}
}else if($op=="out"){
    unset($_SESSION['username']);
    unset($_SESSION['AKSES']);
    header("location:index.php");
}
?>



<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Psikologi Jayabaya System | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="col-md-4 col-md-offset-4 form-login">

			<div class="outter-form-login">
			<div class="logo-login">
					<em class="glyphicon glyphicon-user"></em>
			</div>
					<form name="" class="inner-login" method="post" action="login.php?op=in">
					<h3 class="text-center title-login">Psikologi Jayabaya System Management</h3>
							<div class="form-group">
									<input type="text" class="form-control" id="username" name="username" placeholder="Username">
							</div>

							<div class="form-group">
									<input type="password" class="form-control" id="password" name="password" placeholder="Password">
							</div>

							<input type="submit" name="submit" class="btn btn-block btn-custom-green" value="LOGIN" />

</div>
</form>
</div>
</div>

</body>
</html>
