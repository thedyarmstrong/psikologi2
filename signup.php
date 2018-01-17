<?php
if (isset($_POST['submit']))
{
	include "koneksi.php";
	error_reporting(0);
  $email=$_POST['email'];
  $password=$_POST['password'];
	$nama=ucwords($_POST['nama']);
	$tanggal_lahir=$_POST['tanggal_lahir'];
  $no_telp=$_POST['no_telp'];
	$status=$_POST['status'];
	if (!empty($nama)  && !empty($password) && !empty($email) && !empty($tanggal_lahir) && !empty($no_telp) )
	{

		$cek=mysql_query("SELECT * FROM mahasiswa WHERE `email`='$email'");
		$valid=mysql_num_rows($cek);

		if ($valid){
			?>
			<script language="javascript">alert("Maaf, Email Anda sudah ada yang punya!!");</script>
			<script> document.location.href='index.html'; </script>
			<?php
		}else{

				$insert=mysql_query("INSERT INTO mahasiswa(img,email,password,nama,tanggal_lahir,no_telp,status)
                            values('no_img.JPEG','$email','$password','$nama','$tanggal_lahir','$no_telp','$status')");
				if ($insert){
					?>
					<script language="javascript">alert("Kamu berhasil mendaftar, silahkan login lagi!!");</script>
					<script> document.location.href='index.html'; </script>
					<?php
				}
			}
	}
	else
	{
		?>
		<script language="javascript">alert("Maaf, Data yang anda kirim belum lengkap!!");</script>
		<script> document.location.href='index.html'; </script>
		<?php
	}

}
?>



<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>

				<div class="signin-form profile">
					<h3 class="agileinfo_sign">Daftar</h3>
					<div class="login-form">
						<form action="home.php?page=3" method="POST">
							<input type="email" name="email" placeholder="Email" required="">
							<input type="password" name="password" id="password1" placeholder="Password" required="">
							<input type="text" name="nama" placeholder="Nama Lengkap" required="">
							<label>Tanggal Lahir : <input type="date" name="tanggal_lahir" required=""></label>
							<input type="text" name="no_telp" placeholder="Nomor Telepon" required="">
							<input type="text" class="hidden" name="status" value="Pendaftar" required="">

							<button type="submit" class="btn btn-success" name="submit" style="success">Daftar Menjadi Mahasiswa</button>
						</form>
					</div>
						<p><a href="#">Klik disini untuk melihat persyaratan!!</a></p>
				</div>
			</div>
		</div>
	</div>
</div>