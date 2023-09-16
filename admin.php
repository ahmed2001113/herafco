<?php
include ("conn.php") ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <style>
body{
        color:#fff; 
				background-color:#79A3B1;
			}
			.logbtn{
        color:#fff; 
				background-color:#79A3B1;
			}
        table , td ,th{
            border:1px solid black;
            padding: 5px;
        }
        table{
            width: 87%;
            margin:auto;
            text-align:center;
            font-size:25px;
        }
        h1,h2,h3,h5{
            text-align:center;
        }
        a{
            text-decoration:none;
    color:white;
    font-size:20px;
padding:5px 15px;
background-color:#294859;
border:1px solid #294859;
border-radius:10px;
    overflow:hidden;
}
    </style>
</head>
<body>
    <a href="index.php">Log Out</a>   
        <h1>ADMIN</h1>
        <?php
            $a =" SELECT * FROM admins";
            $aa = $conn->query($a);
            foreach($aa as $a){?>
            <h2>Email: <?=$a['email']?> </h2>
            <h3>Password: <?=$a['password']?></h3>
            <h5><a href="update.php?id=<?=$a['id']?>" class="ad">Up Date</a></h5>
            <?php } ?>

    <table>
        <h1>العملاء</h1>
        <thead><th>كود عميل</th><th>العميل</th><th>حذف</th></thead>
        <tbody>
            <?php
            $a =" SELECT * FROM clint";
            $aa = $conn->query($a);
            foreach($aa as $a){?>
                <tr>
                <td><?=$a['clintid']?></td><td><?=$a['name']?></td><td><a href="del.php?clintid=<?=$a['clintid']?>">حذف</a></td>
            </tr>
                <?php } ?>
         </tbody> 
    </table>
    <table>
        <h1>الفنيون</h1>
        <thead><th>كود الفني</th><th>الفني</th><th>الوظيفة</th><th>حذف</th></thead>
        <tbody>
            <?php
            $a =" SELECT * FROM workers";
            $aa = $conn->query($a);
            foreach($aa as $a){?>
                <tr>
                <td><?=$a['workerid']?></td><td><?=$a['name']?></td><td><?=$a['job']?></td><td><a href="del.php?workerid=<?=$a['workerid']?>">حذف</a></td>
            </tr>
                <?php } ?>
         </tbody> 
    </table>
    <table>
        <h1>الحجزات</h1>
        <thead><th>كود الحجز</th><th>الميعاد</th><th>العنوان</th><th>حذف</th></thead>
        <tbody>
            <?php
            $a =" SELECT * FROM request";
            $aa = $conn->query($a);
            foreach($aa as $a){?>
                <tr>
                <td><?=$a['requestid']?></td><td><?=$a['location']?></td><td><?=$a['date']?></td><td><a href="del.php?requestid=<?=$a['requestid']?>">حذف</a></td>
            </tr>
                <?php } ?>
         </tbody> 
    </table>
    <table>
        <h1>الشكاوي</h1>
        <thead><th>كود الشكوي</th><th>الشكوي</th><th>الرد</th><th>حذف</th><th>رد</th></thead>
        <tbody>
            <?php
            $a =" SELECT * FROM complaint";
            $aa = $conn->query($a);
            foreach($aa as $a){?>
                <tr>
                <td><?=$a['complaintid']?></td><td><?=$a['complaint']?></td><td><?=$a['reply']?></td><td><a href="del.php?complaintid=<?=$a['complaintid']?>">حذف</a></td>
                <td><a href="reply.php?complaintid=<?=$a['complaintid']?>">رد</a></td>
            </tr>
                <?php } ?>
         </tbody> 
    </table>
</body>
</html>
