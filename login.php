<?php
error_reporting(0);
session_start();
include "koneksi.php";
$email= $_POST['email'];
$password = $_POST['password'];
$op = $_GET['op'];
	if(isset($_POST['submit'])){
		if($op=="in"){
		    $sql = mysql_query("SELECT * FROM mahasiswa WHERE email='$email' AND password='$password'");

		        if(mysql_num_rows($sql)==1){//jika berhasil akan bernilai 1
		            $qry = mysql_fetch_array($sql);
		            $_SESSION['nama'] = $qry['nama'];
		            $_SESSION['email'] = $qry['email'];

		                if($qry){
		                    header("location:home.php");

		                }

		                }else{
		                ?>
		<script language="JavaScript">
		    alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
		    document.location='index.html';
		</script>
		<?php
		}
		}else if($op=="out"){
		    unset($_SESSION['nama']);
		    unset($_SESSION['email']);

		    header("location:index.html");
		}
	}
?>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>

				<div class="signin-form profile">
					<h3 class="agileinfo_sign">Login</h3>
					<div class="login-form">
						<form action="home.php?page=2&op=in" method="POST">
							<input type="email" name="email" placeholder="E-mail" required="">
							<input type="password" name="password" placeholder="Password" required="">
							<div class="tp">
								<button type="submit" class="btn btn-success" name="submit" style="success">Sign In</button>
							</div>
						</form>
					</div>
	
					<div class="login-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
					<p><a href="#" data-toggle="modal" data-target="#myModal3"> Don't have an account?</a></p>
				</div>
			</div>
		</div>
	</div>
</div>