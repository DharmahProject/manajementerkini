<!DOCTYPE html>
<?php
error_reporting(0);
?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../images/icon.png">
	<title>ManajemenTerkini Administrator</title>
	<link rel="stylesheet" type="text/css" href="../vendor/style_amie.css" />
	<link rel="shortcut icon" href="../img/header.png" />
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<style>
		img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
			display: none;
		}
	</style>

	<!-- jQuery -->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="../js/jquery.bootstrap-growl.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script>
		function login() {

			var email = $("#txtEmail").val();
			var pass = $("#txtPassword").val();

			if (email == null || email == "") {
				showErrorMesgGrowl("Email Address should not be null");
				return false;
			}
			if (pass == null || pass == "") {
				showErrorMesgGrowl("Password should not be null");
				return false;
			}

			$.ajax({
				url: "adminValidate.php",
				method: "POST",
				data: {
					username: email,
					password: pass
				},
				dataType: "text",
				success: function(data) {

					if (data == "error") {
						showErrorMesgGrowl("Email Address or password invalid!");
					} else {
						showSuccessMesgGrowl("Login finish successfully");
						document.location.href = 'dashboard';
					}
				}
			});
		}


		function showErrorMesgGrowl(mesg) {
			$.bootstrapGrowl(mesg, {
				type: 'danger',
				allow_dismiss: true,
				align: 'center',
				delay: 10000
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
	</script>

</head>

<body>


	<div class="container">


		<div class="omb_login" style="padding-top:60px">


			<div class="row omb_row-sm-offset-3" style="text-align:center">
				<div class="col-xs-12 col-sm-6">
					<h3 class="omb_authTitle" style="text-align:center"><img src="../images/logo.png" class="img-responsive" style="margin: 0 auto; display:block"></h3>
				</div>
			</div>

			<div class="row omb_row-sm-offset-3 omb_loginOr">
				<div class="col-xs-12 col-sm-6">
					<hr class="omb_hrOr">
					<span class="omb_spanOr"> Form Login</span>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12" style="text-align:center; margin-bottom:15px">
			</div>
			<div class="row omb_row-sm-offset-3">
				<div class="col-xs-12 col-sm-6">

					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="email" id="txtEmail" class="form-control" name="username" placeholder="email address">
					</div>
					<span class="help-block"></span>

					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-gear"></i></span>
						<input type="password" id="txtPassword" class="form-control" name="password" placeholder="Password">
					</div>
					<span class="help-block"></span>

					<span class="help-block" style="margin-bottom:30px"></span>

					<button class="btn btn-lg btn-primary btn-block" type="" onclick="login()">Login</button>

				</div>
			</div>
			<div class="row omb_row-sm-offset-3">
				<div class="col-xs-12 col-sm-3">
					<label class="checkbox">

					</label>
				</div>
				<div class="col-xs-12 col-sm-3">
					<p class="omb_forgotPwd">
						<a href="forgotpassword">Forgot password?</a>
					</p>
				</div>
			</div>
		</div>
	</div>

</body>

</html>