<?php
session_start();

use Phppot\Member;

if (isset($_SESSION["username"]) && isset($_SESSION['cart_item'])) {
  $username = $_SESSION["username"];

  header("Location: checkout.php");
} elseif (!isset($_SESSION['cart_item']) && isset($_SESSION["username"])) {

  header("Location: home.php");
}

if (!empty($_POST["login-btn"])) {
  require_once __DIR__ . '/Model/Member.php';
  $member = new Member();
  $loginResult = $member->loginMember();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>The Business Digital Solutions Admin DashBoard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/tbds.jpeg" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
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
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>
  </div>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth lock-full-bg">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-transparent text-left p-5 text-center">
              <i class="ti-user icon-md text-white mb-0 mb-md-3 mb-xl-0"></i>
              <p class="text text-white">User Login</p>
              <hr />
              <form name="login" action="" method="post" onsubmit="return loginValidation()">
                <?php if (!empty($loginResult)) { ?>
                  <div class="error-msg text-danger mt-4"><?php echo $loginResult . '<br/><br/>'; ?></div>
                <?php } ?>
                <div class="form-group">
                  <label for="examplePassword1" class="text text-white">User Name
                    <span class="required error" id="username-info"></span>
                  </label>
                  <input type="text" class="form-control text-center text-white" name="username" id="username" placeholder="username">
                </div>
                <div class="form-group">
                  <label for="examplePassword1" class="text text-white">Password to unlock
                    <span class="required error" id="login-password-info"></span>
                  </label>
                  <input type="password" class="form-control text-center text-white" name="login-password" id="login-password" placeholder="Password">
                </div>
                <div class="mt-4">
                  <input class="btn btn-block btn-success btn-lg font-weight-medium" type="submit" name="login-btn" id="login-btn" value="Login">
                </div>
                <div class="mt-3 text-center">
                  <a href="../forgot_password/index.php" class="auth-link text-white">Forgot Password?</a>
                </div>
                <div class="mt-3 text-center">
                  <a href="user-registration.php" class="auth-link text-white">Sign-Up Now</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->

  <script>
    function loginValidation() {
      var valid = true;
      $("#username").removeClass("error-field");
      $("#password").removeClass("error-field");

      var UserName = $("#username").val();
      var Password = $('#login-password').val();

      $("#username-info").html("").hide();

      if (UserName.trim() == "") {
        $("#username-info").html("required.").css("color", "#ee0000").show();
        $("#username").addClass("error-field");
        valid = false;
      }
      if (Password.trim() == "") {
        $("#login-password-info").html("required.").css("color", "#ee0000").show();
        $("#login-password").addClass("error-field");
        valid = false;
      }
      if (valid == false) {
        $('.error-field').first().focus();
        valid = false;
      }
      return valid;
    }
  </script>
</body>

</html>