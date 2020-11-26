<?php
include('../database/config.php');

$id = intval($_GET['id']);
$dcons = "DELETE FROM consulates WHERE id = '$id' ";

if(mysqli_query($con,$dcons)){
    header('Location:admin.php');
    exit();
}
else{
    echo "erooooooooooooooooooooooor";
}

?>