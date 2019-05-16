<?php
try {

    $dbcon = new PDO('mysql:host=localhost;dbname=mountain;charset=utf8','root', 'jaime&é"');

    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $e) {
   die('error connecting to database'. $e-> getMessage());
         
}   

?>
