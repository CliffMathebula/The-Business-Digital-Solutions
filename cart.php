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

            <div class="sec-title p-b-22">
                <h2 class="m-text5 t-center">
                    products Added on Cart
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
                                <th class="column-5">
                                    <a id="btnEmpty" href="cart.php?action=empty" class="flex-c-m sizefull bg-danger bo-rad-23 hov1 text-white trans-0-4">
                                        <small><strong>Empty Cart</strong></small></a>
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

                <!--  -->
                <div class="flex-w flex-sb-m p-b-12">
                    <span class="s-text18 w-size19 w-full-sm">
                        Subtotal:
                    </span>

                    <span class="m-text21 w-size20 w-full-sm">
                        <?php echo "R " . number_format($total_price, 2); ?>
                    </span>
                </div>

                <!--  -->
                <div class="flex-w flex-sb bo10 p-t-15 p-b-20">
                    <span class="s-text18 w-size19 w-full-sm">
                        Quantity:
                    </span>

                    <div class="w-size20 w-full-sm">
                        <p class="m-text21 w-size20 w-full-sm">
                            <?php echo $total_quantity; ?>
                        </p>
                    </div>
                </div>

                <!--  -->
                <div class="flex-w flex-sb-m p-t-26 p-b-30">
                    <span class="m-text22 w-size19 w-full-sm">
                        Total:
                    </span>

                    <span class="m-text21 w-size20 w-full-sm">
                        <?php $total = number_format($total_price, 2) + number_format($total_price, 2) * 0.15;
                        echo 'R' . number_format($total, 2);
                        ?>
                    </span>
                </div>

                <div class="size15 trans-0-4">
                    <!-- Button -->
                    <a href="checkout.php" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
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




    <!-- Footer -->
    <footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
        <div class="flex-w p-b-90">
            <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
                <h4 class="s-text12 p-b-30">
                    GET IN TOUCH
                </h4>

                <div>
                    <p class="s-text7 w-size27">
                        Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
                    </p>

                    <div class="flex-m p-t-30">
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
                    </div>
                </div>
            </div>

            <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                <h4 class="s-text12 p-b-30">
                    Categories
                </h4>

                <ul>
                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Men
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Women
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Dresses
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Sunglasses
                        </a>
                    </li>
                </ul>
            </div>

            <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                <h4 class="s-text12 p-b-30">
                    Links
                </h4>

                <ul>
                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Search
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            About Us
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Contact Us
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Returns
                        </a>
                    </li>
                </ul>
            </div>

            <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                <h4 class="s-text12 p-b-30">
                    Help
                </h4>

                <ul>
                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Track Order
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Returns
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Shipping
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            FAQs
                        </a>
                    </li>
                </ul>
            </div>

            <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
                <h4 class="s-text12 p-b-30">
                    Newsletter
                </h4>

                <form>
                    <div class="effect1 w-size9">
                        <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
                        <span class="effect1-line"></span>
                    </div>

                    <div class="w-size2 p-t-20">
                        <!-- Button -->
                        <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                            Subscribe
                        </button>
                    </div>

                </form>
            </div>
        </div>

        <div class="t-center p-l-15 p-r-15">
            <a href="#">
                <img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
            </a>

            <a href="#">
                <img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
            </a>

            <a href="#">
                <img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
            </a>

            <a href="#">
                <img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
            </a>

            <a href="#">
                <img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
            </a>

            <div class="t-center s-text8 p-t-20">
                Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            </div>
        </div>
    </footer>



    <!-- Back to top -->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </span>
    </div>

    <!-- Container Selection -->
    <div id="dropDownSelect1"></div>
    <div id="dropDownSelect2"></div>



    <script>
        //page onload
        $(document).ready(function() {
            setInterval(function() {
                $("#items").load('items.php')
            }, 1000);
            setInterval(function() {
                $("#items2").load('items.php')
            }, 1000);
            setInterval(function() {
                $("#items3").load('items.php')
            }, 1000);

            setInterval(function() {
                $("#cart-content").load('cart-content.php')
            }, 1000);
            setInterval(function() {
                $("#cart-content2").load('cart-content.php')
            }, 1000);
            setInterval(function() {
                $("#cart-content3").load('cart-content.php')
            }, 1000);

            $('#domain_form').show();
            $('#domain_status').hide();
            $('#email_message').hide();
            $('#suggested').hide();
            $('#suggested1').hide();
            $('#suggested2').hide();

            checkDomain();
            suggestedDomain();
            emailMessage();
            hostingPackages();

        });

        function checkDomain() {

            //submit form
            $('#domain_form').submit(function() {

                var form_values = $('#domain_form').serialize();

                $.ajax({
                    type: 'POST',
                    url: 'models/check_domain.php',
                    data: form_values,
                    success: function(data) {

                        //alert(data);
                        $('#domain_status').html(data);
                    }
                });
                $('#domain_status').show();
                return false;
            });
        }

        function suggestedDomain() {

            //submit form
            $('#domain_form').submit(function() {

                var form_values = $('#domain_form').serialize();

                $.ajax({
                    type: 'POST',
                    url: 'models/domain_suggestion.php',
                    data: form_values,
                    success: function(data) {

                        //alert(data);
                        $('#suggested').html(data);
                    }
                });
                $('#suggested').show();
                $('#suggested1').show();
                $('#suggested2').show();
                return false;
            });

        }

        function emailMessage() {

            //submit form
            $('#email_form').submit(function() {

                var form_values = $('#email_form').serialize();

                $.ajax({
                    type: 'POST',
                    url: 'includes/contact-form.php',
                    data: form_values,
                    success: function(data) {

                        //alert(data);
                        $('#email_message').html(data);
                    }
                });
                $('#email_message').show();
                return false;
            });
        }
    </script>



    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/select2/select2.min.js"></script>
    <script type="text/javascript">
        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
    <script type="text/javascript" src="js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>

    <script>
        function showEditBox(editobj, id) {
            $('#frmAdd').hide();
            $(editobj).prop('disabled', 'true');
            var currentMessage = $("#message_" + id + " .message-content").html();
            var editMarkUp = '<textarea rows="5" cols="80" id="txtmessage_' + id + '">' + currentMessage + '</textarea><button name="ok" onClick="callCrudAction(\'edit\',' + id + ')">Save</button><button name="cancel" onClick="cancelEdit(\'' + currentMessage + '\',' + id + ')">Cancel</button>';
            $("#message_" + id + " .message-content").html(editMarkUp);


        }

        function cancelEdit(message, id) {
            $("#message_" + id + " .message-content").html(message);
            $('#frmAdd').show();
        }

        function cartAction(action, product_code) {
            var queryString = "";
            if (action != "") {
                switch (action) {
                    case "add":
                        queryString = 'action=' + action + '&code=' + product_code + '&quantity=' + $("#qty_" + product_code).val();
                        break;
                    case "remove":
                        queryString = 'action=' + action + '&code=' + product_code;
                        break;
                    case "empty":
                        queryString = 'action=' + action;
                        break;
                }
            }
            jQuery.ajax({
                url: "models/cart_action.php",
                data: queryString,
                type: "POST",
                success: function(data) {


                    if (action != "") {
                        switch (action) {
                            case "add":
                                // $("#add_" + product_code).hide();
                                // $("#added_" + product_code).show();

                                break;
                            case "remove":
                                /// $("#add_" + product_code).show();
                                //$("#added_" + product_code).hide();
                                break;
                            case "empty":
                                //$(".btnAddAction").show();
                                //$(".btnAdded").hide();
                                break;
                        }
                    }
                },
                error: function() {}
            });
        }
    </script>

    <script type="text/javascript">
        $('.block2-btn-addcart').each(function() {
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
            $(this).on('click', function() {
                swal(nameProduct, "is added to cart !", "success");
            });
        });

        $('.block2-btn-addwishlist').each(function() {
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");
            });
        });
    </script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
    <script type="text/javascript">
        $('.parallax100').parallax100();
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>