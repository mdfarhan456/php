<?php

echo "Creating a Tbale in sql(db) using php <br>";

$servername = "localhost";
$username = "root";
$password = "";
$database = "newdb"; 

$con = mysqli_connect($servername, $username, $password, $database);

if(!$con)
    {
        die("failed to connect.".mysqli_connect_error());
    }
else
    {
        echo "connected successfully! <br>";
    }

    // creating table.

$sql = "CREATE TABLE `data` (
   Sno INT(11) NOT NULL AUTO_INCREMENT,
    Name VARCHAR(50) NOT NULL,
    Role VARCHAR(50) NOT NULL,
    DOJ DATETIME NOT NULL,
    PRIMARY KEY (Sno)
)";
$result = mysqli_query($con ,$sql);

//checking
 
if($result)
{
    echo "table created seccessfully  <br>";
}
else
{
    echo "table not created seccessfully becouse of this error --> ". mysqli_error($con);
}
?>