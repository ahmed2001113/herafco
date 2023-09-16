<?php 
session_start();
include ("conn.php") ;
$workerid=$_GET['workerid'];
$clintid=$_GET['clintid'];
$job=$_GET['job'];
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Workers</title>    
    <link rel="stylesheet" href="css/bootstrap.css" media="all">
    <link rel="stylesheet" href="css/main.css">
    <style>
      body{
        color:#fff; 
				background-color:#79A3B1;
			}
			.container,.row,.row div{
        background-color:#294859;
        color:#fff; 
			}
      h4{
        color:#294859;
      }
      .list{
        background-color:red;
      }
			.logbtn{
        color:#fff; 
				background-color:#79A3B1;
			}
			a ,.txtb input{
        color:#fff !important; 
			}
      .card-header{
        background-color:red;
        border:solid 1px white;
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
      hr{
        border-top: 1px solid #fff !important;
      }
      </style>
      </head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand " href="#">Herafco</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>      
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <?php
            if(isset($_GET['clintid'])){ 
              $q="SELECT email as email from clint where clintid='$clintid' ";
            $kk=$conn->query($q);
            foreach($kk as $k){?>
              <a class="nav-link a" href="home.php?email=<?=$k['email']?>" >الصفحة الرئيسة</a>
              <?php } } ?>
            </li>
            <li class="nav-item">
              <a class="nav-link a" href="signup2.php">تسجيل الدخول</a>
            </li>
            <li class="nav-item">
              <a class="nav-link a" href="logout.php">تسجيل الخروج</a>
            </li>           
          </ul>                
                <div class="form-inline my-2 my-lg-0 ">
            <h2>عملاء</h2>
            </div>                 
        </div>
      </nav>
  <br>
<?php 
 if(isset($_SESSION['login']) ){ ?>    
 <div class="alert alert-success text-center a1" >
     <h5><?= $_SESSION['login']; ?></h5></div>
     <?php } ?>
<?php 
 if(isset($_SESSION['rating']) ){ ?>    
 <div class="alert alert-success text-center a2" >
     <h5><?= $_SESSION['rating']; ?></h5></div>
     <?php } ?>
    <div class="container">
		  <div class="text-center middle-content"><br>
			  <div class="relative">
<?php
        if($job=='job1'){ ?>
      <img class="u-circle img-shadow" src="img/imag.jpg" width="128" height="128">
    <?php } ?>
<?php
        if($job=='job2'){ ?>
      <img class="u-circle img-shadow" src="img/img1.jpg" width="128" height="128">
    <?php } ?>
<?php
        if($job=='job3'){ ?>
      <img class="u-circle img-shadow" src="img/img3.jpg" width="128" height="128">
    <?php } ?>
<?php
        if($job=='job4'){ ?>
      <img class="u-circle img-shadow" src="img/img2.jpg" width="128" height="128">
    <?php } ?>
			  </div>
        <?php
        if(isset($_GET['workerid'])){
                        $workerid=$_GET['workerid'] ;                  
                        $q="SELECT * from workers WHERE workerid=$workerid";
                        $kk = $conn->query($q);
                      foreach($kk as $k){?>
			  <h1 class="username"><?=$k['name']?></h1>
		  </div>
      <?php } } ?>
		  <div class="row mb-30">      
        <div class="profile_navbar-btn col-lg-6 col-md-6 col-sm-6">
         <div class="row ml-2">
            <button class="logbtn col-3" id="p">نبذة شخصية</button>
            <button class="logbtn col-3 ml-1" id="b">حجز</button>
         </div>
        </div>
      </div>
		</div>
        <div class="container main-container">
            <div class="content inside layout">
              <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12">   </div>
              </div>
              <div class="row">
                <div class="col-md-12 col-sm-12 unavailable_alert"></div>
                  <div class="col-sm-12"><br>
                  <?php
                      if(isset($_GET['workerid'])){
                        $workerid=$_GET['workerid'] ;                  
                        $q="SELECT * from workers WHERE workerid=$workerid";
                        $kk = $conn->query($q);
                      foreach($kk as $k){?>
                     <div class="row" >
                      <div class="col-lg-8 col-md-8 col-sm-8 bg-sm-white" id="pdiv">
                        <div class="card">
                            <h4 class="bg-white text-center"> نبذة عني </h4>
                            <div class="card-body">
                              <p class="text-center"><?=$k['experience']?></p>
                            </div>
                          </div>
                      <div class="card">
                      <h4 class="bg-white text-center"> الوظيفة </h4>
                      <p class="text-center"><?=$k['job']?></p>
                      </div>
                      <div class="card">
                      <h4 class="bg-white text-center"> العنوان </h4>
                      <p class="text-center"><?=$k['address']?></p>
                      </div>
                      <div class="card">
                      <h4 class="bg-white text-center"> الهاتف </h4>
                      <p class="text-center"><?=$k['phone']?></p>
                      </div>
                      <div class="card">
                      <h4 class="bg-white text-center"> البريد الالكتروني </h4>
                      <p class="text-center"><?=$k['email']?></p>
                      </div>  
                      </div>
                      <?php } } ?>                
<div id="bdiv" class="col-lg-8 col-md-8 col-sm-8 bg-sm-white none">
  <div class="card">
    <h4 class="bg-white text-center"> الحجزات </h4>
    <?php
                  if(isset($_GET['workerid'])){
                    $workerid=$_GET['workerid'];
                    $clintid=$_GET['clintid'];
                      $q="SELECT * from request WHERE workerid=$workerid and clintid=$clintid";
          $kk = $conn->query($q);
          foreach($kk as $k){?>
    <div class="card-body">      
      <button style="background-color:#79A3B1;border-radius:15px; border:#79A3B1 1px solid"><a href="deletereq.php?requestid=<?=$k['requestid']?>&job=<?=$job?>&workerid=<?=$workerid?>&clintid=<?=$clintid?>" style="padding:5px 10px; text-decoration:none; color:white; "> حذف</a></button>
    <p class="text-center"><?=$k['location']?><br> <?=$k['date']?></p>
</div><hr>
<?php } } ?>
</div><br><br>
<?php
if(isset($_GET['workerid'])){
  $workerid=$_GET['workerid'];
  $q="SELECT * from workers WHERE workerid=$workerid ";
  $kk = $conn->query($q);
  foreach($kk as $k){?>
<div class="card">
  <h4 class="bg-white text-center"> حجز الفني </h4><br>
  <form action="request.php" method="post">
  <?php 
    if($job=='job1'){ ?>
    <input type="hidden" value="job1"  name="job">
    <?php } ?>
     <?php 
    if($job=='job2'){ ?>
    <input type="hidden" value="job2"  name="job">
    <?php } ?>
     <?php 
    if($job=='job3'){ ?>
    <input type="hidden" value="job3"  name="job">
    <?php } ?>
     <?php 
    if($job=='job4'){ ?>
    <input type="hidden" value="job4"  name="job">
    <?php } ?>
    <input type="text" placeholder="الميعاد" name="date" required><br><br>
    <input type="text" placeholder="العنوان" name="location" required><br><br>    
    <input type="hidden" value="<?=$k['workerid']?>"  name="workerid">
    <?php
if(isset($_GET['clintid'])){
  $workerid=$_GET['workerid'];
  $q="SELECT * from clint WHERE clintid=$clintid";
  $kk = $conn->query($q);
  foreach($kk as $k){?> 
    <input type="hidden" value="<?=$k['clintid']?>"  name="clintid">
    <?php }}?>
    <button class="logbtn" type="submit">حجز</button>
  </form>
</div>
<?php }} ?>
</div>
    <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="card">
    <div class="card-header ">
   <div class="row"> 
    <div class="list col-6">
      <span> التقيمات </span>
  </div>
  <div class="list col-6 text-center">
  <?php
   if(isset($_GET['workerid'])){
    $workerid=$_GET['workerid'];
 $qqq="SELECT (round( sum(rat) / ( 4 * COUNT(ratingid)) )) as hhh FROM rating WHERE workerid =$workerid";
 $ttt=mysqli_query($conn,$qqq);
$data2=mysqli_fetch_assoc($ttt); ?>
    <span>5 / <?=$data2['hhh'] ?> </span>
    <?php } ?> 
  </div>
   </div>      
    </div>
    <?php
  if(isset($_GET['workerid'])){
    $workerid=$_GET['workerid'];?>
    <div class="card-body">
      <div id="sidebar" class="row">
          <div class="list col-6 ">
              <span> اداء الخدمه </span>
          </div>
          <div class="list col-6 stars">
            <a>⭐</a>
            <a>⭐</a>
            <a>⭐</a>
            <a>⭐</a>
            <a>⭐</a>
          </div>
          <div class="list col-6 ">
              <span> سرعة الرد </span>
          </div>
          <div class="list col-6 stars2">
            <a>⭐</a>
            <a>⭐</a>
            <a>⭐</a>
            <a>⭐</a>
            <a>⭐</a>
          </div>
          <div class="list col-6 ">
              <span> الاسعار </span>
          </div>
          <div class="list col-6 stars3">
            <a>⭐</a>
            <a>⭐</a>
            <a>⭐</a>
            <a>⭐</a>
            <a>⭐</a>
          </div>
          <div class="list col-6 ">
              <span> التعامل </span>
          </div>
          <div class="list col-6 stars4">
            <a>⭐</a>
            <a>⭐</a>
            <a>⭐</a>
            <a>⭐</a>
            <a>⭐</a>
          </div>
      </div><br>
      <form action="rating.php" method="post">
      <?php 
    if($job=='job1'){ ?>
    <input type="hidden" value="job1"  name="job">
    <?php } ?>
     <?php 
    if($job=='job2'){ ?>
    <input type="hidden" value="job2"  name="job">
    <?php } ?>
     <?php 
    if($job=='job3'){ ?>
    <input type="hidden" value="job3"  name="job">
    <?php } ?>
     <?php 
    if($job=='job4'){ ?>
    <input type="hidden" value="job4"  name="job">
    <?php } ?>
        <input type="hidden" value="0" id="k1" name="rating1"  >  
        <input type="hidden" value="0" id="k2" name="rating2" >  
        <input type="hidden" value="0" id="k3" name="rating3">  
        <input type="hidden" value="0" id="k4" name="rating4">
        <div class="txtb">
        <?php
            if(isset($_GET['clintid'])){
              $clintid=$_GET['clintid'];
              $a =" SELECT * FROM clint WHERE clintid=$clintid ";
              $aa = $conn->query($a);
              foreach($aa as $a){?>
          <input type="hidden"  name="clintid" value="<?=$a['clintid']?>" >
          <?php }} ?>
			</div>
        <?php $q="SELECT * from workers WHERE workerid = '$workerid' ";
          $kk = $conn->query($q);
          foreach($kk as $k){?>
        <input type="hidden" value="<?=$k['workerid']?>"  name="workerid"> 
        <?php }?> 
        <input type="submit" value="تقييم" class="logbtn">
      </form>
    </div>
    <?php } ?>
  </div>

  </div>
      </div>
  </div>
                </div>  
                </div>
              </div>
          </div>
          <script src="js/jquery-3.6.1.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.js"></script>
          <script src="js/main.js"></script>
          <script>
      $(".a1").fadeOut(4000);
$(".a2").fadeOut(4000);
    </script>	
        </body>
</html>
<?php session_destroy() ; ?>