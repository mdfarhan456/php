<?php

echo "functions in php <br>";

function marksProcess($marksArr)
{
    $sum = 0;

    foreach ($marksArr as $value)
    {
        $sum += $value;
    }
    return $sum;

}

$rohanDas = [20, 65, 56, 77, 99, 89];

$sumMarks = (marksProcess($rohanDas));

$farhan = [22, 85, 46, 73, 99, 82];

$sumMarks2 = (marksProcess($farhan));

echo "total marks rohan scored  $sumMarks out of 600 <br>";
echo "total marks farhan scored  $sumMarks2 out of 600";

?>