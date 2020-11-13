<?php

use Phppot\Member;

if (!empty($_POST["signup-btn"])) {
	require_once './Model/Member.php';
	$member = new Member();
	$registrationResponse = $member->registerMember();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../images/icons/favicon.png" />
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">

	<link href="assets/css/phppot-style.css" type="text/css" rel="stylesheet" />
	<link href="assets/css/user-registration.css" type="text/css" rel="stylesheet" />
	<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>

</head>

<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">

			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.html">
					<img src="../images/icons/tbds.jpeg" width="200" height="80" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="index.html">Home</a>
							</li>

							<li>
								<a href="product.html">Shop</a>
							</li>

							<li class="sale-noti">
								<a href="product.html">Sale</a>
							</li>

							<li>
								<a href="cart.html">Features</a>
							</li>

							<li>
								<a href="blog.html">Blog</a>
							</li>

							<li>
								<a href="about.html">About</a>
							</li>

							<li>
								<a href="contact.html">Contact</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="../images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="../images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

					</div>
				</div>
			</div>
		</div>
		<BR /><BR /><BR /><BR /><BR /><BR />

		<div class="phppot-container">
			<div class="sign-up-container">
				<div class="login-signup">
					<a href="index.php">Login</a>
				</div>
				<div class="">
					<form name="sign-up" action="" method="post" onsubmit="return signupValidation()">
						<div class="signup-heading">Registration</div>
						<?php
						if (!empty($registrationResponse["status"])) {
						?>
							<?php
							if ($registrationResponse["status"] == "error") {
							?>
								<div class="server-response error-msg"><?php echo $registrationResponse["message"]; ?></div>
							<?php
							} else if ($registrationResponse["status"] == "success") {
							?>
								<div class="server-response success-msg"><?php echo $registrationResponse["message"]; ?></div>
							<?php
							}
							?>
						<?php
						}
						?>
						<div class="error-msg" id="error-msg"></div>
						<div class="row">
							<div class="inline-block">
								<div class="form-label">
									Username<span class="required error" id="username-info"></span>
								</div>
								<input class="input-box-330 border border-dark" type="text" name="username" id="username">
							</div>
						</div>
						<div class="row">
							<div class="inline-block">
								<div class="form-label">
									Email<span class="required error" id="email-info"></span>
								</div>
								<input class="input-box-330 border border-dark" type="email" name="email" id="email">
							</div>
						</div>
						<div class="row">
							<div class="inline-block">
								<div class="form-label">
									Password<span class="required error" id="signup-password-info"></span>
								</div>
								<input class="input-box-330 border border-dark" type="password" name="signup-password" id="signup-password">
							</div>
						</div>
						<div class="row">
							<div class="inline-block">
								<div class="form-label">
									Confirm Password<span class="required error" id="confirm-password-info"></span>
								</div>
								<input class="input-box-330 border border-dark" type="password" name="confirm-password" id="confirm-password">
							</div>
						</div>
						<div class="row">
							<input class="btn" type="submit" name="signup-btn" id="signup-btn" value="Sign up">
						</div>

						<div class="row">
							<a href="../forgot_password" class="text text-success"> Forgot Password</a>
						</div>

					</form>
				</div>
			</div>
		</div>

		<script>
			function signupValidation() {
				var valid = true;

				$("#username").removeClass("error-field");
				$("#email").removeClass("error-field");
				$("#password").removeClass("error-field");
				$("#confirm-password").removeClass("error-field");

				var UserName = $("#username").val();
				var email = $("#email").val();
				var Password = $('#signup-password').val();
				var ConfirmPassword = $('#confirm-password').val();
				var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

				$("#username-info").html("").hide();
				$("#email-info").html("").hide();

				if (UserName.trim() == "") {
					$("#username-info").html("required.").css("color", "#ee0000").show();
					$("#username").addClass("error-field");
					valid = false;
				}
				if (email == "") {
					$("#email-info").html("required").css("color", "#ee0000").show();
					$("#email").addClass("error-field");
					valid = false;
				} else if (email.trim() == "") {
					$("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
					$("#email").addClass("error-field");
					valid = false;
				} else if (!emailRegex.test(email)) {
					$("#email-info").html("Invalid email address.").css("color", "#ee0000")
						.show();
					$("#email").addClass("error-field");
					valid = false;
				}
				if (Password.trim() == "") {
					$("#signup-password-info").html("required.").css("color", "#ee0000").show();
					$("#signup-password").addClass("error-field");
					valid = false;
				}
				if (ConfirmPassword.trim() == "") {
					$("#confirm-password-info").html("required.").css("color", "#ee0000").show();
					$("#confirm-password").addClass("error-field");
					valid = false;
				}
				if (Password != ConfirmPassword) {
					$("#error-msg").html("Both passwords must be same.").show();
					valid = false;
				}
				if (valid == false) {
					$('.error-field').first().focus();
					valid = false;
				}
				return valid;
			}
		</script>
</BODY>

</HTML>