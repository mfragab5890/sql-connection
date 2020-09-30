<?php
$servername = "db4free.net"
$user='ghelpo';
$pass='tafiTAFI';
$databasename='ghelpo';

date_default_timezone_set("Africa/Cairo");




   $link = mysqli_connect($servername, $user, $pass, $databasename);

        if (!$link) {

            die ("Database Connection Error");

        }

?>
