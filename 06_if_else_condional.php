<?php
 
// $a = 65;
// $b = 75;

// if($a > 100)
// {
//     echo "a is greater than 100";
// }
// else
// {
//     echo "a is not grater than 100";
// }


//Ladder

// $age = 18;

// if($age >= 18)
// {
//     echo "you can caste vote";
// }
// elseif($age < 18 && $age > 0)
// {
//     echo "you can not caste vote";   
// }
// else
// {
//     echo "invalid age";
// }

$age = 70;

if($age >= 25 && $age < 65)
{
    echo "you can drive";
}
elseif($age < 25 && $age > 0)
{
   echo "you can't drive , you are under age"; 
}

elseif($age >= 65)
{
  echo "you can't drive";
}
else
{
   echo "Invalid age...";
}
?>