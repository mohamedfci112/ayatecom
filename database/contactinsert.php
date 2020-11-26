<?php

include('../database/config.php');

   $customerName = $_POST['customerName'];
    $customerEmail = $_POST['customerEmail'];
    $customerPhone = $_POST['customerPhone'];
    $customerMessage = $_POST['customerMessage'];
    $sqll = "INSERT INTO contacts VALUES ('','$customerName','$customerEmail','$customerPhone','$customerMessage')";
    mysqli_query($con,$sqll);
    


?>