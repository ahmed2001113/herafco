<?php
include ("conn.php"); 
    $complaintid=$_GET['complaint'];
    $newemail=$_GET['email'];
   $d="DELETE FROM complaint WHERE complaintid=$complaintid";
    $dell= $conn->query($d);
if($dell){
  header("Location:home.php?email=$newemail");
}
