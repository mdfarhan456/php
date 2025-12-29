<?php

echo "local/global vars in php... <br>";

$a = 5;  //Global variable

function vars()
{
    // $a = 3; //local variable
global $a;  //now can acces global vaiable

$a = 6;  // now can change value of global variabe
    echo "value of a is $a <br>";
}


vars();

echo "value of a is $a <br>";

?>