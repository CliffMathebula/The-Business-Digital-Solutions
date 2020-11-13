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
    <title>Customer Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <br />
        <div class="panel-group">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="text text-center">Customer Dash Board</h3>
                </div>
                <div class="panel-body">
                    <p class="text text-dark">Welcome <?php echo $username;?>&nbsp; <a href="logout.php" class="btn btn-dark">Sign Out</a></p>
                </div>
            </div>
            <div class="well well-lg">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-info"><a href="#" class="text text-primary">Tickets</a></li>
                        <li class="list-group-item"><a href="#" class="text text-primary">Domains</a></li>
                        <li class="list-group-item"><a href="#" class="text text-primary">Hosting</a></li>
                        <li class="list-group-item"><a href="#" class="text text-primary">Orders</a></li>
                        <li class="list-group-item"><a href="#" class="text text-primary">Invoices</a></li>
                        <li class="list-group-item"><a href="#" class="text text-primary">Profile</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>


</body>

</html>