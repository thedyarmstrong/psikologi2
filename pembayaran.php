<?php
error_reporting(0);
include "koneksi.php";
session_start();
if(!isset($_SESSION['email'])){
    header("location:index.html");//jika belum login jangan lanjut
}

if (isset($_POST['submit'])){
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$transfer_ke=$_POST['transfer_ke'];
	$jumlah_transfer=$_POST['jumlah_transfer'];
	$nm_bank_mhs=$_POST['nm_bank_mhs'];
	$no_rek_mhs=$_POST['no_rek_mhs'];
	$nm_rek_mhs=$_POST['nm_rek_mhs'];
	$tanggal=date('Y-m-d');

	if (empty($nama) || empty($email) || empty($transfer_ke) || empty($jumlah_transfer) || empty($nm_bank_mhs) || 
		empty($no_rek_mhs) || empty($nm_rek_mhs))
		{
			echo "<script> alert ('Maaf, Data Yang Diisi Belum Lengkap'); </script>";
			echo "<meta http-equiv='refresh' content='0; url=pembayaran.php'>";

		}else{
			$ins=mysql_query("INSERT INTO `pembayaran`(`nama_mahasiswa`, `email`, `nama_rekening`, `transfer_ke`, 
				`jumlah_transfer`, `nm_bank_mhs` ,  `no_rek_mhs`, `tanggal_transfer`, `status_pembayaran`) 
				VALUES ('$nama','$email','$nm_rek_mhs','$transfer_ke','$jumlah_transfer','$nm_bank_mhs','$no_rek_mhs','$tanggal','PENDING')");

			if ($ins){
					?>
					<script language="javascript">alert("Pembayaran Sukses");</script>
					<script> top.window.close(); </script>
					<?php
				}
		}
}



?>
<head>
	<title>Fakultas Psikologi Universitas Jayabaya</title>
</head>

<form action="" method="post">

	<?php
		
		$email=$_SESSION['email'];
		$sql=mysql_query("SELECT * FROM mahasiswa WHERE email='$email'");
		while ($d=mysql_fetch_array($sql)) {
			$nama=$d['nama'];
			$email=$d['email'];

		}

	?>
			
	<table>
		<tr>
			<td><b>Nama</b></td>
			<td><?php echo $nama; ?>
				<input type="hidden" name="nama" value="<?php echo $nama; ?>" />
			</td>
		</tr>

		<tr>
			<td><b>Email</b></td>
			<td><?php echo $email; ?>
				<input type="hidden" name="email" value="<?php echo $email; ?>" />
			</td>
		</tr>

		<tr>
			<td  style="padding-top:15px; border-bottom:#fff 1px solid; "><b>Payment Data :</b></td>
		</tr>

		<tr>
			<td>&nbsp;-	Bank Tujuan</td>
			<td><label for="transfer_ke"></label>
				<select name="transfer_ke" id="transfer_ke">
				   	<option value="">-Select-</option>
				    <option value="BCA">BCA 1909.8099.00.11 (BSI)</option>
				    <option value="BNI">BNI 1808.5099.00.43 (BSI)</option>
				    <option value="Mandiri">Mandiri 1870.2143.43.61 (BSI)</option>
				</select>
			</td>
		</tr>
		
		<tr>
			<td>&nbsp;-	Total</td>
			<td><input type="jumlah_transfer" size="20" name="jumlah_transfer" ></td>
		</tr>
				
		<tr>
			<td  style="padding-top:15px; border-bottom:#fff 1px solid;"><b>Data Bank Mahasiswa :</b></td>
		</tr>

		<tr>
			<td>&nbsp;-	Nama Bank</td>
			<td><input type="text" size="20" name="nm_bank_mhs" onkeyup="return validhuruf(this)"/></td>
		</tr>
		
		<tr>
			<td>&nbsp;-	No. Rekening</td>
			<td><input type="text" size="20" name="no_rek_mhs" onkeyup="return validAngka(this)"/></td>
		</tr>
		
		<tr>
			<td>&nbsp;-Nama Pemilik Rekening</td>
			<td><input type="text" size="20" name="nm_rek_mhs" onkeyup="return validhuruf(this)"/></td>
		</tr>
	</table><br>
	
	<p align="center">
		<input name="submit" type="submit" value=" SUBMIT " class="button blue">
	</p>
</form >