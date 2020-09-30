<?php
$servername = "https://www.db4free.net"
$user='ghelpo';
$pass='tafiTAFI';
$databasename='ghelpo';

date_default_timezone_set("Africa/Cairo");




   $link = mysqli_connect("localhost", $user, $pass, $databasename);

        if (!$link) {

            die ("Database Connection Error");

        }

?>
