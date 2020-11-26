<?php
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

require '../payment/src/start.php';
include('../database/config.php');

if(isset($_GET['approved'])){

    $approved = $_GET['approved'] === 'true';

    if($approved){

        $payerId = $_GET['PayerID'];
        //get payment-id from database
        $hash = $_SESSION['paypal_hash'];
        $paymentId = "select payment_id from transactions_paypal where hash='$hash' ";
        $result = $con->query($paymentId); 
        if($result4->num_rows > 0){
            while($row = $result4->fetch_assoc()){
                $paymentId = $row['payment_id'];

                $payment = Payment::get($paymentId, $api);

                $execution = new PaymentExecution();
                $execution->setPayerId($payerId);

                $payment->execute($execution,$api);

                $updateTransaction = "update transactions_paypal set complete=1 where payment_id='$paymentId' ";

                unset($_SESSION['paypal_hash']);
            }
        }       

    } else{
        header('Location:consultat.php');
        exit();
    }
}

?>

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
</head>
<body>


<div class="navbar navbar-inverse navbar-fixed-top opaque-navbar">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navMain">
        <span class="glyphicon glyphicon-chevron-right" style="color:white;"></span>
        </button>

        <a class="navbar-brand" href="index.php">Ayatecom</a>
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
        <li><a href="../index#about">من نحن</a></li> 
      </ul>
    </div>
  </div>
</div>


<hr>
<div class="container">
    <div class="alll">
        <h1 class="reg_txt">نموذج تسجيل الاستشارة</h1>
    
    <form class="formr" action="../database/insert.php" method="POST">
    <div class="form-group">
        <label for="exampleFormControlInput1">الاسم بالكامل</label>
        <input type="text" class="form-control" id="name" placeholder="اكتب اسمك هنا" name="name" required>
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect1">البلد</label>
        <select class="form-control" id="country" name="country" required>
        <option>السعودية</option>
        <option>مصر</option>
        <option>الاردن</option>
        <option>الامارات</option>
        <option>الكويت</option>
        </select>
    </div> 


    <div class="form-group">
        <label for="exampleFormControlInput1">البريد الإلكترونى</label>
        <input type="email" class="form-control" id="email" placeholder="اسمك@example.com" name="email" required>
    </div>
    
    <div class="form-group">
        <label for="exampleFormControlInput1">الوظيفة</label>
        <input type="text" class="form-control" id="jop" placeholder="اكتب وظيفتك هنا" name="jop" required>
    </div>

    

    <div class="form-group">
        <label for="exampleFormControlInput1">رقم الجوال الخاص بك</label>
        <input type="number" class="form-control" id="phone" placeholder="رقم الجوال" name="phone" required>
    </div>


    <div class="form-group">
        <label for="exampleFormControlTextarea1">اشرح هنا ما هى استشارتك</label>
        <textarea class="form-control" id="details" rows="3" name="details" required></textarea>
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">نوع الاستشارة</label>
        <input type="text" class="form-control" id="type" placeholder="نوع استشارتك" name="type" required>
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">سعر الاستشارة</label>
        <input type="number" class="form-control" id="cost" placeholder="تكلفة الاستشارة" name="cost" required>
    </div>

    <div class="form-group">
        <button  class="btn btn-success btn-block" id="submit">تسجيل الاستشارة</button>
        <span id="error" class="text-danger"></span>
        <span id="success" class="text-success"></span>
    </div>


    </form>
    </div>
</div>


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

<script src="../assets/js/jquery-3.3.1.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/ajax.js"></script>
<script src="../assets/js/one.js"></script>

</body>
</html>