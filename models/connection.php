<?php 

//connects to the server
$mysqli = new mysqli("localhost", "root", "1989@Cliff", "tbds_hosting");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//echo "conted";