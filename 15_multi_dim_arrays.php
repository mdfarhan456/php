<?php

echo "multi dimensional arrays in php <br>";

$multiDim = array(
                 array(2, 3, 4, 9,), 
                 array(5, 0, 7, 2,),
                 array(6, 8, 3, 1,)
               
                
);

for ($i=0; $i < count($multiDim); $i++) { 
    
    for ($j=0; $j < count($multiDim[$i]); $j++) { 
        
        echo $multiDim[$i][$j];
        echo " ";
    }
    echo "<br>";
}

?>
