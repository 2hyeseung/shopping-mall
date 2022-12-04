<?php
   $con = mysqli_connect("localhost", "root", "", "shopDB") or die("MySQL 접속 실패 !!");
   
      function bloom($data){
	    $barr=array(0,0,0,0,0,0,0,0,0,0);   
	    $arr=str_split($data,3);
		foreach($arr as $key => $value){
			$bf=bindec(hash('sha256',$value))%10;
			$barr[(int)$bf]=1;
			
			$bf2=bindec(hash('sha512',$value))%10;
			$barr[(int)$bf2]=1;
		}
		return implode($barr);
	
 }

	$sb=bloom('Shirt')|bloom('black');
	$sbb=bloom('Shirt')|bloom('blue');
	$sr=bloom('Shirt')|bloom('red');

	$vr=bloom('V-neck')|bloom('red');
	$vg=bloom('V-neck')|bloom('green');

   $sql = "
		INSERT INTO producttbl VALUES
		('Shirt','black','".$sb."'),
		('Shirt','blue','".$sbb."'),
		('Shirt','red','".$sr."'),
		('V-neck','red','".$vr."'),
		('V-neck','green','".$vg."')
   ";

   $ret = mysqli_query($con, $sql);
   
   if($ret) {
	   echo "데이터가 성공적으로 입력됨";
   }
   else {
	   echo "데이터 입력 실패"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   }
 
   mysqli_close($con);
?>
