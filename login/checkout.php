<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Check Out Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href=",/../images/icons/favicon.png" />
    <link rel="stylesheet" type="text/css" href="./../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./../css/util.css">
    <link rel="stylesheet" type="text/css" href="./../css/main.css">

    <link href="assets/css/phppot-style.css" type="./../text/css" rel="stylesheet" />
    <link href="assets/css/user-registration.css" type="./../text/css" rel="stylesheet" />
    <script src="vendor/jquery/jquery-3.3.1.js" type="t./../ext/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial;
            font-size: 17px;
            padding: 8px;
        }

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

        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 100%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 17px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        a {
            color: #2196F3;
        }

        hr {
            border: 1px solid lightgrey;
        }

        span.price {
            float: right;
            color: grey;
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
                    <img src="./../images/icons/tbds.jpeg" width="200" height="80" alt="IMG-LOGO">
                </a>

                <!-- Menu -->
                <div class="wrap_menu">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li>
                                <a href="./../index.php">Home</a>
                            </li>

                            <li>
                                <a href="./../index.php#Products">Products & Services</a>
                            </li>

                            <li>
                                <a href="about.html">About</a>
                            </li>

                            <li>
                                <a href="contact.html">Contact</a>
                            </li>


                            <li class="sale-noti">
                                <a href="logout.php">Sign Out</a>
                            </li>

                        </ul>
                    </nav>
                </div>

                <!-- Header Icon -->
                <div class="header-icons">
                    <div class="header-wrapicon2">
                        <a href="./../cart.php"> <img src="./../images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                            <span class="header-icons-noti">
                                <?php if (isset($_SESSION["cart_item"])) {
                                    $total_quantity = 0;
                                    $total_price = 0;

                                    foreach ($_SESSION["cart_item"] as $item) {
                                        $total_quantity += $item["quantity"];
                                    }
                                    echo $total_quantity;
                                } else {
                                    echo '0';
                                }
                                ?>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <br /><br /><br /><br /><br /><br />

        <h2 class="text text-center text-dark mt-4 "><small>INVOICE CHECKOUT FORM</small></h2>
        <p class="text text-dark text-center mt-4">Please Complete The Form Below To Complete Your Order!</p>
        <div class="row mt-4">
            <div class="col-75">
                <div class="container">

                    <form action="/action_page.php">

                        <div class="row">
                            <div class="col-50">
                                <h3 class="text text-dark mt-4"><small>BILLING ADDRESS</small></h3>
                                <label class="mt-4" for="fname"><i class="fa fa-user"></i> Full Name</label>
                                <input type="text" class="border border-dark" id="fname" name="firstname" placeholder="John M. Doe" required/>
                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input type="text" id="email" class="border border-dark" name="email" placeholder="john@example.com" required/>
                                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                <input type="text" id="adr" class="border border-dark" name="address" placeholder="Street Address" required/>
                                <label for="city"><i class="fa fa-institution"></i> City</label>
                                <input type="text" id="city" class="border border-dark" name="city" placeholder="Johannesburg" required/>

                                <div class="row">
                                    <div class="col-50">
                                        <label for="state">Surbub</label>
                                        <input type="text" id="surbub" class="border border-dark" name="surbub" placeholder="Johannesburg South" required/>
                                    </div>
                                    <div class="col-50">
                                        <label for="zip">Postal Code</label>
                                        <input type="text" class="border border-dark" id="postal_code" name="postal_code" placeholder="2000" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-50">
                                <h3 class="text text-dark mt-4"> <small>PAYMENT OPTIONS</small></h3>
                                <label class="mt-4" for="fname">Accepted Payments Methods</label>
                                <div class="icon-container ">
                                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                                    
                                    <i class="fa fa-cc-paypal" style="color:blue;"></i>
                                </div>

                                <label for="cname">Names Printed on Card</label>
                                <input type="text" class="border border-dark" id="cname" name="cardname" placeholder="John More Doe" require/>
                                <label for="ccnum">Credit card number</label>
                                <input type="text" class="border border-dark" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" require/>
                                <label for="expmonth">Exp Month</label>
                                <input type="text" id="expmonth" class="border border-dark" name="expmonth" placeholder="September" required/>
                                <div class="row">
                                    <div class="col-50">
                                        <label for="expyear">Exp Year</label>
                                        <input type="text" class="border border-dark" id="expyear" name="expyear" placeholder="2022" required/>
                                    </div>
                                    <div class="col-50">
                                        <label for="cvv">CVV</label>
                                        <input type="text" id="cvv" class="border border-dark" name="cvv" placeholder="352" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label>
                            <input type="checkbox" name="sameadr"> Shipping address same as billing
                        </label>
                        <input type="submit" value="Continue to checkout" class="bg-dark btn btninfo" />
                    </form>
                </div>
            </div>

            <div class="col-25">
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
                                ?></b></span></h4>
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
                                    $total = number_format($total_price, 2) + number_format($total_price, 2) * 0.15;
                                    echo 'R' . number_format($total, 2);
                                } else {
                                    echo 'R.0.00';
                                }
                                ?>
                            </b></span></p>
                </div>
            </div>
        </div>

<?php
    include './../footer.php';
?>