<?php
session_start();
require_once("models/dbcontroller.php");
$db_handle = new DBController();

if (isset($_SESSION["cart_item"])) {
    $total_quantity = 0;
    $total_price = 0;

    foreach ($_SESSION["cart_item"] as $item) {
        echo   $total_quantity += $item["quantity"];
    }
} else {
    echo 0;
}

?>