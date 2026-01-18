<?php

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