<?php

$name = "farhan is a god boy";
echo $name;
 echo "<br>";
 echo "lentgh of my string is ".strlen($name);

 echo "<br>";

 echo "word count of string ".str_word_count($name);

  echo "<br>";

  echo "rev. string = ".strrev($name);

    echo "<br>";

    echo "finding word index = ".strpos($name,"boy");

      echo "<br>";
      
      echo "word replace = ". str_replace("farhan","salman",$name); 

      echo "<br>";
      
      echo "word repeat = ". str_repeat($name , 10); 
?>