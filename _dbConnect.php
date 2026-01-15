<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "contacts";

$con = mysqli_connect($servername, $username, $password, $database);
if(!$con)
    {
        die("failed to connect.".mysqli_connect_error());
    }
else
    {
        echo "connected successfully! <br>";
    }

?>