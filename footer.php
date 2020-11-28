    <!-- Footer -->
    <footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
        <div class="flex-w p-b-90">
            <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
                <h4 class="s-text12 p-b-30">
                    GET IN TOUCH
                </h4>
                <div>
                    <p class="s-text7 w-size27">
                        Any questions? Let us know by Email <a href="mail:info@thebusinessdigitalsolutions.co.za">info@thebusinessdigitalsolutions.co.za</a>
                        Or call us
                        on <a href="tel:0659056171">(+27) 065 905 6171</a>
                    </p>
                    <div class="flex-m p-t-30">
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-whatsapp"></a>
                    </div>
                </div>
            </div>
            <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                <h4 class="s-text12 p-b-30">
                    Customers
                </h4>
                <ul>
                    <li class="p-b-9">
                        <a href="www.thehuntingjungle.co.za" class="s-text7">
                            The Hunting Jungle
                        </a>
                    </li>
                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Space Empire X Clothing
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
                            Support
                        </a>
                    </li>
                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            FAQs
                        </a>
                    </li>
                </ul>
            </div>
            <!-- subscription form -->
            <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
                <h4 class="s-text12 p-b-30">
                    Newsletter
                </h4>
                <form id="subscribe">
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
        <!-- end of subscription form -->
        <div class="t-center p-l-15 p-r-15">
            <div class="t-center s-text8 p-t-20">
                Copyright © 2020 All rights reserved. by <a href="https://thebusinessdigitalsolutions.co.za">The
                    Business Digital Solutions</a>
            </div>
        </div>
    </footer>
    <!-- Back to top -->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </span>
    </div>
    <!-- Container Selection1 -->
    <div id="dropDownSelect1"></div>
    
    <script>
        //page onload
        $(document).ready(function() {
            /** Auto Refresh Pages Refresh  **/
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
            /** End Of Auto Refresh Pages Refresh  **/

            $('#domain_form').show();
            $('#domain_status').hide();
            $('#email_message').hide();
            $('#suggested').hide();
            $('#suggested1').hide();
            $('#suggested2').hide();

            checkDomain();
            suggestedDomain();
            emailMessage();
        });

        function checkDomain() {
            //submit check domain form
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
    <script type="text/javascript">
        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
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
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
    <script type="text/javascript" src="js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
    <!-- Add Hosting to Cart -->
    <script>
        
        function cartAction(action, product_code) {
            var queryString = "";
            if (action != "") {
                switch (action) {
                    case "add":
                        queryString = 'action=' + action + '&code=' + product_code + 
                        '&quantity=' + $("#qty_" + product_code).val();
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
                                 //$("#add_" + product_code).hide();
                                 //$("#added_" + product_code).show();
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