<?php 

echo "welcome to the stage where we are ready to get connected to dataBase <br>";

//connecting to the database

$servername = "localhost";
$username = "root";
$password = "";

//create a connection

$con = mysqli_connect($servername, $username, $password);

if(!$con)
{
    die ("sorry we failed to connect,".mysqli_connect_error());
}

echo "seccessfully connected";
?>