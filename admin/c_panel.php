<?php

session_start();
if(isset($_SESSION['login'])){
    header('Location:admin.php');
}

include('../database/config.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $hashedPass = sha1($password);

    $stmt = "select username, password from users where username = '$username' and password = '$hashedPass'";
    $result = $con->query($stmt);
    if($result->num_rows > 0){
        $_SESSION['login'] = $username;
        header('Location:admin.php');
        exit();
    }
    else{
        echo "Erroooooooooor";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <style>
        body{
            background-color:#F4F4F4;
        }
        .login{
            width:300px;
            margin:100px auto;

        }
        .login input{
            margin-bottom:10px;
        }
        .login .form-control{
            background-color:#EAEAEA;
        }
    </style>
</head>
<body>
    <form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" >
        <input class="form-control input-lg" type="text" name="user" placeholder="Username" autocomplete="off" >
        <input class="form-control input-lg" type="password" name="pass" placeholder="Password" autocomplete="off" >
        <input class="btn btn-primary btn-block" type="submit" value="Login" >
    </form>

</body>
</html>


