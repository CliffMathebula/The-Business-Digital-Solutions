<?php
session_start();
require_once("models/dbcontroller.php");
$db_handle = new DBController();

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
        <?php $total_price += ($item["price_per_month"] * $item["quantity"]); ?>

        <?php $total = number_format($total_price, 2) + number_format($total_price, 2) * 0.15;
        $total = number_format($total, 2);
        ?>

<?php
    }
    echo '<div class="header-cart-total">
    Total : R' . $total . '</div>';
} else {
    echo '    <div class="flex-c-m size22 bg0 s-text21 pos-relative">
            Your Cart Is Empty!
            <a href="index.php#Products" class="s-text22 hov6 p-l-5">
                Shop Now
            </a>
        </div>';
}
?>
<div class="header-cart-buttons">
    <div class="header-cart-wrapbtn">
        <!-- Button -->
        <a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
            View Cart
        </a>
    </div>

    <div class="header-cart-wrapbtn">
        <!-- Button -->
        <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
            Check Out
        </a>
    </div>
</div>