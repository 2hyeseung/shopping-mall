<!doctype html>
<html lang="en">
  <head>
    <title>Let's Tangjin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
  </head>
<body>
<div class="jumbotron text-center">
	  <h1>Let's Tangjin</h1>
	  <p>쇼핑몰</p> 
    </div>
<?php
session_start();
if(!isset($_SESSION['ID'])) 
{
header('Location: ./login.html');
}
?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<br>
			<br>
			<?php
			echo "ID:".$_SESSION['ID'].""."<br>";
			?>
			<br>
			<br>
			<a href=logout.php>로그아웃</a>
		</div>
	</div>
</div>
<br>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-sm-12">

			<hr>
			<form name = "form99" method ="post">
				<fieldset>
					<legend>&nbsp&nbsp상품 종류</legend>
					&nbsp&nbspShirts <input type="checkbox" name="category[]" value="Shirt"  />&nbsp&nbsp
					&nbsp&nbspV-neck <input type="checkbox" name="category[]" value="V-neck" />&nbsp&nbsp							
				</fieldset>
				<br>
				<fieldset>
					<legend>&nbsp&nbsp색상</legend>
					&nbsp&nbspRed <input type="checkbox" name="color[]" value="red"  />&nbsp&nbsp
					&nbsp&nbspGreen <input type="checkbox" name="color[]" value="green" />&nbsp&nbsp
					&nbsp&nbspBlue <input type="checkbox" name="color[]" value="blue" />&nbsp&nbsp
					&nbsp&nbspBlack <input type="checkbox" name="color[]" value="black" />&nbsp&nbsp
					&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp  
					<input type="submit" value="search" />
				</fieldset>
			</form>
			<hr>
		
<?php
$count=0;	
$results=array();
{$con = mysqli_connect("localhost","root","","shopDB");}
if (!$con){die ("MYSQL 접속 실패:".mysqli_connect_error());}

$a="1111111111";
$Category=array($a,$a);
$Color=array($a,$a,$a,$a);
if(!empty($_POST["category"])&&!empty($_POST["color"])){
	$Category= $_POST["category"];
	$Color = $_POST["color"];
}else{
	?>
	
	<?php
	echo "상품 종류와 색상을 모두 선택해 주세요.";
}


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



$sql = "SELECT * from producttbl ";
$ret = mysqli_query($con,$sql); 


if ($ret){
	while ($row = mysqli_fetch_array($ret)){
		for($i=0; $i<count($Category); $i++){
			for($j=0; $j<count($Color); $j++){
				$bool=true;
				$BF=bloom($Category[$i])|bloom($Color[$j]);
				for($k=0; $k<10;$k++){
					if($BF[$k]=="1"&&$row['BF_INDEX'][$k]=="0"){
						$bool=false;break;
					}
				}
				if($bool){
					array_push($results,$row['PRODUCTNAME']);
					$count=1;
				}
			}
		}
	}	
}else{
	echo"데이터 조회 실패";
	echo"실패원인:".mysqli_error($con);
	exit();
}
mysqli_close($con);
?>

		</div>
	</div>
</div>
<br>
<br>
<div class="container">
	<div class="row">
		<?php	
		if(in_array('Shirt',$results)||$count==0){?>
		<div class="col-sm-6" name="Shirt">
			<h2>Shirt</h2><br>
			<img src = "FK2RSA2662X_OWH.jpg" width ="200" height="200" alt "반팔티">
			<br>
			<br>
			<form name = "form1" method ="post" action="cart1.php">
			<INPUT type = "submit" value = "구매">
			</form>
		</div>
		<?php }?>
		
		<?php if(in_array('V-neck',$results)||$count==0){?>
		<div class="col-sm-6" name="V-neck">
			<h2>V-neck</h2><br>
			<img src = "2175256321_1_1_3.jpg" width ="200" height="200" alt "브이넥">
			<br>
			<br>
			<form name = "form1" method ="post" action="cart3.php">
			<INPUT type = "submit" value = "구매">
			</form>
		</div>
		<?php }?>
	</div>
</div>
<br>
<br>
<br>
<br>
<br>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>	


