<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "contacts";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}


$sql = "DELETE FROM `contactus` WHERE `concern`='i am good' LIMIT 3";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);

echo " number of rows affected $aff <br>";

if($result)
{
    echo "record deleted successfully!";
}
else
{
    echo "record not deleted successfully due to this error -->".mysqli_error($conn);
}

?>