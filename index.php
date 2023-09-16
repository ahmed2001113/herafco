<?php 
 session_start();
 include ("conn.php")
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Log In</title>
		<link rel="stylesheet" href="css/main.css"/>
		<style>
			body{
				color:#fff; 
				background-color:#79A3B1;
			}
			.login-form{
				background-color:#294859;
			}
			.logbtn{
				color:#fff; 
				background-color:#79A3B1;
			}
			a,.txtb input,input::placeholder{
				color:#fff; 
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
	<body>
	<?php 
 if(isset($_SESSION['errorlogin']) ){ ?>    
 <div class="alert alert-danger text-center a2" >
  <h5><?= $_SESSION['errorlogin']; ?></h5></div>
  <?php } ?>  
		<br>

		<form action="login.php" method="post" class="login-form">
			<h1>Login</h1>			
			<div class="txtb">
                <input type="email" placeholder="email" name="email" required><br>
			</div>
			<div class="txtb">
                <input type="password" placeholder="password" name="password" required><br>
			</div>
			<button type="submit" class="logbtn">Log In</button>
			
			<div class="bottom-text">
				<h3>Don't hava account ? <a href="signup.php" class="s">Sign up</a></h3>
			</div>
		</form>
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
<?php 
 session_destroy();
?>