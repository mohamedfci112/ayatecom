<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ayatecom</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/one.css" />
    <link rel="stylesheet" href="assets/css/media.css" />
    <link rel="icon" type="image/gif/png" href="https://pngimage.net/wp-content/uploads/2018/05/anarchy-a-png-4.png">
</head>
<body>

<div id="navbar" class="navbar navbar-inverse navbar-fixed-top opaque-navbar">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navMain">
        <span class="glyphicon glyphicon-chevron-right" style="color:white;"></span>
        </button>

        <a class="navbar-brand" href="index.php">Ayatecom</a>
        <span class="showopacity fa fa-mobile fa-1x" style="margin-top:10px;margin-left:5px;padding:10px;color:white"> - 201069514554 </span>

    </div>
    <div class="collapse navbar-collapse" id="navMain">
      <ul class="nav navbar-nav pull-right">
        <li class="active"><a href="index.php"> الرئيسية <i class="fa fa-home fa-x5"></i></a></li>
        
        <li><a href="pages/news.php">أخبار</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">استفسارات<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#contact">إسألنا</a></li>
                <li class="divider"></li>
                <li><a href="#social">حساباتنا</a></li>
            </ul>
        </li>
        <li><a href="pages/consultat.php">إستشارات</a></li>
        <li><a href="pages/image.php">الصور</a></li>
        <li><a href="#about">من نحن</a></li> 
      </ul>
    </div>
  </div>
</div>


<section class="carsol">
<div id="myslide" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myslide" data-slide-to="0" class="active"></li>
            <li data-target="#myslide" data-slide-to="1"></li>
          </ol>
        
          <!-- Wrapper for slides -->
           
          <div class="carousel-inner" role="listbox">
          
          <div class="item active one">  
                <div class="cursol-back">
                
                </div>
            <img src="https://i1.wp.com/arabevents.ca/wp-content/uploads/2017/01/AYAT2018.jpg?fit=1280%2C850" alt="Pic 1">
              <div class="carousel-caption">
                <h1>رؤية السعودية 2030<h1>
                <a href="pages/pdf.php"><button class="btn btn-danger">PDF عرض</button></a>
              </div>
              
            </div>
            
            <div class="item two">
            <div class="cursol-back">
                
                </div>
              <img src="assets/images/lifequality.jpg" alt="Pic 2">
              <div class="carousel-caption">
              <h1>برنامج جودة الحياة 2020<h1>
              <a href="pages/pdf2.php"><button class="btn btn-danger">PDF عرض</button></a>
              </div>
            </div>  
          </div>
        
          <!-- Controls -->
          <a class="left carousel-control" href="#myslide" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myslide" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
       
        <!-- End Carousel -->
</section>
<!--Start section about us-->
<section class="about" id="about">
           <div class="container"> 
                
               
                        <div class="text">
                            <h2>ناشطة في العمل المجتعي والتطوعي واحد <strong> رواد </strong>السوشيال ميديا </h2>
                        </div>
                 
                        <div class="img">
                            <img src="assets/images/about.jpg">
                        </div>
                        
                    
           </div>

</section>
      <!-- End Section About -->

<!--Start section contacts-->
<section class="contact_us text-center" id="contact">
    <div class="fields">
        <div class="container">
            <div class="row">
                <i class="fa fa-headphones fa-5x fa-spin"></i>
                <h1>أخبرنا ما تريد</h1>
                <p class="lead">أشعر بالحرية للتواصل معنا متى شئت</p>
                <!-- Start Contact Form -->
                <form role="form" class="customerForm" action="database/contactinsert.php" method="POST">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" id="customerName" name="customerName" class="form-control input-lg" placeholder="اسم العميل" required>
                        </div>
                        <div class="form-group">
                            <input type="text" id="customerEmail" name="customerEmail" class="form-control input-lg" placeholder="الايميل" required>
                        </div>
                        <div class="form-group">
                            <input type="text" id="customerPhone" name="customerPhone" class="form-control input-lg" placeholder="رقم الجوال" required> 
                        </div>
                    </div>
                
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea id="customerMessage" name="customerMessage" class="form-control input-lg" placeholder="اكتب رسالتك هنا" required></textarea>
                        </div>
                        <button id="customerSubmit" name="custSub" class="btn btn-danger btn-lg btn-block">التواصل معنا</button>
                    </div>
                    <span id="error" class="text-danger"></span>
                    <span id="success" class="text-success"></span>
                </form>
                <!-- End Contact Form -->
            </div>
        </div>
    </div>
</section>
      <!-- End Section contacts -->
<!-- start Section social -->
<section class="social text-center" id="social">
    <div class="content">
        <h1 class="text-center">حساباتنا على مواقع التواصل<hr></h1>
        <ul>
            <li><img src="assets/images/icon/a.png" alt="email"></li>
            <li><img src="assets/images/icon/b.png" alt="Google+"></li>
            <li><img src="assets/images/icon/c.png" alt="pinterest"></li>
            <li><img src="assets/images/icon/d.png" alt="RSS"></li>
            <li><img src="assets/images/icon/e.png" alt="Facebook"></li>
            <li><img src="assets/images/icon/f.png" alt="Twitter"></li>
        </ul>
    </div>
</section>
<!-- End Section social -->
<!--Start Ultimate Footer Section -->
<section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3>خريطة الموقع</h3>
                        <ul class="list-unstyled three-columns">
                            <a href="#about"><li>من نحن</li></a>
                            <a href="pages/news.php"><li>أخبار</li></a>
                            <a href="pages/consultat.php"><li>إستشارات</li></a>
                            <a href="pages/image.php"><li>الصور</li></a>
                            <a href="#contact"><li>استفسارات</li></a>
                            <a href="#contact"><li>الإتصال</li></a>
                            <a href="#social"><li>التواصل</li></a>
                        </ul>
                        <ul class="list-unstyled social-list">
                            <li><img src="assets/images/icon/a.png" alt="email"></li>
                            <li><img src="assets/images/icon/b.png" alt="Google+"></li>
                            <li><img src="assets/images/icon/c.png" alt="pinterest"></li>
                            <li><img src="assets/images/icon/d.png" alt="RSS"></li>
                            <li><img src="assets/images/icon/e.png" alt="Facebook"></li>
                            <li><img src="assets/images/icon/f.png" alt="Twitter"></li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-6 col-md-6">
                        <h3>Our Awesome Work</h3>
                        <div class="work">
                            <img class="img-thumbnail" src="assets/images/gallery/38.jpg" alt="">
                            <img class="img-thumbnail" src="assets/images/gallery/37.jpg" alt="">
                            <img class="img-thumbnail" src="assets/images/gallery/36.jpg" alt="">
                            <img class="img-thumbnail" src="assets/images/gallery/35.jpg" alt="">
                            <img class="img-thumbnail" src="assets/images/gallery/35.jpg" alt="">
                            <img class="img-thumbnail" src="assets/images/gallery/35.jpg" alt="">
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
              
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/smooth-scroll.min.js"></script>
<script src="assets/js/js.js" ></script>
<script src="assets/js/ajax1.js" ></script>



<script type = "text/javascript">

$(document).ready(function(){
    
 

        $(".one .carousel-caption").animate({
                'top':'200px'
            },1000);

        $(".two .carousel-caption").animate({
                'top':'200px'
            },9000);

    $(window).on('scroll',function(){
        if($(this).scrollTop() > 400) 
        {
            $('.text').fadeIn(3000);
            $('.img img').slideDown(1000);
        }
        
    });
    
    $('.cursol-back').width($(window).width());

});


</script>
    <script src="assets/js/one.js"></script>

</body>
</html>