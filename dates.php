<?php

echo "welcome to the world of dates <br>";

// Prints something like: Monday
echo date("l") . "\n";

// Prints something like: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A') . "<br>";

// Prints: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000)) . "<br>";

/* use the constants in the format parameter */
// prints something like: Wed, 25 Sep 2013 15:28:57 -0700
echo date(DATE_RFC2822) . "<br>";

// prints something like: 2000-07-01T00:00:00+00:00
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));


echo date("F j, Y, g:i a") . "<br>";                 // March 10, 2001, 5:16 pm
echo date("m.d.y") . "<br>";                         // 03.10.01
echo date("j, n, Y") . "<br>";                       // 10, 3, 2001
echo date("Ymd") . "<br>";                           // 20010310
echo date('h-i-s, j-m-y, it is w Day') . "<br>";     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
echo date('\i\t \i\s \t\h\e jS \d\a\y.') . "<br>";   // it is the 10th day.
echo date("D M j G:i:s T Y") . "<br>";               // Sat Mar 10 17:16:18 MST 2001
echo date('H:m:s \m \i\s\ \m\o\n\t\h') . "<br>";     // 17:03:18 m is month
echo date("H:i:s") . "<br>";                         // 17:16:18
echo date("Y-m-d H:i:s") . "<br>";                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)

?>