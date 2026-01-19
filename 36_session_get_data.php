<?php
//getting the sessions
session_start();

if(isset($_SESSION['username']))
    {
        echo "hello your name is ".$_SESSION['username'];
        echo "<br>category: ".$_SESSION['favCat'];
        echo "<br>";
    }
    else
        {
            echo "<br> please login to continue... <br>";
        }
include '38_buttons_for_practice_Log_logout.php';


?>