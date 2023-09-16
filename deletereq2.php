<?php
include ("conn.php"); 
if(isset($_GET['requestid'])){
    $requestid=$_GET['requestid'];
    $job=$_GET['job'];
    $workerid=$_GET['workerid'];
             $d="DELETE FROM request WHERE requestid=$requestid";
    $dell= $conn->query($d);
if($dell){
  header("Location:workers3.php?workerid=$workerid&&job=$job");
}
}