<?php 
include ("conn.php") ;
if(isset($_GET['email'])){
$newemail=$_GET['email'];
$w="SELECT workerid as dd , job as cc from workers WHERE email = '$newemail' ";
          $kk = $conn->query($w);
          foreach($kk as $k){
header("Location:workers3.php?workerid=$k[dd]&&job=$k[cc]");
          }}
?>