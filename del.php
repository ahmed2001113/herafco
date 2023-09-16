<?php
include ("conn.php"); 
if(isset($_GET['clintid'])){
    $clintid=$_GET['clintid'];
    $d="DELETE FROM clint WHERE clintid=$clintid;";
    $dell= $conn->query($d);
if($dell){
  header("Location:admin.php");
}
}
if(isset($_GET['workerid'])){
    $workerid=$_GET['workerid'];
    $d="DELETE FROM workers WHERE workerid=$workerid;";
    $dell= $conn->query($d);
if($dell){
  header("Location:admin.php");
}
}
if(isset($_GET['requestid'])){
    $requestid=$_GET['requestid'];
    $d="DELETE FROM request WHERE requestid=$requestid";
    $dell= $conn->query($d);
if($dell){
  header("Location:admin.php");
}
}
if(isset($_GET['complaintid'])){
    $comp=$_GET['complaintid'];
    $d="DELETE FROM complaint WHERE complaintid=$comp";
    $dell= $conn->query($d);
if($dell){
  header("Location:admin.php");
}
}
