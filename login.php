<?php
include ("conn.php");
$email =$_POST['email'];
$password =$_POST['password'];
$newemail = mysqli_real_escape_string($conn,$email);
$newpassword = mysqli_real_escape_string($conn,$password);
$hashpassword = md5($newpassword);

$q="SELECT * FROM admins WHERE email = '$email' and  password = '$password' ";
$login = $conn->query($q);
$count=$login->num_rows;
if($count == 1){
   header("location:admin.php");
}
else{
  $q="SELECT * FROM clint WHERE email = '$newemail' and  password = '$hashpassword' ";
  $login = $conn->query($q);
$count=$login->num_rows;
if($count == 1){
    session_start();
  $_SESSION['login']="Login Successfully";
  header("Location:home.php?email=$newemail");
}
else{
      $q="SELECT * FROM workers WHERE email = '$newemail' and  password = '$hashpassword' ";
    $login2 = $conn->query($q);
    $count2=$login2->num_rows;
    if($count2 == 1){
      header("Location:workers2.php?email=$newemail");
    }  
    else{
          session_start();
          $_SESSION['errorlogin']="This is a wrong email";
          header("Location:index.php");
      } }}
  
  ?> 

