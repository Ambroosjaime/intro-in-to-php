<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<pre>
<?php

// begin the session
session_start();

// loop through the session array with foreach

foreach($_SESSION['toplist'] as $array) {

die(print_r($_SESSION));

// and print out the values
//echo 'The value of $_SESSION['."'".$key."'".'] is '."'".$value."'".' <br />';
//}

for ($row = 0; $row <12; $row++) {
    // echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 1; $col++) {
    echo "<li>".$movies_arr[$row][0].",rating:".$movies_arr[$row][1].", type: ".$movies_arr[$row][2]."</li>";
    }
    echo "</ul>";
}
}

?>

<pre>
