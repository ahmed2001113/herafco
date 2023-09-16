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
	<title>Sign Up</title>
<link rel="stylesheet" href="css/main.css">
<style>
				body{
				color:#fff; 
				background-color:#79A3B1;
			}
			.sign-form{
				background-color:#294859;
			}
			.logbtn{
				color:#fff; 
				background-color:#79A3B1;
			}
			a,.txtb input,input::placeholder{
				color:#fff; 
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
<body>          
<?php if(isset($_SESSION['error'])){?>  
      <div class="alert alert-danger text-center a2" >
  <h5><?= $_SESSION['error']; ?></h5></div>
<?php } ?>
	<br>
	<form class="sign-form" action="sign.php" method="post">
		<h2>Sign Up</h2>
		<div class="txtb">
			<input type="text" placeholder="User Name" name="name" required><br>
		</div>
		<div class="txtb">
			<input type="email" placeholder="Email" name="email" required><br> 
		</div>
	  
		<div class="txtb">
			<input type="password" placeholder="Password" name="password" required minlength="8"><br> 
		</div>
		<div class="txtb">
			<input type="number" placeholder="Phone" name="phone" required min="1000000000"><br>			
		</div>		

		<div class="txtb">
			<input type="text" placeholder="Address" name="address" required><br>
		</div>
<input type="hidden" value="kk" name="gg" id="hinp">		
		<button class="logbtn" type="submit" id="hbtn2">Users </button>
			<br><br>
		<button class="logbtn" id="hbtn" type="submit">Workers </button>					
				<h3>Do you hava account ? <a href="index.php" class="s">Login</a></h3>
	</form>

	<script src="js/jquery-3.6.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script>
      $(".a1").fadeOut(4000);
$(".a2").fadeOut(4000);
    </script>	
<script>
	let hinp=document.getElementById("hinp");
let hbtn =document.getElementById("hbtn");
let hbtn2 =document.getElementById("hbtn2");
hbtn.addEventListener('click',()=>{
    hinp.value="ww";
})
hbtn2.addEventListener('click',()=>{
    hinp.value="uu";
})	
</script>
</body>
</html>
<?php
session_destroy();
?>