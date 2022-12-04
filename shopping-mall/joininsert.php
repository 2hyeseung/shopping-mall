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
$con=mysqli_connect("localhost","root","","shopDB")
or die("MySQL접속 실패!!");
$id=$_POST["id"];
$password=$_POST["password"];
$name=$_POST["name"];
$height=$_POST["height"];
$weight=$_POST["weight"];
$address=$_POST["address"];
$salt=rand();
$token=hash('sha512',"$password$salt");

if($height<=150)
$height=9;
else if($height>150&&$height<=155)
$height=2;
else if($height>155&&$height<=160)
$height=7;
else if($height>160&&$height<=165)
$height=5;
else if($height>165&&$height<=170)
$height=1;
else if($height>170&&$height<=175)
$height=4;
else if($height>175&&$height<=180)
$height=6;
else
$height=3;

if($weight<40)
$weight=2;
else if($weight>=40&&$weight<50)
$weight=5;
else if($weight>=50&&$weight<60)
$weight=8;
else if($weight>=60&&$weight<70)
$weight=4;
else if($weight>=70&&$weight<80)
$weight=1;
else
$weight=9;

$sql="insert into membertbl(ID,NAME,PASSWORD,HEIGHT,WEIGHT,ADDRESS,SALT) 
values(HEX(AES_ENCRYPT('".$id."','pw')),HEX(AES_ENCRYPT('".$name."','key')),'$token','$height','$weight','$address','$salt')";
$ret=mysqli_query($con,$sql);

if($ret){
echo "회원가입 성공";
?>
			<form name="form1" method="post" action="login.html">
				<input type="submit" value="로그인하러가기">
			</form>
<?php
}
else{
echo "회원가입 실패";
?>
			<form name="form1" method="post" action="join.html">
				<input type="submit" value="다시 시도해주세요">
			</form>
<?php
}
?>
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