<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Fakultas Psikologi Universitas Jayabaya</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Treasurer Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/slicebox.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
	    rel='stylesheet' type='text/css'>
	<link href="//fonts.googleapis.com/css?family=Raleway:100i,200,200i,300,400,500,500i,600,700,700i,800,800i" rel="stylesheet">

</head>

<body>
	<!-- banner -->
	<div class="agileits_top_menu">

		<div class="w3l_header_left">
			<ul>
				<li><i class="fa fa-map-marker" aria-hidden="true"></i> 13210 Jakarta</li>
				<li><i class="fa fa-phone" aria-hidden="true"></i> +62 21 4700 890</li>
				<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:psi_ujb@yahoo.com">psi_ujb@yahoo.com</a></li>
			</ul>
		</div>
		<div class="w3l_header_right">
			<div class="w3ls-social-icons text-left">
				<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
				<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="agileits_w3layouts_banner_nav">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				<h1><a class="navbar-brand" href="index.html"><i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Psikologi Jayabaya</span></a></h1>

			</div>
			<ul class="agile_forms">
				<li><a class="active" href="#" data-toggle="modal" data-target="#myModal2"> Login</a> </li>
				<li><a href="#" data-toggle="modal" data-target="#myModal3"> Daftar</a> </li>
			</ul>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav>
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.html" class="hvr-underline-from-center">Home</a></li>
						<li><a href="about.html" class="hvr-underline-from-center">About</a></li>
						<li><a href="portfolio.html" class="hvr-underline-from-center">Portfolio</a></li>
						<li><a href="blog.html" class="hvr-underline-from-center">Blog</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle hvr-underline-from-center" data-toggle="dropdown">Short Codes <b class="fa fa-caret-down"></b></a>
							<ul class="dropdown-menu agile_short_dropdown">
								<li><a href="icons.html">Web Icons</a></li>
								<li><a href="typography.html">Typography</a></li>
							</ul>
						</li>
						<li><a href="contact.html" class="hvr-underline-from-center">Contact</a></li>
					</ul>
				</nav>

			</div>
		</nav>

		<div class="clearfix"> </div>
	</div>
	<!-- Modal1 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">
						<h3 class="agileinfo_sign">Login</h3>
						<div class="login-form">
							<form action="login.php?op=in" method="POST">
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
	<!-- //Modal1 -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">
						<h3 class="agileinfo_sign">Daftar</h3>
						<div class="login-form">
							<form action="daftar.php" method="POST">
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
	<!-- //Modal2 -->
