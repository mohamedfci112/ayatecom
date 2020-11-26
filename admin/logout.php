<?php

session_start();

session_unset();

session_destroy();

header('Location:c_panel.php');
exit();

?>