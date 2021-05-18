	<?php
include "koneksi.php";
session_start();

$sqlL = "SELECT * from t_hubungi_kami";
$resultL = mysqli_query($koneksi, $sqlL);

$dataL = mysqli_fetch_array($resultL);


?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Artikel">
    <meta name="keywords" content="manajemen, bisnis, marketing, properti, humaniora, politik, literasi, epigram, hr, artikel, family">
    <meta name="author" content="krisbanarto">
	<meta name="google-signin-client_id" content="824525495406-lj58s4u6a63mgoqlaa8h1lc7i9ea84s5.apps.googleusercontent.com">
	<meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    
	<title>ManajemenTerkini</title>

	<!-- normalize core CSS -->
	<link href="css/normalize.css" rel="stylesheet">
    <link rel="icon" href="img/icon.png">
	<link rel="stylesheet" type="text/css" href="css/hexagons.min.css">

	<!-- Bootstrap core CSS -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/carousel.css" rel="stylesheet">
	<link href="bootstrap/fonts/glyphicons-halflings-regular.eot" rel="stylesheet">

	<!-- Load jQuery -->
	<script src="js/jquery-2.2.4.min.js"></script>

	<script src="slick/slick.min.js"></script>
	<script src="slick/wow.min.js"></script>

	<script src="slick/custom.js"></script>

	<script src="js/zabuto_calendar.min.js"></script>
	<script src="js/jquery.inview.js"></script>
	<script src="js/hexagons.min.js"></script>

	<script src="js/zabuto_calendar.css"></script>
	<script src="js/jquery.bootstrap-growl.js"></script>
	<meta name="google-signin-scope" content="profile email">
	<script src="https://apis.google.com/js/platform.js?onload=init" async defer></script>
	<script src="https://apis.google.com/js/platform.js?onload=onLoadCallback" async defer></script>

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

	<script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

	<!-- Google Fonts - Change if needed -->
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400italic,400,700,300,600' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="fonts/font-awesome.min.css">

	<!-- Menu shrinking -->
	<script type="text/javascript" src="js/menu.js"></script>
	<link href="slick/theme.css" rel="stylesheet">
	<!-- Main styles of this template -->
	<link href="css/style.min.css?v=1.0.0" rel="stylesheet">

	<link href="css/style.css" rel="stylesheet">

	<!-- Custom CSS. Input here your changes -->
	<link href="css/custom.css" rel="stylesheet">
	<link href="slick/slick.css" rel="stylesheet">
	<link href="slick/style.css" rel="stylesheet">

	<style>
		.nav1 {
			position: relative;
			width: 100%;
			margin: 0 auto;
		}

		#cssmenu,
		#cssmenu ul,
		#cssmenu ul li,
		#cssmenu ul li a,
		#cssmenu #head-mobile {
			border: 0;
			list-style: none;
			line-height: 1;
			display: block;
			position: relative;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box
		}

		#cssmenu:after,
		#cssmenu>ul:after {
			content: ".";
			display: block;
			clear: both;
			visibility: hidden;
			line-height: 0;
			height: 0
		}

		#cssmenu #head-mobile {
			display: none
		}

		#cssmenu {
			font-family: sans-serif;
			background: #244B9C
		}

		#cssmenu>ul>li {
			float: left
		}

		#cssmenu>ul>li>a {
			padding: 17px;
			font-size: 12px;
			letter-spacing: 1px;
			text-decoration: none;
			color: #fff;
			font-weight: 700;
		}

		#cssmenu>ul>li:hover>a,
		#cssmenu ul li.active a {
			color: #fff
		}

		#cssmenu>ul>li:hover,
		#cssmenu ul li.active:hover,
		#cssmenu ul li.active,
		#cssmenu ul li.has-sub.active:hover {
			background: #007cbd !important;
			-webkit-transition: background .3s ease;
			-ms-transition: background .3s ease;
			transition: background .3s ease;
		}

		#cssmenu>ul>li.has-sub>a {
			padding-right: 30px
		}

		#cssmenu>ul>li.has-sub>a:after {
			position: absolute;
			top: 22px;
			right: 11px;
			width: 8px;
			height: 2px;
			display: block;
			background: #ddd;
			content: ''
		}

		#cssmenu>ul>li.has-sub>a:before {
			position: absolute;
			top: 19px;
			right: 14px;
			display: block;
			width: 2px;
			height: 8px;
			background: #ddd;
			content: '';
			-webkit-transition: all .25s ease;
			-ms-transition: all .25s ease;
			transition: all .25s ease
		}

		#cssmenu>ul>li.has-sub:hover>a:before {
			top: 23px;
			height: 0
		}

		#cssmenu ul ul {
			position: absolute;
			left: -9999px
		}

		#cssmenu ul ul li {
			height: 0;
			-webkit-transition: all .25s ease;
			-ms-transition: all .25s ease;
			background: #333;
			transition: all .25s ease
		}

		#cssmenu ul ul li:hover {}

		#cssmenu li:hover>ul {
			left: auto
		}

		#cssmenu li:hover>ul>li {
			height: 35px
		}

		#cssmenu ul ul ul {
			margin-left: 100%;
			top: 0
		}

		#cssmenu ul ul li a {
			border-bottom: 1px solid rgba(150, 150, 150, 0.15);
			padding: 11px 15px;
			width: 170px;
			font-size: 12px;
			text-decoration: none;
			color: #ddd;
			font-weight: 400;
		}

		#cssmenu ul ul li:last-child>a,
		#cssmenu ul ul li.last-item>a {
			border-bottom: 0
		}

		#cssmenu ul ul li:hover>a,
		#cssmenu ul ul li a:hover {
			color: #fff
		}

		#cssmenu ul ul li.has-sub>a:after {
			position: absolute;
			top: 16px;
			right: 11px;
			width: 8px;
			height: 2px;
			display: block;
			background: #ddd;
			content: ''
		}

		#cssmenu ul ul li.has-sub>a:before {
			position: absolute;
			top: 13px;
			right: 14px;
			display: block;
			width: 2px;
			height: 8px;
			background: #ddd;
			content: '';
			-webkit-transition: all .25s ease;
			-ms-transition: all .25s ease;
			transition: all .25s ease
		}

		#cssmenu ul ul>li.has-sub:hover>a:before {
			top: 17px;
			height: 0
		}

		#cssmenu ul ul li.has-sub:hover,
		#cssmenu ul li.has-sub ul li.has-sub ul li:hover {
			background: #363636;
		}

		#cssmenu ul ul ul li.active a {
			border-left: 1px solid #333
		}

		#cssmenu>ul>li.has-sub>ul>li.active>a,
		#cssmenu>ul ul>li.has-sub>ul>li.active>a {
			border-top: 1px solid #333
		}

		@media screen and (max-width:700px) {


			nav {
				width: 100%;
			}

			#cssmenu {
				width: 100%
			}

			#cssmenu ul {
				width: 100%;
				display: none
			}

			#cssmenu ul li {
				width: 100%;
				border-top: 1px solid #444
			}

			#cssmenu ul li:hover {
				background: #363636;
			}

			#cssmenu ul ul li,
			#cssmenu li:hover>ul>li {
				height: auto
			}

			#cssmenu ul li a,
			#cssmenu ul ul li a {
				width: 100%;
				border-bottom: 0
			}

			#cssmenu>ul>li {
				float: none
			}

			#cssmenu ul ul li a {
				padding-left: 25px
			}

			#cssmenu ul ul li {
				background: #333 !important;
			}

			#cssmenu ul ul li:hover {
				background: #363636 !important
			}

			#cssmenu ul ul ul li a {
				padding-left: 35px
			}

			#cssmenu ul ul li a {
				color: #ddd;
				background: none
			}

			#cssmenu ul ul li:hover>a,
			#cssmenu ul ul li.active>a {
				color: #fff
			}

			#cssmenu ul ul,
			#cssmenu ul ul ul {
				position: relative;
				left: 0;
				width: 100%;
				margin: 0;
				text-align: left
			}

			#cssmenu>ul>li.has-sub>a:after,
			#cssmenu>ul>li.has-sub>a:before,
			#cssmenu ul ul>li.has-sub>a:after,
			#cssmenu ul ul>li.has-sub>a:before {
				display: none
			}

			#cssmenu #head-mobile {
				display: block;
				padding: 23px;
				color: #ddd;
				font-size: 12px;
				font-weight: 700
			}

			.button {
				width: 55px;
				height: 46px;
				position: absolute;
				right: 0;
				top: 0;
				cursor: pointer;
				z-index: 12399994;
			}

			.button:after {
				position: absolute;
				top: 22px;
				right: 20px;
				display: block;
				height: 4px;
				width: 20px;
				border-top: 2px solid #dddddd;
				border-bottom: 2px solid #dddddd;
				content: ''
			}

			.button:before {
				-webkit-transition: all .3s ease;
				-ms-transition: all .3s ease;
				transition: all .3s ease;
				position: absolute;
				top: 16px;
				right: 20px;
				display: block;
				height: 2px;
				width: 20px;
				background: #ddd;
				content: ''
			}

			.button.menu-opened:after {
				-webkit-transition: all .3s ease;
				-ms-transition: all .3s ease;
				transition: all .3s ease;
				top: 23px;
				border: 0;
				height: 2px;
				width: 19px;
				background: #fff;
				-webkit-transform: rotate(45deg);
				-moz-transform: rotate(45deg);
				-ms-transform: rotate(45deg);
				-o-transform: rotate(45deg);
				transform: rotate(45deg)
			}

			.button.menu-opened:before {
				top: 23px;
				background: #fff;
				width: 19px;
				-webkit-transform: rotate(-45deg);
				-moz-transform: rotate(-45deg);
				-ms-transform: rotate(-45deg);
				-o-transform: rotate(-45deg);
				transform: rotate(-45deg)
			}

			#cssmenu .submenu-button {
				position: absolute;
				z-index: 99;
				right: 0;
				top: 0;
				display: block;
				border-left: 1px solid #444;
				height: 46px;
				width: 46px;
				cursor: pointer
			}

			#cssmenu .submenu-button.submenu-opened {
				background: #262626
			}

			#cssmenu ul ul .submenu-button {
				height: 34px;
				width: 34px
			}

			#cssmenu .submenu-button:after {
				position: absolute;
				top: 22px;
				right: 19px;
				width: 8px;
				height: 2px;
				display: block;
				background: #ddd;
				content: ''
			}

			#cssmenu ul ul .submenu-button:after {
				top: 15px;
				right: 13px
			}

			#cssmenu .submenu-button.submenu-opened:after {
				background: #fff
			}

			#cssmenu .submenu-button:before {
				position: absolute;
				top: 19px;
				right: 22px;
				display: block;
				width: 2px;
				height: 8px;
				background: #ddd;
				content: ''
			}

			#cssmenu ul ul .submenu-button:before {
				top: 12px;
				right: 16px
			}

			#cssmenu .submenu-button.submenu-opened:before {
				display: none
			}

			#cssmenu ul ul ul li.active a {
				border-left: none
			}

			#cssmenu>ul>li.has-sub>ul>li.active>a,
			#cssmenu>ul ul>li.has-sub>ul>li.active>a {
				border-top: none
			}
		}
	</style>

</head>

<body>


	<!-- Navigation -->
	<div class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color:#fff; ">
		<!--box-shadow:0 5px 50px 15px rgba(0, 0, 0, 0.2) -->
		<div class="container">
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index"><img class="logo" src="img/logo1.png" alt="Logo"></a>
			</div>
			<nav class="collapse navbar-collapse navbar-ex1-collapse">

				<div class="row">

					<ul class="nav navbar-nav navbar-right">

						<li class="active menu2">
							<a href="?menu=home" class=""> <i class="fa fa-home"></i> Home</a>
						</li>

						<li class="dropdown menu2">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<?php
								$sql = "SELECT * FROM article_category a ORDER BY seq";
								$result = mysqli_query($koneksi, $sql);
								while ($data = mysqli_fetch_array($result)) {
								?>


									<li><a href="?menu=article&category=<?php echo $data['category_name'] ?>"><?php echo $data['category_name'] ?></a></li>
								<?php } ?>
							</ul>
						</li>

						<li class="menu2"><a href="?menu=about">About</a></li>
						<!--<li class="menu2"><a href="?menu=about">Contact</a></li> -->

						<li>
							<div class="search-form" style="margin-top:5px">
								
									<div style="
										min-width: 250px;
										width: 100%;
										height: 40px;
										border: none;
										background-color: #ffffff;
										font-size: 14px;
										font-style: italic;
										color: #a6a6a6;
										padding: 0;
										-webkit-transition-duration: 500ms;
										transition-duration: 500ms;
								
								">
									<input type="search" name="" id="txtsearcharticle" class="form-control" placeholder="Search......">

								</div>
								
							</div>
						</li>


						<!--
							<li class="active dropdown" style="background-color:#999 !important; border-radius:5px;">
								<a href="#"  class="dropdown-toggle" data-toggle="dropdown" style="background-color:#f0f0f0 !important ; border-radius:5px; color:#999"> <i class="fa fa-user"></i> Account 
								<b class="caret"></b>
								</a>
								<ul class="dropdown-menu">
									<?php
									if (isset($_SESSION['EMAIL']) || isset($_SESSION['NAME']) || isset($_SESSION['IMAGE'])) { ?>
									<li id="liAccount" class=""  style="background-color:#e96b56"><span style="padding:10px; color:#fff"> <i class="fa fa-user"></i> &nbsp; <?php echo $_SESSION['NAME'] ?><br></span>
										<span style="padding:10px; font-size:12px;color:#fff "><?php echo $_SESSION['EMAIL'] ?></span>
										
									</li>
									<?php } ?>
									<li><a href="?menu=login" style="background-color:#f0f0f0; color:#666">Login</a></li>
									<li><a onclick="signOut();" style="background-color:#999; color:#fff; cursor:pointer">Logout</a></li>
								</ul>
							</li>
							-->
						<li>
							<div class="top-social-info" style="padding-top:15px">
								<a target="_blank" href="<?php echo $dataL['facebook'] ?>" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a target="_blank" href="<?php echo $dataL['twitter'] ?>" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a target="_blank" href="<?php echo $dataL['instagram'] ?>" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
								<a target="_blank" href="<?php echo $dataL['linkedin'] ?>" data-toggle="tooltip" data-placement="bottom" title="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
								<a target="_blank" class="btn btn-danger" data-target="#exampleModal" style="color: #fff;" data-toggle="modal" data-placement="bottom" title="Login/Logout"><i class="fa fa-lock" aria-hidden="true"></i></a>
							</div>

						</li>


					</ul>

				</div>
		</div>
		</nav>
		<!-- /.navbar-collapse -->
	</div>

	<div class="modal" id="exampleModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Sign In / Sign Up / Logout</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" align="center">
					<button type="button" onclick="loginForm()" class="btn btn-primary">Sign In</button>
					<button type="button" onclick="loginForm()" class="btn btn-warning">Sign Up</button>
					<button type="button" class="btn btn-secondary" onclick="signOut()" data-dismiss="modal">Logout</button>
				</div>
				<div class="modal-footer">

				</div>
			</div>
		</div>
	</div>

	<div style="background-color:#244B9C">
		<nav id='cssmenu' style="height:46px" class="menu3 nav1">
			<div id="head-mobile"></div>
			<div class="button"></div>
			<ul>
				<li class='active'><a href='?menu=home'>Home</a></li>
				<?php
				$sql1 = "SELECT * FROM article_category a ORDER BY seq";
				$result1 = mysqli_query($koneksi, $sql1);
				while ($data1 = mysqli_fetch_array($result1)) {
				?>
					<li><a href="?menu=article&category=<?php echo $data1['category_name'] ?>"><?php echo $data1['category_name'] ?></a></li>
				<?php } ?>
				<li><a href='?menu=about'>About</a></li>
			</ul>
		</nav>
	</div>


	<!-- /.container -->
	</div>



	<?php
	error_reporting(0);

	if ($_GET['menu'] == "home") {
		include "home.php";
	} else if ($_GET['menu'] == "category") {
		include "articleCategory.php";
	} else if ($_GET['menu'] == "popular") {
		include "popular.php";
	} else if ($_GET['menu'] == "latest") {
		include "latest.php";
	} else if ($_GET['menu'] == "about") {
		include "about.php";
	} else if ($_GET['menu'] == "article") {
		include "article.php";
	} else if ($_GET['menu'] == "articletag") {
		include "articletag.php";
	} else if ($_GET['menu'] == "login") {
		include "login.php";
	} else if ($_GET['menu'] == "detailarticle") {
		include "detailarticle.php";
	} else if ($_GET['menu'] == "searcharticle") {
		include "searcharticle.php";
	} else if ($_GET['menu'] == "login") {
		include "login.php";
	} else {
		include "home.php";
	}

	?>

	<!-- FOOTER 1 -->
	<footer style="padding:60px 0px 0px 10px; background-color:#f2f2f2; color:#000; border-top:solid 7px #244B9C">
		<div class="container">
			<div class="row">
				<div class="col-md-3 ">
					<div>
						<a href="index">
							<img class="img-responsive" src="img/logo.png" alt="logo">
						</a>
					</div>

				</div>
				<div class="col-md-6 footer-menu" style="color:#000;">
					<h4 style="color:#000; margin-bottom:10px">Artikel Manajemen & Humaniora</h4>
					<p style="color:#000;">Website yang menyediakan berbagai macam artikel yang berhubungan dengan dunia Marketing
						dan Humaniora</p>

				</div>

				<div class="col-md-3  footer-menu">
					<h4 style="color:#000;">Follow Me:</h4>
					<div class="top-social-info">
						<a target="_blank" href="<?php echo $dataL['facebook'] ?>" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a target="_blank" href="<?php echo $dataL['twitter'] ?>" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a target="_blank" href="<?php echo $dataL['instagram'] ?>" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a target="_blank" href="<?php echo $dataL['linkedin'] ?>" data-toggle="tooltip" data-placement="bottom" title="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					</div>
				</div>

			</div>
		</div>
	</footer>
	<footer style="padding:10px 0px 10px 0px">
		<div class="container">
			<div class="row" style="color:#f0f0f0; text-align:center">
				@2021.Manajemen Terkini
			</div>
		</div>
	</footer>

	<div class="g-signin2 " data-onsuccess="onSignIn" style="margin-top:10px; width:100%; background-color:#fff; border-radius: 25px;padding:5px; display:none"></div>

	<!-- Scripts -->
	<!-- Loads Bootstrap Main JS -->

	<script src="bootstrap/js/bootstrap.min.js"></script>


	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>

	<!-- Initiate Portoflio Script -->
	<script src="extensions/portfolio/isotope.min.js"></script>
	<script src="extensions/portfolio/portfolio.js"></script>

	<script src="extensions/portfolio/isotope.min.js"></script>


	<!-- Initiate Fancybox/Lightbox Script -->
	<!-- Fancybox/Lightbox -->
	<script type="text/javascript" src="extensions/fancybox/jquery.fancybox.js"></script>
	
	<script type="text/javascript" src="extensions/fancybox/jquery.fancybox.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="extensions/fancybox/jquery.fancybox.css" media="screen" />
	<script type="text/javascript" src="extensions/fancybox/jquery.fancybox-media.js"></script>
	
	<!-- Initiate Fancybox/Lightbox for Videos -->
	<script type="text/javascript">
		function login() {
			$("#myModal").modal();
		}
		
		function loginForm() {
			window.location.href = "index.php?menu=login";
		}
		
		$('#txtsearcharticle').keypress(function(e) {
			if (e.which == 13) {

				document.location.href = '?menu=searcharticle&category=' + $("#txtsearcharticle").val();
			}
		});

		$(document).ready(function() {
			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			 */
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect: 'none',
					closeEffect: 'none',
					prevEffect: 'none',
					nextEffect: 'none',
					arrows: false,
					helpers: {
						media: {},
						buttons: {}
					}
				});

		});
		
		function onSignIn(googleUser) {
			// Useful data for your client-side scripts:
			var profile = googleUser.getBasicProfile();
			console.log("ID: " + profile.getId()); // Don't send this directly to your server!
			console.log('Full Name: ' + profile.getName());
			console.log('Given Name: ' + profile.getGivenName());
			console.log('Family Name: ' + profile.getFamilyName());
			console.log("Image URL: " + profile.getImageUrl());
			console.log("Email: " + profile.getEmail());

			// The ID token you need to pass to your backend:
			var id_token = googleUser.getAuthResponse().id_token;
			console.log("ID Token: " + id_token);

			formData = new FormData();
			formData.append("userSI", "");
			formData.append("passSI", "");
			formData.append("userG", profile.getEmail());
			formData.append("passG", profile.getEmail());
			formData.append("nameG", profile.getName());
			formData.append("imageG", profile.getImageUrl());
			formData.append("action", "gmail");
			formData.append("userSU", "");
			formData.append("passSU", "");
			formData.append("nameSU", "");


			console.log("test");
			$.ajax({
				url: "signin.php",
				method: "POST",
				data: {
					formData: formData
				},
				data: formData,
				processData: false,
				contentType: false,
				success: function(data) {
					var data = JSON.parse(data);
					if (data != null) {
						if (data.pesan != "") {
							if (data.pesan == "sukses" && data.pesan != "undefined") {
								window.history.back();
							} else {
								showErrorMesgGrowl(data.pesan);
							}
						}
					}
				}
			});

		}


		function signOut() {

			formData = new FormData();

			var auth2 = gapi.auth2.getAuthInstance();
			auth2.signOut().then(function() {});
			auth2.disconnect();

			$.ajax({
				url: "logout.php",
				method: "POST",
				data: {},
				data: formData,
				processData: false,
				contentType: false,
				success: function(data) {
					showSuccessMesgGrowl("Loguot successfully");
					window.location.href = "index.php";
					onLoadCallback();
				}
			});

		}

		function onLoad() {
			gapi.load('auth2', function() {
				gapi.auth2.init();
			});
		}

		function onLoadCallback() {
			$('span[id^="not_signed_"]').html('SIGN IN WITH GOOGLE');
		}


		function showErrorMesgGrowl(mesg) {
			$.bootstrapGrowl(mesg, {
				type: 'danger',
				allow_dismiss: true,
				align: 'center',
				delay: 60000
			});
		}

		function showSuccessMesgGrowl(mesg) {
			$.bootstrapGrowl(mesg, {
				type: 'success',
				allow_dismiss: true,
				align: 'center',
				delay: 10000
			});
		}


		(function($) {
			$.fn.menumaker = function(options) {
				var cssmenu = $(this),
					settings = $.extend({
						format: "dropdown",
						sticky: false
					}, options);
				return this.each(function() {
					$(this).find(".button").on('click', function() {
						$(this).toggleClass('menu-opened');
						var mainmenu = $(this).next('ul');
						if (mainmenu.hasClass('open')) {
							mainmenu.slideToggle().removeClass('open');
						} else {
							mainmenu.slideToggle().addClass('open');
							if (settings.format === "dropdown") {
								mainmenu.find('ul').show();
							}
						}
					});
					cssmenu.find('li ul').parent().addClass('has-sub');
					multiTg = function() {
						cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
						cssmenu.find('.submenu-button').on('click', function() {
							$(this).toggleClass('submenu-opened');
							if ($(this).siblings('ul').hasClass('open')) {
								$(this).siblings('ul').removeClass('open').slideToggle();
							} else {
								$(this).siblings('ul').addClass('open').slideToggle();
							}
						});
					};
					if (settings.format === 'multitoggle') multiTg();
					else cssmenu.addClass('dropdown');
					if (settings.sticky === true) cssmenu.css('position', 'fixed');
					resizeFix = function() {
						var mediasize = 700;
						if ($(window).width() > mediasize) {
							cssmenu.find('ul').show();
						}
						if ($(window).width() <= mediasize) {
							cssmenu.find('ul').hide().removeClass('open');
						}
					};
					resizeFix();
					return $(window).on('resize', resizeFix);
				});
			};
		})(jQuery);

		(function($) {
			$(document).ready(function() {
				$("#cssmenu").menumaker({
					format: "multitoggle"
				});
			});
		})(jQuery);
	</script>

</body>

</html>