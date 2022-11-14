<!DOCTYPE html>
<html lang="en">
<head>
	<title>Confirm Token |Student LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="login-ui/image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="login-ui/css/util.css">
	<link rel="stylesheet" type="text/css" href="login-ui/css/main.css">
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(login-ui/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Complete Your Login
					</span>
					<span style="color:white; padding:2px 8px 2px 8px; text-align: center; background-color: #C0C0C0; border-radius: 20px;">A token has be sent to <?php echo $_SESSION['examineeSession']['exmne_phone_number'] ?></span>
				</div>

				<form method="post" id="examineeCheckTokenFrm" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Token is required">
						<span class="label-input100">Token</span>
						<input class="input100" type="text" name="token" placeholder="Enter token">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn" style="position: flex; justify-content: center width: 100%;">
						<button type="submit" class="login100-form-btn" style=" width: 100%;">
							Confirm
						</button>
					</div>
					<div style="font-style: italic; font-family: monospace;">
						Can not complete the login? <a href="query/logoutExe.php" style="color: red;">Cancel</a>
					</div>
					

				</form>

			</div>
		</div>
	</div>
	
	<script src="login-ui/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="login-ui/vendor/animsition/js/animsition.min.js"></script>
	<script src="login-ui/vendor/bootstrap/js/popper.js"></script>
	<script src="login-ui/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="login-ui/vendor/select2/select2.min.js"></script>
	<script src="login-ui/vendor/daterangepicker/moment.min.js"></script>
	<script src="login-ui/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="login-ui/vendor/countdowntime/countdowntime.js"></script>
	<script src="login-ui/js/main.js"></script>

	<!-- <script type="text/javascript" src="js/jquery.js"></script> -->
	<script type="text/javascript" src="./js/ajax.js"></script>
	<script type="text/javascript" src="./js/sweetalert.js"></script>

</body>
</html>