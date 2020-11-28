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
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>User Registration Form</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="css/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="images/favicon.png" />
	<link href="assets/css/phppot-style.css" type="text/css" rel="stylesheet" />
	<link href="assets/css/user-registration.css" type="text/css" rel="stylesheet" />
	<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>

</head>

<body>
	<div class="container-scroller">
		<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
			<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
				<a class="navbar-brand brand-logo mr-5" href="../index.php"><img src="images/tbds.jpeg" class="mr-2" alt="logo" /></a>
				<a class="navbar-brand brand-logo-mini" href="../index.php"><img src="images/tbds.jpeg" alt="logo" /></a>
			</div>
			<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
				<ul class="navbar-nav mr-lg-2">
					<li class="nav-item nav-search d-none d-lg-block">
						<div class="input-group">
							<div class="input-group-prepend hover-cursor" id="navbar-search-icon">
								<span class="input-group-text" id="search">
									<button class='btn btn-link'> <i class="ti-search"></i></button>
								</span>
							</div>
							<input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
						</div>
					</li>
				</ul>
				<ul class="navbar-nav navbar-nav-right">
					<li class="nav-item">
					<a href="../#Products" class="text text-muted">Shop</a>
					</li>
				</ul>
				<ul class="navbar-nav navbar-nav-right">
					<li class="nav-item dropdown">
						<a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
							<i class="ti-shopping-cart mx-0"></i>

							<?php if (isset($_SESSION["cart_item"])) {
								$total_quantity = 0;
								$total_price = 0;

								foreach ($_SESSION["cart_item"] as $item) {
									$total_quantity += $item["quantity"];
								}
								echo '<strong class=" text text-success ">' . $total_quantity . '</strong>';
							} else {
								echo '<strong class="text text-danger">0</strong>';
							}
							?> </a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="container-scroller mt-4">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="content-wrapper d-flex align-items-center auth px-0">
				<div class="row w-100 mx-0">
					<div class="col-lg-4 mx-auto">
						<br /><br />
						<div class="auth-form-light text-left py-5 px-4 px-sm-5">
							<div class="text-center">
								<i class="ti-user ti-xl"></i>
							</div>
							<h4 class="text text-center mt-4">New here?</h4>
							<h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
							<form name="sign-up" action="" method="post" onsubmit="return signupValidation()">
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
										<div class="server-response success-msg"><?php echo $registrationResponse["message"].'<a href="login.php" class="text text-info"> Sign in</a>'; ?></div>
									<?php
									}
									?>
								<?php
								}
								?>
								<div class="error-msg" id="error-msg"></div>
								<div class="form-group">
									<div class="form-label">
										Username <span class="required error" id="username-info"></span>
									</div>
									<input type="text" class="form-control form-control-lg" name="username" id="username" placeholder="Username">
								</div>
								<div class="error-msg" id="error-msg"></div>
								<div class="form-group">
									<div class="form-label">
										Email<span class="required error" id="email-info"></span>
									</div>
									<input class="form-control form-control-lg" type="email" name="email" id="email">
								</div>
								<div class="form-group">
									<div class="form-label">
										Password<span class="required error" id="signup-password-info"></span>
									</div>
									<input class="form-control form-control-lg" type="password" name="signup-password" id="signup-password">
								</div>
								<div class="form-group">
									<div class="form-label">
										Confirm Password<span class="required error" id="confirm-password-info"></span>
									</div>
									<input class="form-control form-control-lg" type="password" name="confirm-password" id="confirm-password">
								</div>
								<div class="form-group">
									<input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="signup-btn" id="signup-btn" value="Sign up">
								</div>
								<div class="row">
									Already Registered? &nbsp; <a href="login.php" class="text text-info"> Sign in</a>
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