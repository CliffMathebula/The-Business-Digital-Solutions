<?php
session_start();
require_once("models/dbcontroller.php");
$db_handle = new DBController();

if (isset($_SESSION["cart_item"])) {
    $total_quantity = 0;
    $total_price = 0;

    foreach ($_SESSION["cart_item"] as $item) {
      $total_quantity += $item["quantity"];
    }
    echo $total_quantity;
} else {
    echo 0;
}

?>