<?php
include ("conn.php"); 
    $complaintid=$_GET['complaintid'];    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Reply Complaint</title>
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
    <form action="reply2.php"method="post">
    <?php
            $a =" SELECT * FROM complaint where complaintid=$complaintid";
            $aa = $conn->query($a);
            foreach($aa as $a){?>
       <h3><?=$a['complaint']?></h3> 
       <?php } ?>
       <input type="hidden" value="<?=$complaintid ?>" name="complaintid">
      <input type="text" placeholder="Enter text here" name="reply" required><br><br>
      <button type="submit">Submit</button>
      <a href="admin.php">Cancel</a>
    </form>
  </body>
</html>
