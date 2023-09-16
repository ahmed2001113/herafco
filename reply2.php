<?php
include ("conn.php");
$reply=$_POST['reply'];     
    $complaintid=$_POST['complaintid'];
    $d="UPDATE complaint SET reply='$reply' WHERE complaintid=$complaintid ";
    $update = $conn->query($d);
    if($update){
  header("Location:admin.php");
}
?>