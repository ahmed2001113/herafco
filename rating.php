<?php
include("conn.php");
 if(isset($_POST['clintid'])){
 $clintid=$_POST['clintid'];
 $workerid=$_POST['workerid'] ;
 $job=$_POST['job'] ;

 $q="SELECT requestid FROM request WHERE  workerid=$workerid and clintid=$clintid";
 $login = $conn->query($q);
 $count=$login->num_rows;
 $q2="SELECT ratingid FROM rating WHERE  workerid=$workerid and clintid=$clintid";
 $login2 = $conn->query($q2);
 $count2=$login2->num_rows;
if($count > $count2){
    $k1=$_POST['rating1'];
    $k2=$_POST['rating2'];
    $k3=$_POST['rating3'];
    $k4=$_POST['rating4'];
    $r=$k1 +$k2 +$k3 +$k4 ;

     $t = "INSERT INTO rating (rat,workerid,clintid) VALUES ('$r','$workerid','$clintid')";
     $add = $conn->query($t) ;
     if($add){    
         header("Location:workers.php?workerid=$workerid&&clintid=$clintid&&job=$job");
}}
 else{
     session_start();
     $_SESSION['rating']="You have to request first";
     header("Location:workers.php?workerid=$workerid&&clintid=$clintid&&job=$job");
 }}