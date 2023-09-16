<?php
include("conn.php");
    $complaint=$_POST['complaint'];
    $newemail=$_POST['email'] ;
    $q = "INSERT INTO complaint (complaint,email) VALUES ('$complaint','$newemail')";
    $add = $conn->query($q) ;
    if($add){    
header("Location:home.php?email=$newemail");
}
?>