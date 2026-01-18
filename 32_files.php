<?php

// writing to file in php
echo "welcome";

// $ptr = fopen("file2.txt", "w");  //w stands for write and make file automatic if file doesn't exists

// fwrite($ptr , "i am farhan and i am learning php for enhancing my knowledge");  //ptr (file name) - > where || second aegument "what we have to write on this file"

// fclose($ptr)   //fclose means close the file after compeletion || $ptr (file name) which file have to close 


// Appending to file in php

//  $ptr = fopen("file2.txt", "a");  //a stands for append
// fwrite($ptr , "i am farhan and i am learning php for enhancing my knowledge");
//  fwrite($ptr , "this is being appended in file ");  //this line would be add on exists contents 

// fclose($ptr)


// $ptr = fopen("file2.txt", "w"); 
// fwrite($ptr , "i am farhan and i am learning php for enhancing my knowledge\n");
 $ptr = fopen("file2.txt", "a"); 
fwrite($ptr , "this is being appended in file"); 

fclose($ptr);


?>