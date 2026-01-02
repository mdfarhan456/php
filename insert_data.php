<?php

echo "insert values in mysql using php <br>";

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
    $sql = "INSERT INTO `data` (`Sno.`, `Name`, `Role`, `DOJ`) VALUES ('1', 'farhan', 'admin', '2026-01-02 09:22:00.000000')";
    $result = mysqli_query($con ,$sql);

//checking
 
if($result)
{
    echo "values inserted seccessfully  <br>";
}
else
{
    echo "values not inserted seccessfully becouse of this error --> ". mysqli_error($con);
}



?>