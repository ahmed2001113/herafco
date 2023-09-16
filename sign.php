<?php
include ("conn.php") ;
$gg=$_POST['gg'];
$email=$_POST['email'];
$newemail = mysqli_real_escape_string($conn,$email);

$_SESSION['error']="";
$chickemail="SELECT * FROM clint WHERE email ='$newemail'";
$ishere=$conn->query($chickemail);
$countofemail=$ishere->num_rows;
if($countofemail == 1){
    session_start();
    $_SESSION['error']="Email already here";
    header("Location:signup.php");
}
else{
    $chickemail2="SELECT * FROM workers WHERE email ='$newemail'";
    $ishere2=$conn->query($chickemail2);
    $countofemail=$ishere2->num_rows;
    if($countofemail == 1){
        session_start();
        $_SESSION['error']="Email already here";
        header("Location:signup.php");
    }
elseif($gg == 'uu'){
    $password=$_POST['password'];
    $newpassword = mysqli_real_escape_string($conn,$password);
    $hashpassword = md5($newpassword);
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $q = "INSERT INTO clint (email,password,name,phone,address) VALUES ('$newemail','$hashpassword','$name','$phone','$address')";
    $add = $conn->query($q) ;
    if($add){
       session_start();
    $_SESSION['login']= " Add Member Successfully ";
    header("Location:home.php?email=$newemail") ;
}
}
elseif($gg == 'ww'){
    $password=$_POST['password'];
    $newpassword = mysqli_real_escape_string($conn,$password);
    $hashpassword = md5($newpassword);
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $q = "INSERT INTO workers (email,password,name,phone,address) VALUES ('$newemail','$hashpassword','$name','$phone','$address')";
     $add = $conn->query($q) ;
     if($add){
        session_start();
     $_SESSION['login']= " Add Member Successfully ";
     header("Location:workers-signup.php?email=$newemail");
}}}
 ?>