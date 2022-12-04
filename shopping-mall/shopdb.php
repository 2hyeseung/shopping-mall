<?php
$con =mysqli_connect("localhost","root","","")
or die("접속 실패");

$sql= "create database shopdb default character set utf8 collate utf8_general_ci";
$ret = mysqli_query($con,$sql);

if ($ret){
	echo "db 생성 성공";
}
else {
	echo "db 생성 실패!!"."<br>";
	echo "실패 원인 : mysqli_error($con)";
}

mysqli_close($con);
?>