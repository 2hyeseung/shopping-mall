<?php
   $con = mysqli_connect("localhost", "root", "", "shopDB") or die("MySQL 접속 실패 !!");

   $sql = "
	   CREATE TABLE membertbl 
		( ID  	VARCHAR(128) PRIMARY KEY NOT NULL,
	 	  NAME		VARCHAR(128) NOT NULL,
		  PASSWORD  TEXT(512) 	NOT NULL,
		  HEIGHT 	SMALLINT  NULL,
		  WEIGHT	SMALLINT NULL,
		  ADDRESS 	TEXT(512) NULL,
		  SALT		VARCHAR(20) NOT NULL	
		)
   ";
 
   $ret = mysqli_query($con, $sql);
 
   if($ret) {
	   echo "membertbl 생성 성공";
   }
   else {
	   echo "membertbl 생성 실패"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   }
 
   mysqli_close($con);
?>
