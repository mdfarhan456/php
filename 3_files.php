<?php 

// fgets reads line by line

 $ptr = fopen("file.txt", "r");  //pointing the file and indecating mode of a file

// $content = fgets($ptr);  // fgets function print one line of content
// echo $content;

// $content2 = fgets($ptr);  // now it will print second line of content
// echo $content2;



//reading file line by line
// while($a = fgets($ptr))
//     {
//         echo $a."<br>";
//     }

//     echo "Ended...";



    //reading file character by character by line
// while($a = fgetc($ptr))
//     {
//         echo $a."<br>";
//         // break;
//     }

//     echo "Ended...";


    // WAP which reads content of file until , has been encountered
    while($a = fgetc($ptr))
    {
        echo $a;
       if($a == ",")
        {
             break;
        }
    }

    echo "<br> Ended...";

    fclose($ptr);


?>