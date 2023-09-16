<?php
include("conn.php");
    $location=$_POST['location'];
    $date=$_POST['date'];
    $workerid=$_POST['workerid'] ;
    $clintid=$_POST['clintid'] ;
    $job=$_POST['job'] ;
    $q = "INSERT INTO request (location,date,workerid,clintid) VALUES ('$location','$date','$workerid','$clintid')";
    $add = $conn->query($q) ;
    if($add){    
header("Location:workers.php?workerid=$workerid&&clintid=$clintid&&job=$job");
}
?>
