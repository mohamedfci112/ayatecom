<?php
include('../database/config.php');
$idf = intval($_GET['idp']);
$cons = "DELETE FROM photos WHERE id = '$idf' ";

if(mysqli_query($con,$cons)){
    header('Location:admin.php');
    exit();
}

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