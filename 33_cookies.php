<?php

echo "Learning about cookies <br>"; 

//Syntax to set a cookie
// setcookie("name", "value", "expireTime in seconds"m "domain)

setcookie("category", "books", time() + 86400, "/");
echo "the cookie has set <br>";

?>