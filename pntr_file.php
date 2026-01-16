<?php 
  
$pntr = fopen("file.txt", "r");  // pointing the file and r is indicating mode of a file "r" means read

$content = fread($pntr, filesize("file.txt"));  // reading the file content

echo $content;

fclose($pntr); // closes teh file

?>