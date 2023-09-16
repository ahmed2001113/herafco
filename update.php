<?php
include ("conn.php"); 
    $id=$_GET['id'];    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Up Date Admin</title>
          <style>
body{
        color:#fff; 
				background-color:#79A3B1;
			}
      form {
        width:80%;
        height: 50vh;
        margin: 5% auto;
        background-color: #294859;
        padding: 30px 30px 30px 30px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
    input{
          box-sizing:border-box;  
        width: 100%;
        padding: 22px;
        border-radius: 5px;
        border: none;
        margin-bottom: 10px;
        box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1);
      }
      button[type="submit"] {
        padding: 10px 10px;
        background-color:#79A3B1;
        color: #fff;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        font-size:20px;
    }
    a{
      text-decoration:none;
    color:white;
    font-size:20px;
background-color:#79A3B1;
    border-radius:10px;
      padding: 10px 10px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <form action="upd.php"method="post">
    <?php
            $a =" SELECT * FROM admins where id=$id";
            $aa = $conn->query($a);
            foreach($aa as $a){?>
       <h3>Email: <?=$a['email']?></h3> 
       <h3>Password: <?=$a['password']?></h3> 
       <?php } ?>
       <input type="hidden" value="<?=$id ?>" name="id">
      <input type="email" placeholder="Enter new email" name="email" required><br><br>
      <input type="password" placeholder="Enter new password" name="password" required><br><br>
      <button type="submit">Submit</button>
       <a href="admin.php" >Cancel</a>
    </form>
  </body>
</html>
