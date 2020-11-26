<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ayatecom</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/css/one.css" />
    <link rel="stylesheet" href="../assets/css/lightbox.min.css" />
    <script src="../assets/js/lightbox-plus-jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/css/media.css" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <!-- animate.css -->
    <link rel="stylesheet" href="../assets/New folder/assets/animate/animate.css" />
    <link rel="stylesheet" href="../assets/New folder/assets/animate/set.css" />
    <!-- gallery -->
    <link rel="stylesheet" href="../assets/New folder/assets/gallery/blueimp-gallery.min.css">
    <link rel="stylesheet" href="../assets/New folder/assets/style.css">


    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script type = "text/javascript">

$(document).ready(function(){
   
});
</script>
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top opaque-navbar">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navMain">
        <span class="glyphicon glyphicon-chevron-right" style="color:white;"></span>
        </button>

        <a class="navbar-brand" href="../index.php">Ayatecom</a>
        <span class="showopacity fa fa-mobile fa-1x" style="margin-top:10px;margin-left:5px;padding:10px;color:white"> - 201069514554 </span>
        <span class="showopacity fa fa-envelope fa-1x" style="margin-top:10px;margin-left:5px;padding:10px;color:white"> - mohamedfci112@gmail.com</span>

    </div>
    <div class="collapse navbar-collapse" id="navMain">
      <ul class="nav navbar-nav pull-right">
        <li class="active"><a href="../index.php"> الرئيسية <i class="fa fa-home fa-x5"></i></a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">استفسارات<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="../index.php#contact">إسألنا</a></li>
                <li class="divider"></li>
                <li><a href="../index.php#social">حساباتنا</a></li>
            </ul>
        </li>
        <li><a href="news.php">أخبار</a></li>
        <li><a href="consultat.php">إستشارات</a></li>
        <li><a href="image.php">الصور</a></li>
        <li><a href="../index.php#about">من نحن</a></li> 
      </ul>
    </div>
  </div>
</div>



<div id="home">
<!-- Slider Starts -->
<div id="myCarousel" class="carousel slide banner-slider animated bounceInDown" data-ride="carousel">     
      <div class="carousel-inner">
        <!-- Item 1 -->
        <div class="item active">
          <img src="../assets/New folder/images/back2.jpg" alt="banner">
        </div>
        <!-- #Item 1 -->

        <!-- Item 1 -->
        <div class="item">
          <img src="../assets/New folder/images/back3.jpg" alt="banner">
        </div>
        <!-- #Item 1 -->

        <!-- Item 1 -->
        <div class="item">
          <img src="../assets/New folder/images/back4.jpg" alt="banner">
        </div>
        <!-- #Item 1 -->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon-chevron-left"><i class="fa fa-angle-left"></i></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon-chevron-right"><i class="fa fa-angle-right"></i></span></a>
    </div>
<!-- #Slider Ends -->
</div>


<!-- works -->
<div id="works"  class=" clearfix grid"> 
    <?php
    include('../database/config.php');
    $imge = "SELECT * FROM photos";
        $result4 = $con->query($imge);
        if($result4->num_rows > 0){
        while($row = $result4->fetch_assoc()){
    ?>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="../data/uploads/<?php echo $row['name'] ?>" alt="img01"/>
        <figcaption>
            <h2>Photo <?php echo $row['id'] ?></h2>
            <p>open this photo now and watch it..<br>
            <a href="https://ayatecom.000webhostapp.com/data/uploads/<?php echo $row['name']; ?>" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    
    <?php
        }
        
    }
    ?>
     
</div>
<!-- works -->




   
<!--Start Ultimate Footer Section -->
<section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3>خريطة الموقع</h3>
                        <ul class="list-unstyled three-columns">
                            <a href="../index.php#about"><li>من نحن</li></a>
                            <a href="news.php"><li>أخبار</li></a>
                            <a href="consultat.php"><li>إستشارات</li></a>
                            <a href="image.php"><li>الصور</li></a>
                            <a href="../index.php#contact"><li>استفسارات</li></a>
                            <a href="../index.php#contact"><li>الإتصال</li></a>
                            <a href="../index.php#social"><li>التواصل</li></a>
                        </ul>
                        <ul class="list-unstyled social-list">
                            <li><img src="../assets/images/icon/a.png" alt="email"></li>
                            <li><img src="../assets/images/icon/b.png" alt="Google+"></li>
                            <li><img src="../assets/images/icon/c.png" alt="pinterest"></li>
                            <li><img src="../assets/images/icon/d.png" alt="RSS"></li>
                            <li><img src="../assets/images/icon/e.png" alt="Facebook"></li>
                            <li><img src="../assets/images/icon/f.png" alt="Twitter"></li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-6 col-md-6">
                        <h3>Our Awesome Work</h3>
                        <div class="work">
                            <img class="img-thumbnail" src="../assets/images/gallery/38.jpg" alt="">
                            <img class="img-thumbnail" src="../assets/images/gallery/37.jpg" alt="">
                            <img class="img-thumbnail" src="../assets/images/gallery/36.jpg" alt="">
                            <img class="img-thumbnail" src="../assets/images/gallery/35.jpg" alt="">
                            <img class="img-thumbnail" src="../assets/images/gallery/35.jpg" alt="">
                            <img class="img-thumbnail" src="../assets/images/gallery/35.jpg" alt="">
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="copyright text-center">
                Copyright &copy; 2019 <span>Ayatecom</span>.Inc
            </div>
        </section>
        <!--End Ultimate Footer Section -->  
        <a href="#navbar" id="scroll_up" style="display:block;" ><i class="fa fa-angle-up"></i></a>        
      

<script src="assets/js/one.js"></script>
</body>
</html>