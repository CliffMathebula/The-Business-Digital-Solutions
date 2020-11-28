<?php

session_start();
//unset username if cart is not empty
if (!empty($_SESSION["cart_item"])) {
    unset($_SESSION["username"]);
} 
//else clear all sessions 
elseif (empty($_SESSION['cart_item'])) {
    session_unset();
    session_write_close();
}
$url = "./index.php";
header("Location: $url");
