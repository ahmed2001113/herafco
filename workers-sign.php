<?php 
include ("conn.php") ;
if(isset($_POST['workerid'])){
        $workerid =$_POST['workerid'];
        $national_id = $_POST['national_id'];
        $age =$_POST['age'];
        $experience =$_POST['experience'];
$job =$_POST['job'];
$q="SELECT * FROM workers WHERE workerid = '$workerid'";
$login3 = $conn->query($q);
$count=$login3->num_rows;
if($count == 1){
$qe="UPDATE workers SET `age`='$age',`experience`='$experience',`job`='$job',`national_id`='$national_id' WHERE `workerid` = $workerid";
   $update = $conn->query($qe) ;
   if($update){
       session_start();
       $_SESSION['login']= "Add Member Successfully ";   
       header("Location:workers3.php?workerid=$workerid&&job=$job") ;
}}}
else{  
    $workerid =$_POST['workerid'];
    header("Location:workers-signup.php?workerid=$workerid") ;
}
?>