<?php
include('../database/config.php');

$id = intval($_GET['id']);
$dmsg = "DELETE FROM contacts WHERE id = '$id' ";

if(mysqli_query($con,$dmsg)){
    header('Location:admin.php');
    exit();
}
else{
    echo "erooooooooooooooooooooooor";
}

?>