<?php
include "koneksi.php";

// Cek apakah form sudah di submit atau belum
if(isset($_POST['SUBMIT'])){

	$judul=$_POST['judul'];
    $isi=$_POST['isi'];
    $link=$_POST['link'];
    $tanggal=date('Y-m-d');
  
// Cek apakah inputan gambar kosong atau tidak
    if(!empty($_FILES["foto"]["tmp_name"])||!empty($judul)||!empty($isi)||!empty($link)){
    // Folder yang dituju
    

    
    // Nama file
    $nama_file=$_FILES["foto"]["name"];
    // Temporary pada file
    $lokasi_file=$_FILES["foto"]["tmp_name"];
    // Ekstensi file
    $type_file=$_FILES["foto"]["type"];
    //Ukuran file yang diperbolehkan ( 1 Mb )
  
    // Tujuan
    $direktori="../images/$nama_file";
    // Cek ukuran file
       
    // Cek ekstensi pada file, misalnya hanya diperbolehkan untuk ekstensi gambar
          if($type_file == "image/png" or $type_file == "image/jpg" or $type_file == "image/jpeg" )
          {
    // Proses upload gambar
              if(move_uploaded_file($lokasi_file,$direktori))
              {

                  $insert=mysql_query("INSERT INTO berita VALUES (null,'$nama_file','$judul','$tanggal','$isi','$link')");
                  ?>
                  <script language="javascript">alert("Berhasil");</script>
                  echo "<meta http-equiv='refresh' content='0; url=home.php?page=5'>";
                  <?php

              }else{
              echo "Tambah Berita Gagal";
              }
          }
          else
          {
            ?>
            <script language="javascript">alert("Ekstensi file hanya diperbolehkan png, jpg, jpeg, dan gif");</script>
            <?php
          }
      
    }
    else{
      ?>
      <script language="javascript">alert("Data Belum Lengkap");</script>
      <?php
    }
}

?>


<h1>Berita Baru</h1>

<div class="table-responsive">
	<form method="post" action="home.php?page=6" enctype="multipart/form-data" name="form1" id="form1">
		<table id="example" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
	        <tr>
	            <td>Foto :</td>
	            <td><label for="foto"></label>
	                <input type="file" name="foto" />
	            </td>
	        </tr>
	        <tr>
				<td valign="top">Judul :</td>
				<td><input type="text" size="100"  name="judul"></td>
			</tr>
			<tr>
				<td valign="top">Isi :</td>
				<td><textarea cols="100" rows="7" name="isi"></textarea></td>
			</tr>
			<tr>
				<td valign="top">Link :</td>
				<td><input type="text" size="100" name="link"></td>
			</tr>
		</table>
	<p align="center">
        <input type="submit" value="submit" name="SUBMIT"  />
   	</p>
	</form>
</div>
