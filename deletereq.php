<?php
include ("conn.php"); 
if(isset($_GET['requestid'])){
    $requestid=$_GET['requestid'];
    $job=$_GET['job'];
    $workerid=$_GET['workerid'];
    $clintid=$_GET['clintid'];
            $d="DELETE FROM request WHERE requestid=$requestid";
    $dell= $conn->query($d);
if($dell){
  header("Location:workers.php?workerid=$workerid&&clintid=$clintid&&job=$job");
}
}