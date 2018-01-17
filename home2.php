<?php 
	include "login.php";
	include "signup.php"; 
?>


<div class="banner">
	<div class="wrapper">

		<ul id="sb-slider" class="sb-slider">
			<li>
				<a href="#"><img src="images/banner1.webp" alt="image1"/></a>
					<div class="sb-description">
						<p>Sambutan Dekan Fakultas Psikologi</p>
						<p>Seminar "Improving Achievement Motivation"</p>
					</div>
			</li>
			<li>
				<a href="#"><img src="images/banner2.webp" alt="image2"/></a>
				<div class="sb-description">
					<h3>Penyerahan Cindramata</h3>
					<p>Kunjungan Rumah Sakit Jiwa Klender</p>
				</div>
			</li>
			<li>
				<a href="#"><img src="images/banner3.webp" alt="image1"/></a>
				<div class="sb-description">
					<p>Sambutan Ketua Himpunan Psikologi Indonesia DKI Jakarta Raya HIMPSI JAYA</p>
				</div>
			</li>
			<li>
				<a href="#"><img src="images/banner4.webp" alt="image1"/></a>
				<div class="sb-description">
					<h3>Kegiatan Assessment</h3>
				</div>
			</li>
		</ul>

		<div id="shadow" class="shadow"></div>

		<div id="nav-arrows" class="nav-arrows">
			<a href="#">Next</a>
			<a href="#">Previous</a>
		</div>

		<div id="nav-dots" class="nav-dots">
			<span class="nav-dot-current"></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
		<!-- /wrapper -->
	</div>
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="mid_agile_bannner_top_info">
				<h2>Fakultas Psikologi Universitas Jayabaya</h2>
				<div class="heading-underline">
					<div class="h-u1"></div>
					<div class="h-u2"></div>
					<div class="h-u3"></div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-6 agileits_banner_bottom_left">
				<h3><span>Psikologi Jayabaya</span></h3>
				<p class="w3l_para">Fakultas Psikologi Universitas Jayabaya didirikan pada tanggal 28 Oktober 2002 sesuai SK
					pendirian Program Studi  Nomor: 3199/D/T/2002. Pada awal didirikan,
					Fakultas Psikologi Jayabaya bekerjasama dengan Fakultas Psikologi Universitas Padjadjaran (UNPAD) Bandung
					dalam bentuk bantuan dosen dan pengembangan kurikulum.</p>
				<div class="w3l_social_icons">
					<div class="w3l_social_icon_grid">
						<p class="w3l_para">Dekan pertama Fakultas Psikologi Jayabaya adalah Prof. Dr. Bill S. Raksadjaya.
							Setelah 11 tahun sejak berdiri, Fakultas Psikologi Jayabaya saat ini terus berbenah diri untuk menjawab
							tantangan perkembangan ilmu dan teknologi melalui perubahan kurikulum
							dengan konten Human factors dan psychological engineering.</p>
					</div>
				</div>
			</div>

			<div class="col-md-6 agileits_banner_bottom_right">
				<div class="w3ls_banner_bottom_right">
					<img src="images/gedung.webp" alt=" " class="img-responsive" />

				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //banner-bottom -->

	<!-- News -->
	<div class="w3l-news-content events">
		<div class="container">
			<h3 class="tittle_agile_w3">In The News</h3>
			<div class="heading-underline">
				<div class="h-u1"></div>
				<div class="h-u2"></div>
				<div class="h-u3"></div>
				<div class="clearfix"></div>
			</div>
			
			<?php 
				include "berita.php"; 
				include "agenda.php";
			?>
			
		</div>
	</div>
	<!-- //News -->
	<!-- events-top -->


	<!-- about -->
		<?php
			include "visi_misi.php"; 
		?>
<!-- //about -->
