<?php
session_start();
include "connection.php";
$total_price = number_format($_SESSION['total_price'], 2);
$username = $mysqli->real_escape_string($_SESSION["username"]);
$name = $_POST['firstname'];
$surname = $_POST['lastsurname'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$city = $_POST['city'];
$surbub = $_POST['surbub'];
$street = $_POST['street'];
$code = $_POST['code'];
$email = $_POST['email'];

if (!empty($name || $surname || $mobile || $gender || $country || $city || $surbub || $street || $code || $email)) {

// this query with escaped will insert data into database table
    if ($mysqli->query("INSERT INTO `Orders` (`id`, `user_name`, `name`, `surname`, `email`, `mobile`,
`gender`, `country`, `city`, `surbub`, `street`, `code`, `product_name`, `price`, `billing_cycle`)
VALUES ( NULL, '$username', '$name', '$surname', '$email', '$mobile', '$gender', '$country', '$city', '$surbub', '$street',
'$code', 'Hosting', '$total_price', 'monthly')")) {

        echo "Order Successfully Completed";
        unset($_SESSION["cart_item"]);
        //header('location:home.php');
    } else {
        echo "Failed";
    }

} else {
    echo "Fill all required Fields";
}
$mysqli->close();
