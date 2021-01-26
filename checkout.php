<?php
session_start();
require_once("DBController.php");

if (isset($_SESSION["username"])) {
    if (!isset($_SESSION["cart_item"])) {
        header("Location: ../cart.php");
    } else {
        $username = $_SESSION["username"];
    }
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    $url = "./index.php";
    header("Location: $url");
}
//select user details
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    if ($query = $mysqli->query("SELECT * FROM users_table WHERE username = '$username'")) {
        if (mysqli_num_rows($query) >= 1) {
            foreach ($query as $key => $value) {
                $name = $value['name'];
                $surname = $value['surname'];
                $mobile = $value['mobile'];
                $gender = $value['gender'];
                $country = $value['country'];
                $city = $value['city'];
                $surbub = $value['surbub'];
                $street = $value['street'];
                $code = $value['code'];
                $email = $value['email'];
            }
        } else {
            echo "no data";
        }
    } else {
        header('location:login.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Checkout Form</title>
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
    <link href="assets/css/phppot-style.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/user-registration.css" type="text/css" rel="stylesheet" />
    <script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
    <script type="text/javascript" src="./jquery.min.js"></script>
    <style>
        * {
            box-sizing: border-box;
        }

        .row {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
        }

        .col-25 {
            -ms-flex: 25%;
            /* IE10 */
            flex: 25%;
        }

        .col-50 {
            -ms-flex: 50%;
            /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%;
            /* IE10 */
            flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
            padding: 0 16px;
        }

        .container {
            background-color: #f2f2f2;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 3px;
        }

        .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        a {
            color: #2196F3;
        }

        span.price {
            float: right;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
            .row {
                flex-direction: column-reverse;
            }

            .col-25 {
                margin-bottom: 20px;
            }
        }
    </style>
</head>
</body>
<div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo mr-5" href="../index.php"><img src="images/tbds.jpeg" class="mr-2" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="../index.php"><img src="images/tbds.jpeg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav navbar-nav-center">
                <li class="nav-item text-right">
                    <a href="../#Products" class="text text-dark">Shop</a>
                </li>
                <li class="nav-item text-right">
                    <a href="../#Products" class="text text-dark">Book Us</a>
                </li>
                <li class="nav-item text-right">
                    <a href="../#Products" class="text text-dark">Contact Us</a>
                </li>
                <li class="nav-item text-right">
                    <a href="../#Products" class="text text-dark">About Us</a>
                </li>
                <li class="nav-item text-right">
                    <a href="logout.php" class="text text-primary">Sign Out</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="ti-shopping-cart mx-0"></i>
                        <?php
                        if (isset($_SESSION["cart_item"])) {
                            $total_quantity = 0;
                            $total_price = 0;

                            foreach ($_SESSION["cart_item"] as $item) {
                                $total_quantity += $item["quantity"];
                            }
                            echo '<strong class=" text text-success ">' . $total_quantity . '</strong>';
                        } else {
                            echo '<strong class="text text-danger">0</strong>';
                        }
                        ?>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div> <br /><br />
<!-- Checkout form -->
<div class="mt-4">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">CheckOut Form</h4>
                        <p class="text text-primary">
                            <small> Available Payment Option : <b>Electronic Fund Transfer.</b></small> 
                        </p>
                        <p class="alert alert-primary">Our Banking Details Are Attached On Order Confirmation Email Also On The Receipt Attached! </p>
                        
                        <p class="alert alert-success" id="success_tag"></p>
                        <form class="forms-sample mt-4" id="checkout">
                            <div class="form-group">
                                <label for="exampleInputUsername1">First Name</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" value="<?php echo $name; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Last Name</label>
                                <input type="text" class="form-control" id="lastname" placeholder="Last Name" value="<?php echo $surname; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Mobile Number</label>
                                <input type="number" class="form-control" id="mobile" name="mobile" placeholder="0659056171" value="<?php echo $mobile; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="<?php echo $email; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="SelectGender">Gender</label>
                                <select class="form-control" id="gender" name="SelectGender" required>
                                    <option vale="<?php echo $gender; ?>"><?php echo $gender; ?></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="InputCity1">Country</label>
                                <input type="text" class="form-control" id="country" name="country" placeholder="Country" value="<?php echo $country; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="InputCity1">City</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="City" value="<?php echo $city; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="InputCity1">Surbub</label>
                                <input type="text" class="form-control" name="surbub" id="surbub" placeholder="Surbub" value="<?php echo $surbub; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="Textarea1">Street Address</label>
                                <input type="text" class="form-control" id="street" name="street" placeholder="Street Address" value="<?php echo $street; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="InputCity1">Postal Code</label>
                                <input type="number" class="form-control" id="code" name="code" placeholder="Postal Code" value="<?php echo $code; ?>" required>
                            </div>

                            <div class="form-group">
                                <label class="form-check-label text-success">
                                    <input type="checkbox" id="ckeckbox" name="ckeckbox" class="form-control mt-2" required>
                                    <strong> By ticking this checkbox, you officially accept our terms & Conditions! </strong>
                                </label>
                            </div>
                            <button type="submit" id="submit" name="submit" class="btn btn-primary btn-block">Check-Out</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Cart Items -->
            <div class="col-25 mt-2">
                <div class="container">
                    <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i>
                            <b><?php if (isset($_SESSION["cart_item"])) {
                                    $total_quantity = 0;
                                    $total_price = 0;

                                    foreach ($_SESSION["cart_item"] as $item) {
                                        $total_quantity += $item["quantity"];
                                    }
                                    echo $total_quantity;
                                } else {
                                    echo '0';
                                }
                                ?></b>
                        </span>
                    </h4>
                    <?php
                    if (isset($_SESSION["cart_item"])) {
                        $total_quantity = 0;
                        $total_price = 0;

                        foreach ($_SESSION["cart_item"] as $item) {
                            $item_price = $item["quantity"] * $item["price_per_month"];
                    ?>
                            <p><a class="ext text-dark" href="#"> <small><?php echo $item["product_name"]; ?></small>
                                </a> <span class="price"><?php echo '&nbsp; <small class="text text-dark">R' . number_format($item["price_per_month"], 2) . '</small>'; ?></span></p>
                    <?php
                        }
                    } else {
                        echo '<p class="text text-danger"> Cart Is Empty! <a href="index.php#Products"> Shop Now</a>';
                    }
                    ?>
                    <hr>
                    <p class="text text-info"><small><strong>Total Incl VAT@ 0.15%</strong> </small> <span class="price" style="color:black"><b>
                                <?php if (isset($_SESSION["cart_item"])) {
                                    $total_quantity = 0;
                                    $total_price = 0;

                                    foreach ($_SESSION["cart_item"] as $item) {
                                        $total_price += ($item["price_per_month"] * $item["quantity"]);
                                    }
                               $_SESSION['total_price'] = $total = number_format($total_price, 2) + number_format($total_price, 2) * 0.15;
                                    echo 'R' . number_format($total, 2);
                                } else {
                                    echo 'R.0.00';
                                }
                                ?>
                            </b>
                        </span>
                    </p>
                </div>
            </div>
        </div>
        <!-- footer -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="http://thebusinessdigitalsolutions.co.za/" target="_blank">The Business Digital Solutions</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Designed & Mentained By The Business Digital Solutions </span>
            </div>
        </footer>
    </div>
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="vendors/base/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/template.js"></script>
<script src="js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="js/file-upload.js"></script>
<!-- End custom js for this page-->
<script>
    //page onload
    $(document).ready(function() {
        /** Auto Refresh Pages Refresh  **/
        $('#success_tag').hide();

        checkout();
    });

    function checkout() {
        //submit checkout form
        $('#checkout').submit(function() {
            //assigns form data
            var form_values = $('#checkout').serialize();
            //Ajax function to submit data
            $.ajax({
                type: 'POST',
                url: 'checkout_script.php',
                data: form_values,
                success: function(data) {
                    //alert(data);
                    $('#success_tag').html(data);
                },
                complete: function() {
                    $('body, html').animate({
                        scrollTop: $('body').offset().top
                    }, 'slow');
                }
            });
            $('#success_tag').show();
            var delay = 2000; 
            var url = 'home.php'
            setTimeout(function(){ window.location = url; }, delay);
            return false;
        });
    }
</script>

</body>

</html>