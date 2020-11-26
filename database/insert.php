
<?php
include('../database/config.php');

$name = $_POST['name'];
$country = $_POST['country'];
$email = $_POST['email'];
$jop = $_POST['jop'];
$phone = $_POST['phone'];
$details = $_POST['details'];
$type = $_POST['type'];
$cost = $_POST['cost'];

$sql = "INSERT INTO consulates VALUES ('','$name','$country','$email','$jop','$phone','$details','$type','$cost')";
mysqli_query($con,$sql);

/****************** **********************/


/****************** **********************/



?>