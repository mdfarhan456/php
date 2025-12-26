<?php

echo "Welcome to the world of for each loop <br>";  

$arr = array("apple", "bnana", "orang", "milk");

/*
A for-each loop iterates all values one by one.
A for-each loop goes through each element of a collection/array sequentially, from start to end.
*/

foreach($arr as $value)
{
    echo "$value <br>";
}

?>