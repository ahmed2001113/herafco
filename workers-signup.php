<?php
session_start();
include ("conn.php") ;
?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workres SignUp</title>
    <link rel="stylesheet" href="css/bootstrap.css" media="all">
    <link rel="stylesheet" href="css/main.css" >
    <style>
      				body,.card-body,.card-header{
				color:#fff; 
				background-color:#79A3B1 !important;
			}
			 .row{
				background-color:#294859;
			padding: 10px;
      }
			.logbtn{
				color:#fff; 
				background-color:#294859;
			}
			a,.txtb input,input::placeholder{
				color:#000; 
			}
			.txtb{
				border-bottom:1px solid white;
			}
			.s{
				color:#79a3b1 !important;
				text-decoration: none;
			}
			.s:hover {
				color:#fff !important;
			}
    </style>
</head>
<body><br>
<?php 
 if(isset($_SESSION['errorlog']) ){ ?>    
 <div class="alert alert-danger text-center a2" >
  <h5><?= $_SESSION['errorlog']; ?></h5></div>
  <?php } ?>
  <header>
    <div class="hsoub-content">
        <div class="container main-container c2">
          <div class="page_header">
            <div id="header-group" class="row mb-3">
              <div class="heading col-lg-9 col-8 full_width">
                <div class="row text-light">
                <h1>اضافه فني</h1><br>
              </div>
            </div>
              <div class="col-lg-3 col-4 hidden full_width">
                <div class="page-header-buttons  no-buttons " dir="ltr">
                </div>
              </div>
            </div>
          </div>
        </div>
              <div class="container main-container c2">
                <div class="content inside layout">
                  <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12">                      
                    </div>
                  </div>
                                    <div class="row">
                    <div class="col-md-12 col-sm-12 unavailable_alert">    
                    </div>
                        <div class="col-md-12 col-lg-4 col-sm-12">
                          <div class="card user_info text-center">
          <div class="card-body">                          
                <form action="workers-sign.php" method="post" enctype="multipart/form-data">
                  <label for="image" >
                    <img src="img/all.jpeg" width="84" height="84">              
                  </label>  
        </div>
      </div><br>
          <div class="card u-margin-bottom account_completion">
              <div class="card-header ">
                  <h4>إكمال الحساب</h4>
              </div>
              <div class="card-body">
              <?php if(isset($_GET['email'])){
  $newemail =$_GET['email'];
  $t="SELECT * from workers where email = '$newemail' ";
$kk = $conn->query($t);
foreach($kk as $k){?>
                <input type="hidden" value="<?=$k['workerid']?>" name="workerid">
                <?php }}?>
              <?php if(isset($_GET['workerid'])){
  $workerid =$_GET['workerid'];
  $t="SELECT * from workers where workerid = '$workerid' ";
$kk = $conn->query($t);
foreach($kk as $k){?>
                <input type="hidden" value="<?=$k['workerid']?>" name="workerid">
                <?php }}?>
                <label name="workers_age">السن</label><br>
                <input type="number" placeholder="السن" name="age" required min="18" max="80"><br>
                <label name="workers_email">رقم البطاقة</label><br>
                <input type="number" placeholder="رقم البطاقة" name="national_id" required min="1000000000000"> <br>
                <label name="workers_name">الوظيفة</label><br>
                <select name="job" required>
                  <option>نجار</option>
                  <option>كهربائي</option>
                  <option>نقاش</option>
                  <option>سباك</option>
                </select>
            </div>
          </div>
                        </div>
                        <div class="col-md-12 col-lg-8 col-sm-12">
      <div class="card">
          <div class="card-body user-account-page">
                  <div class="u-margin-bottom">
                      <label name="workers_text">النبذة التعريفية</label><br>
                      <textarea name="experience" rows="12" cols="70" class="c-form__control auto_height" required></textarea>
                  </div>
                  <div>
                      <button type="submit" class="logbtn">حفظ</button>
                  </div>
                </div>
            </form>
      </div>
                    </div>
                  </div>
                </div>
                </div>            
            </div>
          </header>
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