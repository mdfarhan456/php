<?php

echo "welcome to associative arrays <br>"; 

// Associative arrsys

$favColour = array (
    "Rohan" => "red",
    "Ritika" => "black",
    "Farhan" => "navyBlue",
    "Sohan" => "yellow"
);

foreach ($favColour as $key => $value) {
   
    echo "FavColour of $key is $value <br>";
}

?>