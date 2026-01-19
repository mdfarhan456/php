<?php

echo "Learning about sessions <br>";
/* what is sessions

used to manage information across the diffrent pages */

session_start();
$_SESSION['username'] = "farhan";
$_SESSION['favCat'] = "book";
echo "we have saved tour session <br>";

include '38_buttons_for_practice_Log_logout.php';

?> 