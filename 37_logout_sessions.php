<?php

session_start();
session_unset();
session_destroy();

echo "you have been loged out <br>";
include '38_buttons_for_practice_Log_logout.php';


?>