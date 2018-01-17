<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['nama'])){
    header("location:index.html");//jika belum login jangan lanjut
}

?>


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
				<h1><a class="navbar-brand" href="home.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Psikologi Jayabaya</span></a></h1>

			</div>
			<ul class="agile_forms">
				<li class="dropdown"><a href="profile.php" class="dropdown-toggle hvr-underline-from-center" data-toggle="dropdown">
					<span class="glyphicon glyphicon-user"></span><?php echo strtoupper($_SESSION['nama']);?><b class="fa fa-caret-down"></b></a>
					<ul class="dropdown-menu agile_short_dropdown">
						<li><a href="profile.php">View Profile</a></li>
						<li><a href="logout.php">Log Out</a></li>
					</ul>
				</li>
      </ul>
			</ul>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav>
					<ul class="nav navbar-nav">
						<li class="active"><a href="home.php" class="hvr-underline-from-center">Home</a></li>
						<li><a href="about.html" class="hvr-underline-from-center">About</a></li>
						<li><a href="portfolio.html" class="hvr-underline-from-center">Portfolio</a></li>
						<li><a href="blog.html" class="hvr-underline-from-center">Blog</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle hvr-underline-from-center" data-toggle="dropdown">Short Codes
								<b class="fa fa-caret-down"></b></a>
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
							<form action="#" method="post">
								<input type="email" name="email" placeholder="E-mail" required="">
								<input type="password" name="password" placeholder="Password" required="">
								<div class="tp">
									<input type="submit" value="Sign In">
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

<br><br><br>


  <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

          <?php
          include "koneksi.php";	
          $email=$_SESSION['email'];
          $sql=mysql_query("SELECT * FROM mahasiswa WHERE email='$email'");
          while ($d=mysql_fetch_array($sql)) {
          	$nama=$d['nama'];
          	$tanggal_lahir=$d['tanggal_lahir'];
          	$email=$d['email'];
          	$img=$d['img'];
          	$no_telp=$d['no_telp'];
          	$status=$d['status'];
          }



          ?>


            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Data Mahasiswa</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="images/<?php echo $img ;?>" class="img-circle img-responsive">
                  <a href="#" class="btn btn-primary" onClick="window.open('edit_profil.php','scrollwindow','top=200,left=350,width=575,height=400');">Edit Profil</a>
                  </div>

                  
                  <div class=" col-md-9 col-lg-9 ">
                    <table class="table table-user-information">
                      <tbody>
                        <tr>
                          <td><b><b>Nama</b></b></td>
                          <td><b>:</b></td>
                          <td><b><?php echo $nama ;?></b></td>
                        </tr>
                        <tr>
                          <td><b>Tanggal Lahir</b></td>
                          <td><b>:</b></td>
                          <td><b><?php echo $tanggal_lahir ;?></b></td>
                        </tr>
                        <tr>
                          <td><b>Email</b></td>
                          <td><b>:</b></td>
                          <td><b><?php echo $email ;?></b></td>
                        </tr>
                        <tr>
                          <td><b>No. Telpon</b></td>
                          <td><b>:</b></td>
                          <td><b><?php echo $no_telp ;?></b></td>
                        </tr>
                        <tr>
                          <td><b>Status</b></td>
                          <td><b>:</b></td>
                          <td><b><?php echo $status ;?></b></td>
                        </tr>

                      </tbody>
                    </table>

                    <a href="#" class="btn btn-primary" onClick="window.open('pembayaran.php','scrollwindow','top=200,left=350,width=575,height=400');"/>konfirmasi Pembayaran</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<br><br><br>

<script>
$(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });
});

</script>



  <!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_agile_footer_grids">

			<div class="w3ls_address_mail_footer_grids">
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<p>Jl. Pulomas Selatan Kav. 23, <span>Jakarta Timur, 13210</span></p></a>
				</div>
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<p>+(000) 123 4565 32 <span>+(010) 123 4565 35</span></p>
				</div>
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</div>
					<p><a href="mailto:info@example.com">info@example1.com</a>
						<span><a href="mailto:info@example.com">info@example2.com</a></span></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileinfo_copyright">
				<p>Copyright © 2017 Fakultas Psikologi Jayabaya | <a href="www.psikologijayabaya.ac.id">www.psikologijayabaya.ac.id</a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- menu -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
	<!-- password-script -->
	<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- //js -->
	<script src="js/bars.js"></script>

	<script type="text/javascript" src="js/jquery.slicebox.js"></script>
	<script type="text/javascript">
		$(function () {

			var Page = (function () {

				var $navArrows = $('#nav-arrows').hide(),
					$navDots = $('#nav-dots').hide(),
					$nav = $navDots.children('span'),
					$shadow = $('#shadow').hide(),
					slicebox = $('#sb-slider').slicebox({
						onReady: function () {

							$navArrows.show();
							$navDots.show();
							$shadow.show();

						},
						onBeforeChange: function (pos) {

							$nav.removeClass('nav-dot-current');
							$nav.eq(pos).addClass('nav-dot-current');

						}
					}),

					init = function () {

						initEvents();

					},
					initEvents = function () {

						// add navigation events
						$navArrows.children(':first').on('click', function () {

							slicebox.next();
							return false;

						});

						$navArrows.children(':last').on('click', function () {

							slicebox.previous();
							return false;

						});

						$nav.each(function (i) {

							$(this).on('click', function (event) {

								var $dot = $(this);

								if (!slicebox.isActive()) {

									$nav.removeClass('nav-dot-current');
									$dot.addClass('nav-dot-current');

								}

								slicebox.jump(i + 1);
								return false;

							});

						});

					};

				return {
					init: init
				};

			})();

			Page.init();

		});
	</script>
	<!-- Stats -->
	<script src="js/waypoints.min.js"></script>
	<script src="js/counterup.min.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$('.counter').counterUp({
				delay: 10,
				time: 2000
			});
		});
	</script>
	<!-- //Stats -->

	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	<!-- flexisel -->
	<script type="text/javascript">
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 2
					}
				}
			});

		});
	</script>
	<!-- //flexisel -->
	<!-- //flexisel -->
	<!-- js for portfolio lightbox -->
	<script src="js/jquery.chocolat.js "></script>
	<!-- //menu -->
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
</body>

</html>
