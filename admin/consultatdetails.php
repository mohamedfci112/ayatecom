<?php
    session_start();
    if(!isset($_SESSION['login'])){
    header('Location:c_panel.php');
    exit();}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <style>
        body{
            background-color:#AFAFAF;
        }
        .container{
            margin:30px auto;
            border-radius:20px;
            border:1px groove;
            background:#5a5959;
            color:white;
        }
        label{
            margin:20px auto;
            border-radius: 20px;
            border:1px groove;
            background:#eae7e7;
            font-size:25px;
            color:black;
        }
        h2{
            text-align:center;
        }
        button{
            width:100px;
            height:50px;
            color:red;
            border-radius:20px;
            margin:20px auto;
        }
    </style>
</head>
<body>

    <div class="container" >
        <div class="row" >
        <?php
            
            include('../database/config.php');
            
                $id = intval($_GET['id']);
                $cons = "SELECT * FROM consulates WHERE id = '$id' ";
                $result = $con->query($cons);
                if($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {
        ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
            <strong> Customer name : </strong><h2> <?php echo $row['name'] ?></h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
            <strong> Customer Email : </strong><h2> <?php echo $row['email'] ?></h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
            <strong> Customer phone : </strong> <h2><?php echo $row['phone'] ?></h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                <label><?php echo $row['details'] ?></label>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
               <a href="admin.php"> <button>Dashboard</button></a>
            </div>
            <?php
                    }
                }
            

?>
        </div>
    </div>
</body>
</html>