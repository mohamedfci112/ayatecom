<?php

session_start();
if(!isset($_SESSION['login'])){
    header('Location:c_panel.php');
    exit();
}

?>
<?php
error_reporting(0);
include('../database/config.php');
if(isset($_POST['submit'])=='submit'){
    $image = base64_encode(file_get_contents($_FILES['photo']['tmp_name']));
    $namee = $_FILES['photo']['name'];
    $target = "../data/uploads/".basename($_FILES['photo']['name']);

    if($image==""){
        echo "<script>alert('Please upload photo')</script>";
    }
    else{
        $insertphoto = "insert into photos (name,image) values ('$namee','$image')";
        mysqli_query($con,$insertphoto);  
        move_uploaded_file($_FILES['photo']['tmp_name'],$target);  
    }

    
}

if(isset($_POST['newssubmit'])=='newssubmit'){
    $address = $_POST['newsaddress'];
    $content = $_POST['newscontent'];
    $link = $_POST['newslink'];
    $imagee = base64_encode(file_get_contents($_FILES['newsphoto']['tmp_name']));
    $nphn = $_FILES['newsphoto']['name'];
    $target = "../data/uploads/".basename($_FILES['newsphoto']['name']);

    $insertnews = "insert into news (address,content,link,photo,photoName) values ('$address','$content','$link','$imagee','$nphn')";
    mysqli_query($con,$insertnews);
    move_uploaded_file($_FILES['newsphoto']['tmp_name'],$target);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- Include the above in your HEAD tag -->
<style>
    body{
        overflow-x:hidden;
    }
        body,html{
		height: 100%;
	}

	/* remove outer padding */
	.main .row{
		padding: 0px;
		margin: 0px;
	}

	/*Remove rounded coners*/

	nav.sidebar.navbar {
		border-radius: 0px;
	}

	nav.sidebar, .main{
		-webkit-transition: margin 200ms ease-out;
	    -moz-transition: margin 200ms ease-out;
	    -o-transition: margin 200ms ease-out;
	    transition: margin 200ms ease-out;
	}

	/* Add gap to nav and right windows.*/
	.main{
		padding: 10px 10px 0 10px;
	}

	/* .....NavBar: Icon only with coloring/layout.....*/

	/*small/medium side display*/
	@media (min-width: 768px) {

		/*Allow main to be next to Nav*/
		.main{
			position: absolute;
			width: calc(100% - 40px); /*keeps 100% minus nav size*/
			margin-left: 40px;
			float: right;
		}

		/*lets nav bar to be showed on mouseover*/
		nav.sidebar:hover + .main{
			margin-left: 200px;
		}

		/*Center Brand*/
		nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
			margin-left: 0px;
		}
		/*Center Brand*/
		nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
			text-align: center;
			width: 100%;
			margin-left: 0px;
		}

		/*Center Icons*/
		nav.sidebar a{
			padding-right: 13px;
		}

		/*adds border top to first nav box */
		nav.sidebar .navbar-nav > li:first-child{
			border-top: 1px #e5e5e5 solid;
		}

		/*adds border to bottom nav boxes*/
		nav.sidebar .navbar-nav > li{
			border-bottom: 1px #e5e5e5 solid;
		}

		/* Colors/style dropdown box*/
		nav.sidebar .navbar-nav .open .dropdown-menu {
			position: static;
			float: none;
			width: auto;
			margin-top: 0;
			background-color: transparent;
			border: 0;
			-webkit-box-shadow: none;
			box-shadow: none;
		}

		/*allows nav box to use 100% width*/
		nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
			padding: 0 0px 0 0px;
		}

		/*colors dropdown box text */
		.navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
			color: #777;
		}

		/*gives sidebar width/height*/
		nav.sidebar{
			width: 200px;
			height: 100%;
			margin-left: -160px;
			float: left;
			z-index: 8000;
			margin-bottom: 0px;
		}

		/*give sidebar 100% width;*/
		nav.sidebar li {
			width: 100%;
		}

		/* Move nav to full on mouse over*/
		nav.sidebar:hover{
			margin-left: 0px;
		}
		/*for hiden things when navbar hidden*/
		.forAnimate{
			opacity: 0;
		}
	}

	/* .....NavBar: Fully showing nav bar..... */

	@media (min-width: 1330px) {

		/*Allow main to be next to Nav*/
		.main{
			width: calc(100% - 200px); /*keeps 100% minus nav size*/
			margin-left: 200px;
		}

		/*Show all nav*/
		nav.sidebar{
			margin-left: 0px;
			float: left;
		}
		/*Show hidden items on nav*/
		nav.sidebar .forAnimate{
			opacity: 1;
		}
	}

	nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
		color: #CCC;
		background-color: transparent;
	}

	nav:hover .forAnimate{
		opacity: 1;
	}
	section{
		padding-left: 15px;
	}
</style>
</head>
<body>
<nav class="navbar navbar-inverse sidebar" style="position:fixed;" role="navigation">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="https://ayatecom.000webhostapp.com">Ayatecom</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
                
                <li class="active"><a href="https://ayatecom.000webhostapp.com/" target="_blank">Go To Website<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                
                <li><a id="consultat" href="#">Consultates<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-copy"></span></a></li>
                
                <li ><a id="photo" href="#">Post Photo<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-picture"></span></a></li>
                
                <li ><a id="news" href="#">Post News<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-pencil"></span></a></li>
                
                <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
					<ul class="dropdown-menu forAnimate" role="menu">
						<li><a id="msg" href="#">Messages <span style="font-size:16px;" class="showopacity glyphicon glyphicon-envelope"></span></a></li>
                        <li><a id="logout" href="logout.php">Logout <span style="font-size:16px;" class="showopacity glyphicon glyphicon-log-out"></span></a></li>
                    </ul>    
                </li>
                
			</ul>
		</div>
	</div>
</nav>

<!-- Content Here -->
<div class="main">

<!-- consultat page Here -->

<div class="consul_page">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Jop</th>
      <th scope="col">Phone</th>
      <th scope="col">Type</th>
      <th scope="col">Cost</th>
      <th scope="col">View</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>

    <?php
    include('../database/config.php');

    $cons = "SELECT * FROM consulates";
    $result = $con->query($cons);
    if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
?>


  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['jop'] ?></td>
      <td><?php echo $row['phone'] ?></td>
      <td><?php echo $row['type'] ?></td>
      <td><?php echo $row['cost'] ?></td>
      <td><a href="consultatdetails.php?id=<?php echo $row['id'] ?>"><button class="btn btn-primary">View</button></a></td>
      <td><a href="deletconsultat.php?id=<?php echo $row['id'] ?>"><button class="btn btn-danger">Delete</button></a></td>
    </tr>
  </tbody>

    <?php
        }
        
    }
    ?>
    </table>
</div>

<!-- post photo page -->
<div class="post_photo">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="text-center">قم برفع الصورة من هنا</h1>
            </div>
        </div>
    </div>
    <form id="formphoto" class="form-horizontal" action="admin.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <label class="btn btn-primary">
                    Browse for photo ... <input name="photo" type="file" id="photo" />
                </label>
                <br>
                <button type="submit" name="submit" class="btn btn-danger" id="submit">Upload</button>
                <span id="success" class="text-success"></span>
                <span id="error" class="text-danger"></span>
            </div>
        </div>
    </form>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="text-center">قائمة الصور الموجودة</h1>
            </div>
        </div>
    </div>

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <?php
    include('../database/config.php');

    $phot = "SELECT * FROM photos";
    $result1 = $con->query($phot);
    if($result1->num_rows > 0){
    while($row = $result1->fetch_assoc()){
?>


  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['date'] ?></td>
      <td><a href="deletephoto.php?idp=<?php echo $row['id'] ?>"><button class="btn btn-danger">Delete</button></a></td>
    </tr>
  </tbody>

   <?php
        }
        
    }
    ?>
  </table>
</div>

<!-- post news page -->
<div class="post_news">

<!-- Start news Form -->
    <form role="form" class="newsForm" action="admin.php" method="POST" enctype="multipart/form-data">
    
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" id="newsaddress" name="newsaddress" class="form-control input-lg" placeholder="عنوان الخبر">
            </div>
        </div>    

        <div class="col-md-6">
            <div class="form-group">
                <textarea maxlength="350" id="newscontent" name="newscontent" class="form-control input-lg" placeholder="محتوى الخبر"></textarea>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <input type="text" id="newslink" name="newslink" class="form-control input-lg" placeholder="لينك الخبر">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="btn btn-primary">
                    Browse for photo ... <input name="newsphoto" type="file" id="newsphoto" />
                </label>
            </div>
            <button id="newssubmit" type="submit" name="newssubmit" class="btn btn-danger btn-lg btn-block">نشر الخبر</button>
        </div> 
        <span id="error" class="text-danger"></span>
        <span id="success" class="text-success"></span>
    </form>
    <!-- End news Form -->
    

    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="text-center">قائمة الاخبار الموجودة</h1>
            </div>
        </div>
    </div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Address</th>
      <th scope="col">Link</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <?php
    include('../database/config.php');

    $ns = "SELECT * FROM news";
    $result3 = $con->query($ns);
    if($result3->num_rows > 0){
    while($row = $result3->fetch_assoc()){
?>


  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>
      <td><?php echo $row['address'] ?></td>
      <td><?php echo $row['link'] ?></td>
      <td><a href="deletenews.php?idn=<?php echo $row['id'] ?>"><button class="btn btn-danger">Delete</button></a></td>
    </tr>
  </tbody>

   <?php
        }
        
    }
    ?>
  </table>

</div>

<!-- messages page -->
<div class="messages">

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Customer Email</th>
      <th scope="col">Customer Phone</th>
      <th scope="col">View</th>
    </tr>
  </thead>

  <?php
    include('../database/config.php');

    $conc = "SELECT * FROM contacts";
    $result2 = $con->query($conc);
    if($result2->num_rows > 0){
    while($row = $result2->fetch_assoc()){
?>


  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>
      <td><?php echo $row['customerName'] ?></td>
      <td><?php echo $row['customerEmail'] ?></td>
      <td><?php echo $row['customerPhone'] ?></td>
      <td><a href="messagesdetails.php?id=<?php echo $row['id'] ?>"><button class="btn btn-primary">View</button></a></td>
      <td><a href="messagesdelete.php?id=<?php echo $row['id'] ?>"><button class="btn btn-danger">Delete</button></a></td>
    </tr>
  </tbody>

   <?php
        }
        
    }
    ?>
  </table>

</div>


</div>

<script src="../assets/js/jquery-3.3.1.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript">

        function htmlbodyHeightUpdate(){
		var height3 = $( window ).height()
		var height1 = $('.nav').height()+50
		height2 = $('.main').height()
		if(height2 > height3){
			$('html').height(Math.max(height1,height3,height2)+10);
			$('body').height(Math.max(height1,height3,height2)+10);
		}
		else
		{
			$('html').height(Math.max(height1,height3,height2));
			$('body').height(Math.max(height1,height3,height2));
		}
		
	}
	$(document).ready(function () {
		htmlbodyHeightUpdate()
		$( window ).resize(function() {
			htmlbodyHeightUpdate()
		});
		$( window ).scroll(function() {
			height2 = $('.main').height()
  			htmlbodyHeightUpdate()
        });
        
        $('.consul_page').show();
        $('.post_photo').hide();
        $('.post_news').hide();
        $('.messages').hide();
    
    $('#consultat').click(function(){
        $('.consul_page').show();
        $('.post_photo').hide();
        $('.post_news').hide();
        $('.messages').hide();
       
    });
    $('#photo').click(function(){
        $('.post_photo').show();
        $('.consul_page').hide();
        $('.post_news').hide();
        $('.messages').hide();
        
    });
    $('#news').click(function(){
        $('.post_news').show();
        $('.consul_page').hide();
        $('.post_photo').hide();
        $('.messages').hide();
        
    });
    $('#msg').click(function(){
        $('.messages').show();
        $('.post_news').hide();
        $('.consul_page').hide();
        $('.post_photo').hide();
        
    });
    


    });
</script>
</body>
</html>