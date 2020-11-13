<?php
session_start();

if (!empty($_REQUEST["action"])) {
    switch ($_REQUEST["action"]) {

        case "remove":
            if (!empty($_SESSION["cart_item"])) {
                foreach ($_SESSION["cart_item"] as $k => $v) {
                    if ($_REQUEST["code"] == $k)
                        unset($_SESSION["cart_item"][$k]);
                    header('Location:cart.php');

                    if (empty($_SESSION["cart_item"]))
                        unset($_SESSION["cart_item"]);
                    header('Location:cart.php');
                }
            }
            break;
        case "empty":
            unset($_SESSION["cart_item"]);
            header('Location:cart.php');
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>The Business Digital Solutions</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <script type="text/javascript" src="jquery.min.js"></script>
</head>

<body class="animsition">
    <!-- header fixed -->
    <div class="wrap_header fixed-header2 trans-0-4">
        <!-- Logo -->
        <a href="index.php">
            <img src="images/icons/tbds.jpeg" width="200" height="65" alt="IMG-LOGO">
        </a>

        <!-- Menu -->
        <div class="wrap_menu">
            <nav class="menu">
                <ul class="main_menu">
                    <li>
                        <a href="#Products">Products & Services</a>
                    </li>

                    <li>
                        <a href="#book-us">Book-Us</a>
                    </li>
                    <li>
                        <a href="blog.html">FAQs</a>
                    </li>

                    <li>
                        <a href="#contact">Contact</a>
                    </li>

                    <li>
                        <a href="about.html">About</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="topbar-child2">

            <!--  -->
            <a href="#" class="header-wrapicon1 dis-block m-l-30">
                <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
            </a>

            <span class="linedivide1"></span>

            <div class="header-wrapicon2 m-r-13">
                <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                <span class="header-icons-noti" id="items">

                </span>

                <!-- Header cart noti -->
                <div class="header-cart header-dropdown" id="cart-content">


                </div>
            </div>
        </div>
    </div>

    <!-- top noti -->
    <div class="flex-c-m size22 bg-info s-text21 pos-relative">
        <p class="text text-white text-center"> <strong> We Deliver Cost Effective & High Quality Software! </strong></p>
    </div>

    <!-- Header -->
    <header class="header2">
        <!-- Header desktop -->
        <div class="container-menu-header-v2 p-t-26">
            <div class="topbar2">
                <div class="topbar-social">
                    <a href="#" class="topbar-social-item fa fa-facebook"></a>
                    <a href="#" class="topbar-social-item fa fa-instagram"></a>
                    <a href="https://api.whatsapp.com/send?phone=+27659056171&text=Hi%20There!, Please send us your message, we will reply to you back as soon as possible" class="topbar-social-item fa fa-whatsapp"></a>
                    <a href="#" class="topbar-social-item fa fa-linkedin"></a>

                    <!--<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a> -->
                </div>

                <!-- Logo2 -->
                <a href="index.php">
                    <img src="images/icons/tbds.jpeg" width="250" height="100" alt="IMG-LOGO">
                </a>

                <div class="topbar-child2">
                    <!--  -->
                    <a href="#" class="header-wrapicon1 dis-block m-l-30">
                        <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                    </a>
                    <span class="linedivide1"></span>
                    <div class="header-wrapicon2 m-r-13">
                        <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                        <span class="header-icons-noti" id="items2">
                        </span>

                        <!-- Header cart noti -->
                        <div class="header-cart header-dropdown" id="cart-content2">

                        </div>
                    </div>
                </div>
            </div>


            <div class="wrap_header">

                <!-- Menu Desktop-->
                <div class="wrap_menu">
                    <nav class="menu">
                        <ul class="main_menu">

                            <li>
                                <a href="#Products">Products & Services</a>
                            </li>

                            <li>
                                <a href="#book-us">Book Us</a>
                            </li>


                            <li>
                                <a href="blog.html">FAQs</a>
                            </li>

                            <li>
                                <a href="#contact">Contact</a>
                            </li>

                            <li>
                                <a href="about.html">About</a>
                            </li>

                        </ul>
                    </nav>
                </div>

                <!-- Header Icon -->
                <div class="header-icons">

                </div>
            </div>
        </div>


        <!-- Header Mobile -->
        <div class="wrap_header_mobile">
            <!-- Logo moblie -->
            <a href="index.php" class="logo-mobile">
                <img src="images/icons/tbds.jpeg" alt="IMG-LOGO">
            </a>

            <!-- Button show menu -->
            <div class="btn-show-menu">
                <!-- Header Icon mobile -->
                <div class="header-icons-mobile">
                    <a href="#">
                        <img src="images/icons/icon-header-01.png" width="100%">
                    </a>

                    <span class="linedivide2"></span>

                    <div class="header-wrapicon2">
                        <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                        <span class="header-icons-noti js-show-header-dropdown" id="items3">

                        </span>
                        <!-- Header cart noti -->
                        <div class="header-cart header-dropdown" id="cart-content3">

                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>
        </div>

        <!-- Menu Mobile -->
        <div class="wrap-side-menu">
            <nav class="side-menu">
                <ul class="main-menu">

                    <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                        <div class="topbar-child2-mobile">
                            <span class="topbar-email">
                                <small> info@thebusinessdigitalsolutions.co.za</small>
                            </span>

                        </div>
                    </li>

                    <li class="item-topbar-mobile p-l-10">
                        <div class="topbar-social-mobile">
                            <a href="#" class="topbar-social-item fa fa-facebook"></a>

                            <a href="#" class="topbar-social-item fa fa-instagram"></a>
                            <a href="https://api.whatsapp.com/send?phone=+27659056171&text=Hi%20There!, Please send us your message, we will reply to you back as soon as possible" class="topbar-social-item fa fa-whatsapp"></a>
                            <a href="#" class="topbar-social-item fa fa-linkedin"></a>

                            <!--
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a> -->
                        </div>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="#Products">Products & Services</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="#book-us">Book-US</a>
                    </li>


                    <li class="item-menu-mobile">
                        <a href="blog.html">FAQs</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="about.html">About</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>


    <!-- Cart -->
    <section class="cart bgwhite p-t-70 p-b-100">
        <div class="container">

            <div class="sec-title">
                <h2 class="m-text5 t-center">
                    <small>Cart Items</small>
                </h2>
                <br />
            </div>

            <!-- Cart item -->
            <div class="container-table-cart pos-relative">
                <div class="wrap-table-shopping-cart bgwhite">


                    <?php
                    if (isset($_SESSION["cart_item"])) {
                        $total_quantity = 0;
                        $total_price = 0;
                    ?>





                        <table class="table-shopping-cart">
                            <tr class="table-head">
                                <th class="column-1">Product Name</th>
                                <th class="column-3 text-center">Unit Price</th>
                                <th class="column-4 text-center">Quantity</th>
                                <th class="column-5 text-center">Total</th>
                                <th class="column-6">
                                    <a id="btnEmpty" href="cart.php?action=empty" class="flex-c-m sizefull bo-rad-23 hov1 text-white trans-0-4 btn btn-primary">
                                        <small>Empty Cart</small></a>
                                </th>
                            </tr>


                            <?php
                            foreach ($_SESSION["cart_item"] as $item) {
                                $item_price = $item["quantity"] * $item["price_per_month"];
                            ?>

                                <tr class="table-row">
                                    <td class="column-1">
                                        <div class="cart-img-product b-rad-4 o-f-hidden">
                                            <?php echo $item["product_name"]; ?>
                                        </div>
                                    </td>

                                    <td class="column-2 text-center"><?php echo "R " . $item["price_per_month"]; ?></td>
                                    <td class="column-3 text-center">
                                        <div class="column-4 text-center">
                                            <?php echo $item["quantity"]; ?>
                                        </div>
                                    </td>
                                    <td class="column-5"><?php echo "R " . number_format($item_price, 2); ?></td>

                                    <td column="column-6">
                                        <div class="w-size17">
                                            <a href="cart.php?action=remove&code=<?php echo $item["code"]; ?>"><img src="models/icon-delete.png" alt="Remove Item" /></a>
                                        </div>
                                    </td>

                                </tr>
                            <?php
                                $total_quantity += $item["quantity"];
                                $total_price += ($item["price_per_month"] * $item["quantity"]);
                            }
                            ?>
                        </table>

                </div>
            </div>

            <div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
                <div class="flex-w flex-m w-full-sm">
                    <div class="size11 bo4 m-r-10">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Coupon Code">
                    </div>

                    <div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
                        <!-- Button -->
                        <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                            Apply coupon
                        </button>
                    </div>
                </div>
            </div>


            <!-- Total -->
            <div class="bo8 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
                <h5 class="m-text20 p-b-24">
                    Cart Totals
                </h5>

                <!-- Sub Totals -->
                <div class="flex-w flex-sb-m p-b-12">
                    <span class="m-text19 w-size19 w-full-sm">
                        Subtotal:
                    </span>

                    <span class="m-text21 w-size20 w-full-sm">
                        <?php echo "R " . number_format($total_price, 2); ?>
                    </span>
                </div>

                <!-- quatity -->
                <div class="flex-w flex-sb bo10 p-t-15 p-b-20">
                    <span class="m-text19 w-size19 w-full-sm">
                        Quantity:
                    </span>

                    <div class="w-size20 w-full-sm">
                        <p class="m-text21 w-size20 w-full-sm">
                            <?php echo $total_quantity; ?>
                        </p>
                    </div>
                </div>

                <!-- Totals including vat -->
                <div class="flex-w flex-sb-m p-t-26 p-b-30">
                    <span class="m-text19 w-size20 w-full-sm">
                        Total Inc VAT @ 0.15%
                    </span>

                    <span class="m-text21 w-size20  text-dark">
                        <?php $total = number_format($total_price, 2) + number_format($total_price, 2) * 0.15;
                        echo 'R' . number_format($total, 2);
                        ?>
                    </span>
                </div>


                <div class="size15 trans-0-4">
                    <!-- Button -->
                    <a href="login/checkout.php" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                        Proceed to Checkout
                    </a>
                </div>
            </div>
        </div>

    <?php
                    } else {
    ?>

        <div class="flex-c-m size22 bg0 s-text21 pos-relative">
            Your Cart Is Empty!
            <a href="index.php#Products" class="s-text22 hov6 p-l-5">
                Shop Now
            </a>

            <button class="flex-c-m pos2 size23 colorwhite eff3 trans-0-4 btn-romove-top-noti">
                <i class="fa fa-remove fs-13" aria-hidden="true"></i>
            </button>
        </div>
    <?php
                    }
    ?>
    </section>

    <?php
    include 'footer.php';
    ?>