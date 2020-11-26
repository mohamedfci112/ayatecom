<?php

/* $dsn = 'mysql:host=localhost;dbname=data';
$user = 'root';
$pass = ''; */
/* $opition = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8';); */

$server = 'localhost';
$user = 'id8348780_ayatecom';
$pass = 'ayatecom';
$dbname = 'id8348780_data';



try{

    /* $con = new PDO($dsn,$user,$pass);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); */

    $con = mysqli_connect($server,$user,$pass,$dbname);
}

catch(Exception $e){

    echo 'Faild Cause..' . $e->getMessage();
}

?>