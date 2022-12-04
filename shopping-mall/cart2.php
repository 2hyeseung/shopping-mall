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
<div class="container">
	<div class="row">
		<div class="col-sm-12">
<?php
session_start();
if(!isset($_SESSION['ID'])) 
{
header('Location: ./login.html');
}
if ($_SERVER["REQUEST_METHOD"]=="POST"){
$con = mysqli_connect("localhost","root","","shopdb");
if (!$con){
 die ("MYSQL 접속 실패:".mysqli_connect_error());
}
$productname = "Shirt";
$price = 10000;
$size= $_POST["size"];
$color = $_POST["color"];
$address = $_POST["address"];
$id = $_POST["id"];

$sql = "
SELECT ID, AES_DECRYPT(UNHEX(NAME),'key') as NAME, HEIGHT, WEIGHT,PASSWORD from membertbl where id =HEX(AES_ENCRYPT('".$id."','pw'))";
$ret = mysqli_query($con,$sql); 

if ($ret){
	if(mysqli_num_rows($ret) < 1) {
		echo "id인증 실패";
		?>
			<br>
			<br>
			<form name="form1" method="post" action="cart1.php">
				<input type="submit" value="돌아가기">
			</form>
			<br>
			<br>
			<a href=logout.php>로그아웃</a>
		</div>
	</div>
</div>
		<?php
	}
	else{
	while ($row = mysqli_fetch_array($ret)){
		$id = $row["ID"];
		$name = $row["NAME"];
		$height = $row["HEIGHT"];
		$weight = $row["WEIGHT"];
		$password=$row["PASSWORD"];
		$sql = "
         insert into ordertbl values
          ('$id',HEX(AES_ENCRYPT('$name','key')),'$password','$height','$weight','$address','$size','$productname','$color','$price')";
          $ret2 = mysqli_query($con,$sql);
		if($ret2){
			?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<?php
			echo "ID:".$_SESSION['ID']."<br><br><br>";
			echo "'$name'님  Shirt 구매 확정";
			?>
			<br>
			<br>
			<br>
			<form name="form1" method="post" action="main.php">
				<input type="submit" value="메인페이지">
			</form>
			<br>
			<br>
			<a href=logout.php>로그아웃</a>
		</div>
	</div>
</div>
<?php
		}
		else{
		echo "주문실패".mysqli_error($con);
		?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<br>
			<br>
			<form name="form1" method="post" action="cart1.php">
				<input type="submit" value="돌아가기">
			</form>
			<br>
			<br>
			<a href=logout.php>로그아웃</a>
		</div>
	</div>
</div>
		<?php
		}
		}
	  
	}
	
}
	
else{
	echo"데이터 조회 실패";
	echo"실패원인:".mysqli_error($con);
	exit();
}
mysqli_close($con);
}
?>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>