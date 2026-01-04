<?php

echo "Fetching data from the database using php <br>";

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

    $sql = "select * from contactus";
    $result = mysqli_query($con, $sql);

    $num = mysqli_num_rows($result);
    echo "number of rows ".$num."<br>";

    if($num > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo $row['sno.']." hello, i a am ".$row['name']." and this is my concern ".$row['concern'];
            echo "<br>";
        }
    }

?>