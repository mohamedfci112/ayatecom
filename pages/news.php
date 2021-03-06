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
    <link rel="stylesheet" href="../assets/css/media.css" />
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>


     <script type = "text/javascript">

     $(document).ready(function(){
    $('.news_section .news_header .centered').slideDown(1000);
    $('.news_section .news_header').width($(window).width()-5);
    $('.news_section .news_header .centered .row').animate({
        'margin':'90px 40px 0px 40px;'
    },2000);
    $('.news_box').slideDown(1500);

});
    </script>
    <script src="../assets/js/one.js"></script>
    
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

<section class="news_section">

    <div class="news_header">
        
        <img src="../assets/images/news2.png">
        
        <div class="centered">
            <div class="row" >
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                <h1 class="lead text-center" >شاهد اخبارنا الان</h1>
                <hr>
                <p class="lead text-center">نختصر عليكم الطريق لأهم الاخبار<br> و نقدم لكم الحقائق بعيون سعودية<br> من كل أنحاء العالم وأخبار المملكة</p>
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="container">
        <div class="row">
        <?php
include('../database/config.php');
$nes = "SELECT * FROM news";
    $result5 = $con->query($nes);
    if($result5->num_rows > 0){
    while($row = $result5->fetch_assoc()){
?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                <div class="news_box">
                    <img class="img" src="../data/uploads/<?php echo $row['photoName'] ?>" alt="">
                    <h2><?php echo $row['address']; ?></h2>
                    <p class="center-block"> <?php echo $row['content']; ?> </p>
                    
                    <a href="<?php echo $row['link']; ?>" target="_blank" class="btn btn-primary">إقرأ المزيد</a>
                </div>
            </div>
            <?php
        }
        
    }
    ?>    
        </div>
    </div>
</section>

<!--Start Ultimate Footer Section -->
<a href="#navbar" id="scroll_up" style="display:block;" ><i class="fa fa-angle-up"></i></a>        

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
                            <img class="img-thumbnail" src="../../assets/images/gallery/38.jpg" alt="">
                            <img class="img-thumbnail" src="../../assets/images/gallery/37.jpg" alt="">
                            <img class="img-thumbnail" src="../../assets/images/gallery/36.jpg" alt="">
                            <img class="img-thumbnail" src="../../assets/images/gallery/35.jpg" alt="">
                            <img class="img-thumbnail" src="../../assets/images/gallery/35.jpg" alt="">
                            <img class="img-thumbnail" src="../../assets/images/gallery/35.jpg" alt="">
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="copyright text-center">
                Copyright &copy; 2019 <span>Ayatecom</span>.Inc
            </div>
        </section>
        <!--End Ultimate Footer Section -->        




</body>

</html>