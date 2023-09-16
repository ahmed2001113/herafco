<?php
include ("conn.php");
$id=$_POST['id'];     
    $email=$_POST['email'];
    $password=$_POST['password'];
    $d="UPDATE admins SET email='$email' , password='$password' WHERE id=$id ";
    $update = $conn->query($d);
    if($update){
  header("Location:admin.php");
}
?>