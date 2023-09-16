<?php 
include("conn.php");
$name=$_POST['name'];
$newemail=$_POST['email'];

if($name == "نقاش"){
     header("Location:home.php?email=$newemail#job1");
}
elseif($name=='نجار'){
header("Location:home.php?email=$newemail#job2");
}
elseif($name=='سباك'){
header("Location:home.php?email=$newemail#job3");
}
elseif($name=='كهربائي'){
header("Location:home.php?email=$newemail#job4");
}
else{
header("Location:home.php?email=$newemail");
}
?>
