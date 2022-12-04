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
				사이즈 추천창
				<br>
				<br>
				<?php
				echo "ID:".$_SESSION['ID'].""."<br><br>";
				echo "키:".$_POST["height"];
				echo "몸무게:".$_POST["weight"]."<br><br><br>";
				if($_POST["height"]==null ||$_POST["weight"]==null){
					header('Location: ./cart3.php');
				}
				if($_POST["height"]<=150)
					$height=9;
				else if($_POST["height"]>150&&$_POST["height"]<=155)
					$height=2;
				else if($_POST["height"]>155&&$_POST["height"]<=160)
					$height=7;
				else if($_POST["height"]>160&&$_POST["height"]<=165)
					$height=5;
				else if($_POST["height"]>165&&$_POST["height"]<=170)
					$height=1;
				else if($_POST["height"]>170&&$_POST["height"]<=175)
					$height=4;
				else if($_POST["height"]>175&&$_POST["height"]<=180)
					$height=6;
				else
					$height=3;

				if($_POST["weight"]<40)
					$weight=2;
				else if($_POST["weight"]>=40&&$_POST["weight"]<50)
					$weight=5;
				else if($_POST["weight"]>=50&&$_POST["weight"]<60)
					$weight=8;
				else if($_POST["weight"]>=60&&$_POST["weight"]<70)
					$weight=4;
				else if($_POST["weight"]>=70&&$_POST["weight"]<80)
					$weight=1;
				else
					$weight=9;

				$con = mysqli_connect("localhost", "root", "", "shopDB") or die("MySQL 접속 실패 !!");
				$sql = "SELECT SIZE FROM ordertbl WHERE HEIGHT=$height and WEIGHT=$weight";
				$ret=mysqli_query($con,$sql);
	
				$large=0;
				$small=0;
				$medium=0;
				$total=0;
				if($ret){
					while($row=mysqli_fetch_array($ret)){
						$total++;
						if($row["SIZE"]=='L'){
							$large++;}
						else if($row["SIZE"]=='M'){
							$medium++;}
						else if($row["SIZE"]=='S'){
							$small++;}
					}
				echo (($large/$total)*100)."%가 L을 주문함."."<br>";
				echo (($medium/$total)*100)."%가 M을 주문함."."<br>";
				echo (($small/$total)*100)."%가 S을 주문함."."<br>";
				}
				else{
				echo"데이터 조회 실패";
				echo"실패원인:".mysqli_error($con);
				exit();
				}
				mysqli_close($con);
				?>
				<br>
				<br>
				<form name="form1" method="post" action="cart3.php">
					<input type="submit" value="주문하러가기">
				</form>
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

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>	