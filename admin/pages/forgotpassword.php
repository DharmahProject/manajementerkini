<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>BISMAPRO Administrator</title>
	<link rel="stylesheet" type="text/css" href="../vendor/style_amie.css" />
	<link rel="shortcut icon" href="../img/header.png" />
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- jQuery -->
	<script src="../vendor/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script>
		window.setTimeout(function() {
			$(".alert").fadeTo(1000, 0).slideUp(1000, function() {
				$(this).remove();
			});
		}, 2000);
	</script>
	<style>
		.alert {
			position: absolute;
			z-index: 3000;
			text-align: center;
			left: 34%;
			top: 20%
		}

		.alert-warning {
			position: absolute;
			z-index: 3000;
			text-align: center;
			left: 34%;
			top: 20%
		}
	</style>


</head>

<body>


	<div class="container">

		<?php
		session_start();
		if (isset($_SESSION['pesan']) && $_SESSION['pesan'] == 'sukses') { ?>

			<div class="alert alert-success fade in">
				<button type="button" class="close" data-dismiss="alert">x</button>
				<strong>Success! </strong> Password berhasil direset. Silahkan login kembali.
			</div>

		<?php unset($_SESSION['pesan']);
		} elseif (isset($_SESSION['pesan']) && $_SESSION['pesan'] == 'salah') {  ?>

			<div class="alert alert-warning fade in">
				<button type="button" class="close" data-dismiss="alert">x</button>
				<strong>Warning! </strong> Data yang anda masukkan tidak ditemukan/ Salah.
			</div>

		<?php unset($_SESSION['pesan']);
		} elseif (isset($_SESSION['pesan']) && $_SESSION['pesan'] == 'passworderror') {  ?>

			<div class="alert alert-warning fade in">
				<button type="button" class="close" data-dismiss="alert">x</button>
				<strong>Warning! </strong> Password baru dan konfirmasi password tidak sesuai.
			</div>
		<?php unset($_SESSION['pesan']);
		} else {
			unset($_SESSION['pesan']);
		} ?>


		<form action="resetpassword.php" method="post">
			<div class="omb_login" style="padding-top:30px">

				<div class="row omb_row-sm-offset-3">
					<div class="col-xs-12 col-sm-6">
						<h3 class="omb_authTitle"><img src="../images/logo.png" class="img-responsive" style="margin: 0 auto; display:block"></h3>
					</div>
				</div>

				<div class="row omb_row-sm-offset-3 omb_loginOr">
					<div class="col-xs-12 col-sm-6">
						<hr class="omb_hrOr">
						<span class="omb_spanOr"> Forgot Password </span>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12" style="text-align:center; margin-bottom:15px">

				</div>
				<div class="row omb_row-sm-offset-3">
					<div class="col-xs-12 col-sm-6">
						<form class="omb_loginForm" action="" autocomplete="off" method="POST">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="email" class="form-control" name="username" placeholder="email address" required>
							</div>
							<span class="help-block"></span>

							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-gear"></i></span>
								<input type="text" class="form-control" name="kduser" placeholder="Kode User" required>
							</div>
							<span class="help-block"></span>

							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-phone"></i></span>
								<input type="text" class="form-control" name="telp" placeholder="Telepon" required>
							</div>
							<span class="help-block"></span>

							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" class="form-control" name="pwd" placeholder="Password Baru" required>
							</div>
							<span class="help-block"></span>

							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" class="form-control" name="pwd1" placeholder="Konfirmasi Password" required>
							</div>
							<span class="help-block" style="margin-bottom:30px"></span>

							<button class="btn btn-lg btn-primary btn-block" type="submit">Reset Password</button>
						</form>
					</div>
				</div>
				<div class="row omb_row-sm-offset-3">
					<div class="col-xs-12 col-sm-3">
						<label class="checkbox">

						</label>
					</div>
					<div class="col-xs-12 col-sm-3">
						<p class="omb_forgotPwd">
							<a href="index.php">Form Login</a>
						</p>
					</div>
				</div>
			</div>
	</div>
	</form>
</body>

</html>