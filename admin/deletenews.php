<?php
include('../database/config.php');

$idn = intval($_GET['idn']);
$dnew = "DELETE FROM news WHERE id = '$idn' ";

if(mysqli_query($con,$dnew)){
    header('Location:admin.php');
    exit();
}
else{
    echo "erooooooooooooooooooooooor";
}

?>