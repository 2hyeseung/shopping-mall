<?php
   $con = mysqli_connect("localhost", "root", "", "shopDB") or die("MySQL 접속 실패 !!");

   $sql = "
	   CREATE TABLE producttbl 
		( PRODUCTNAME VARCHAR(20) NOT NULL,
		  COLOR VARCHAR(20) NOT NULL,
		  BF_INDEX VARCHAR(20) NOT NULL
		)
   ";
 
   $ret = mysqli_query($con, $sql);
 
   if($ret) {
	   echo "producttbl 생성 성공";
   }
   else {
	   echo "producttbl 생성 실패"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   }
 
   mysqli_close($con);
?>
