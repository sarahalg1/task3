<?php


$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con = new mysqli('localhost', 'root', '','direction');



if(isset($_POST['stop1'])){
	
$sql = "INSERT INTO dirctions (left1,right1,forward,backward,stop)VALUES('','','','','S')";

$rs = mysqli_query($con, $sql);
$sql3= mysqli_query($con,"SELECT * FROM dirctions ORDER BY id DESC LIMIT 1");

$pr3=mysqli_fetch_row($sql3);



  echo $pr3[4];
}


if(isset($_POST['left1'])){
	
$sql = "INSERT INTO dirctions (left1,right1,forward,backward,stop)VALUES('L','','','','')";

$rs = mysqli_query($con, $sql);
$sql2= mysqli_query($con,"SELECT * FROM dirctions ORDER BY id DESC LIMIT 1");

$pr2=mysqli_fetch_row($sql2);



  echo $pr2[0];
}



if(isset($_POST['right1'])){
	
$sql = "INSERT INTO dirctions (left1,right1,forward,backward,stop)VALUES('','R','','','')";

$rs = mysqli_query($con, $sql);

$sql4= mysqli_query($con,"SELECT * FROM dirctions ORDER BY id DESC LIMIT 1");

$pr4=mysqli_fetch_row($sql4);


echo $pr4[1];
}
if(isset($_POST['backward'])){
	
$sql = "INSERT INTO dirctions (left1,right1,forward,backward,stop)VALUES('','','','B','')";

$rs = mysqli_query($con, $sql);

$sql5= mysqli_query($con,"SELECT * FROM dirctions ORDER BY id DESC LIMIT 1");

$pr5=mysqli_fetch_row($sql5);



  echo $pr5[3];
}
if(isset($_POST['forward'])){
	
$sql = "INSERT INTO dirctions (left1,right1,forward,backward,stop)VALUES('','','F','','')";

$rs = mysqli_query($con, $sql);

$sql6= mysqli_query($con,"SELECT * FROM dirctions ORDER BY id DESC LIMIT 1");

$pr6=mysqli_fetch_row($sql6);



  echo $pr6[2];
}

mysqli_close($con);



?>