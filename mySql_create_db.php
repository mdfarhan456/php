<?php

echo "creating db in php <br>";

$servername = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password);
    
if(!$con)
    {
        die("failed to connect.".mysqli_connect_error());
    }
else
    {
        echo "connected successfully! <br>";
    }

// creating database.

$qry = "create DATABASE learnDb2";
$result = mysqli_query($con ,$qry);

//checking
 
if($result)
{
    echo "db created seccessfully  <br>";
}
else
{
    echo "db not created seccessfully becouse of this error --> ". mysqli_error($con);
}

?>