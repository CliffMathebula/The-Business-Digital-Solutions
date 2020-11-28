<?php
session_start();
require_once("models/dbcontroller.php");
$db_handle = new DBController();

/**
 *checks if the cart is not empty  
 * if cart is not empty displays cat items and total and link to checkout or view cart 
 * 
 * Else if the  caart items is empty dispays message cat empty and link to shop
 * 
 **/
if (isset($_SESSION["cart_item"])) {
    $total_quantity = 0;
    $total_price = 0;

    foreach ($_SESSION["cart_item"] as $item) {
        $item_price = $item["quantity"] * $item["price_per_month"];
?>
        <ul class="header-cart-wrapitem">
            <li class="header-cart-item">
                <div class="header-cart-item-txt">
                    <a href="#" class="header-cart-item-name">
                        <?php echo $item["product_name"]; ?>
                    </a>
                    <span class="header-cart-item-info">
                        <?php
                        echo $item["quantity"];
                        $total_quantity += $item["quantity"]; ?> x <?php echo "R " . number_format($item_price, 2) . " Per Month"; ?>
                    </span>
                </div>
            </li>
        </ul>
    <?php
        $total_price += ($item["price_per_month"] * $item["quantity"]);
        $total = number_format($total_price, 2) + number_format($total_price, 2) * 0.15;
        $total = number_format($total, 2);
    }
    echo '<div class="header-cart-total">Total : R' . $total . '</div>';
    ?>
    <div class="header-cart-buttons">
        <div class="header-cart-wrapbtn">
            <!-- link to redirect to cart-->
            <a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                View Cart
            </a>
        </div>
        <div class="header-cart-wrapbtn">
            <!-- link to redirect to checkout form-->
            <a href="login/checkout.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                Check Out
            </a>
        </div>
    </div>
<?php
} else { //if cart is empty display below message with link to shop
    echo ' <div class="flex-c-m size22 bg0 s-text21 pos-relative"> Your Cart Is Empty!
            <a href="index.php#Products" class="s-text22 hov6 p-l-5">
                Shop Now
            </a>
        </div>';
}
?>