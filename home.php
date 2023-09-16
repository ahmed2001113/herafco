<?php 
session_start();
include ("conn.php") ;
$newemail=$_GET['email'];
?> 
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
<style>
html{
scroll-behavior: smooth;
}
.padding{
  padding-top:15px;
}
span{
  font-size:12px;
  color:gray;
  }
			body,.card-body,footer{
				color:#fff; 
				background-color:#79A3B1;
			}
			.navbar{
				background-color:#294859 !important;
			}
      .active{
border-bottom:1px solid #fff;
}
.a:hover{
        border-bottom:1px solid #fff;
      }
			.row,.container{
				background-color:#294859 !important;
			}
			.logbtn{
				background-color:#79a3b1 !important;
        color:white !important;
			}
			.btn{
				background-color:#294859 !important;
        color:white !important;
        border:1px solid #fff;
			}
      h5,h4,h1,h2,h3,h6,p,a{
        color:#fff !important;
      }
      hr{
        border-top: 1px solid #fff !important;
      }
</style>
  </head>
<body>
<?php 
 if(isset($_SESSION['login']) ){ ?>    
 <div class="alert alert-success text-center a1" >
     <h5><?= $_SESSION['login']; ?></h5></div>
     <?php } ?>
  <div class="col-12-col-lg-8-col-lg-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand " href="#">Herafco</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>      
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link active a"href="#" >الصفحة الرئيسة</a>
            </li>
            <li class="nav-item">
              <a class="nav-link a" href="signup2.php">تسجيل الدخول</a>
            </li>
            <li class="nav-item">
              <a class="nav-link a" href="logout.php">تسجيل الخروج</a>
            </li>           
          </ul>                
                <form class="form-inline my-2 my-lg-0" action="search.php" method="post">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="name">
            <?php
            $a =" SELECT * FROM clint WHERE email='$newemail' ";
            $aa = $conn->query($a);
            foreach($aa as $a){?> 
            <input type="hidden" value="<?=$a['email']?>" name="email">
            <?php } ?>
            <button class="btn my-2 my-sm-0 btn" type="submit">Search</button>
          </form>                 
        </div>
      </nav>
    </div>
<br>
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <h1 class="display-4  padding">Herafco</h1>
              <hr class="my-4">
            </div>
            <div class="col-12 ">
            <?php
            if(isset($_GET['email'])){
              $a =" SELECT * FROM clint WHERE email='$newemail' ";
              $aa = $conn->query($a);
              foreach($aa as $a){?> 
              <h6>Name : <?= $a['name'] ?></h6>
              <h6>Email : <?= $a['email'] ?></h6>
               <?php } } ?></div>
               <div class="col-12 text-center">
                 <hr class="my-4">
               <h4 style="color:#dc3545;padding:30px;"><i>ان هذا الموقع يساعد الزائر علي سهولة الوصول الي الحرفه التي يحتاجها
 ومعرفة العماله الماهره التي يحتاجها في المكان الذي يسكن فيه 
و اي حرفه يريها دون الاحتيال عليه لان هناك بعض الحرفين يقومون باالاحتيال علي
العملاء ويساعد في حل جزء من مشكلة البطاله الموجودة حاليا حيث يساعد الحرفين علي الوصول للعملاء بسهوله </i></h4>
          </div>
          </div>
          </div> 
</div>
<br>
<br>
<div class="container">
  <img src="img/all.jpeg" width="100%" >
</div>
<div class="container">
<div class="text-center m-5">
 <h2 class="display-6  padding">Herafco</h2>
      </div>
      <hr>
      <h3 class="text-center ">هنا ستجد افضل النقاشين</h3><br>
      <div class="row" id="job1">
<?php
$t="SELECT * from workers where job='نقاش' ";
$kk = $conn->query($t);
foreach($kk as $k){?>
  <div class="col-lg-4 col-md-6 col-12">
     <div class="card">
        <img src="img/imag.jpg"  height="300px" class="card-img-top" >
         <div class="card-body text-left">
           <h4 class="card-title">Name : <?=$k['name']?></h4>
           <h5 class="card-text">Job : <?=$k['job']?></h5>
           <?php
            if(isset($_GET['email'])){
              $a =" SELECT * FROM clint WHERE email='$newemail' ";
              $aa = $conn->query($a);
              foreach($aa as $a){?>
          <a href="workers.php?workerid=<?=$k['workerid']?>&clintid=<?=$a['clintid']?>&job=job1" class="btn ">حجز</a>
          <?php } } ?>         
        </div>
      </div>
    </div>
    <?php } ?>
</div>
<hr>
<h3 class="text-center">هنا ستجد افضل النجارين</h3><br>
<div class="row" id="job2">
<?php
$t="SELECT * from workers where job='نجار' ";
$kk = $conn->query($t);
foreach($kk as $k){?>
  <div class="col-lg-4 col-md-6 col-12">
     <div class="card">
        <img src="img/img1.jpg"  height="300px" class="card-img-top" >
         <div class="card-body text-left">
           <h4 class="card-title">Name : <?=$k['name']?></h4>
           <h5 class="card-text">Job : <?=$k['job']?></h5>
           <?php
            if(isset($_GET['email'])){
              $a =" SELECT * FROM clint WHERE email='$newemail' ";
              $aa = $conn->query($a);
              foreach($aa as $a){?>
          <a href="workers.php?workerid=<?=$k['workerid']?>&clintid=<?=$a['clintid']?>&job=job2" class="btn ">حجز</a>
          <?php } } ?>         
        </div>
      </div>
    </div>
    <?php } ?>
</div>
<hr>
<h3 class="text-center">هنا ستجد افضل السباكين</h3><br>
<div class="row" id="job3">
<?php
$t="SELECT * from workers where job='سباك' ";
$kk = $conn->query($t);
foreach($kk as $k){?>
  <div class="col-lg-4 col-md-6 col-12">
     <div class="card">
        <img src="img/img3.jpg"  height="300px" class="card-img-top" >
         <div class="card-body text-left">
           <h4 class="card-title">Name : <?=$k['name']?></h4>
           <h5 class="card-text">Job : <?=$k['job']?></h5>
           <?php
            if(isset($_GET['email'])){
              $a =" SELECT * FROM clint WHERE email='$newemail' ";
              $aa = $conn->query($a);
              foreach($aa as $a){?>
          <a href="workers.php?workerid=<?=$k['workerid']?>&clintid=<?=$a['clintid']?>&job=job3" class="btn ">حجز</a>
          <?php } } ?>         
        </div>
      </div>
    </div>
    <?php } ?>
</div>
<hr>
<h3 class="text-center">هنا ستجد افضل الكهربائية</h3><br>
<div class="row" id="job4">
<?php
$t="SELECT * from workers where job='كهربائي' ";
$kk = $conn->query($t);
foreach($kk as $k){?>
  <div class="col-lg-4 col-md-6 col-12">
     <div class="card">
        <img src="img/img2.jpg"  height="300px" class="card-img-top" >
         <div class="card-body text-left">
           <h4 class="card-title">Name : <?=$k['name']?></h4>
           <h5 class="card-text">Job : <?=$k['job']?></h5>
           <?php
            if(isset($_GET['email'])){
              $a =" SELECT * FROM clint WHERE email='$newemail' ";
              $aa = $conn->query($a);
              foreach($aa as $a){?>
          <a href="workers.php?workerid=<?=$k['workerid']?>&clintid=<?=$a['clintid']?>&job=job4" class="btn ">حجز</a>
          <?php } } ?>         
        </div>
      </div>
    </div>
    <?php } ?>
</div>
</div>
<br>
<br>
<div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <h1 class="display-4  padding">الشكاوي</h1>
              <hr class="my-4">
            </div>
            <div class="col-12 ">
            </div>
               <div class="col-12 text-center">
                <form action="complaint.php" method="post">
                  <textarea name="complaint" rows="7" required style="width:100%"></textarea>
                  <input type="hidden" value="<?= $newemail?>" name="email" />
                  <button class="logbtn" type="submit">شكوي</button>
              </form>
                 <hr class="my-4">
                 <?php
            if(isset($_GET['email'])){
              $a =" SELECT * FROM complaint WHERE email='$newemail' ";
              $aa = $conn->query($a);
              foreach($aa as $a){?>
   <button  style="background-color:#79A3B1;float:left; border-radius:15px; border:#79A3B1 1px solid"><a href="deletecom.php?email=<?=$newemail?>&complaint=<?=$a['complaintid']?>" style="padding:5px 10px; text-decoration:none; color:white; ">حذف</a></button><br><br> 
              <h4><?= $a['complaint'] ?></h4>
              <h6><?= $a['reply'] ?></h6>
              <hr>
               <?php } } ?>
          </div>
          </div>
          </div> 
</div><br><br>
<footer class="text-center text-lg-left pt-4" style="border-top:10px solid #294859;">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

      <div class="me-5 d-none d-lg-block">
        <span  style="color:white;">Get connected with us on social networks:</span>
      </div>
      <div style="background-color:red ;">
        <a href="#" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="#" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="#" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="#" class="me-4 text-reset">
          <i class="fab fa-github"  ></i>
        </a>
      </div>
    </section>
    <section>
      <div class="container text-center text-md-start mt-5 padding">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 text-dark">
            <!-- Content -->
            <h6 class=" fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 text-dark">
            <h6 class=" fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
     
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 text-dark">
     
            <h6 class=" fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
           <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-dark">
            <h6 class=" fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
        </div>
      </div>
    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="#!">MDBootstrap.com</a>
    </div>
  </footer>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- <script src="js/main.js"></script>	 -->
    <script>
      $(".a1").fadeOut(4000);
$(".a2").fadeOut(4000);
    </script>	
  </body>
</html>
<?php 
session_destroy();
?> 