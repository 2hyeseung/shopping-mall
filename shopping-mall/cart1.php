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
		<div class="col-sm-4">
			<?php
			echo "ID:".$_SESSION['ID'];
			?>
			<br>
			<h2>T-shirt</h2><br>
			<img src = "FK2RSA2662X_OWH.jpg" width ="200" height="200" alt "반팔티">
			<br>

		</div>
		<div class="col-sm-4">
			<br>
			<br>
			<br>
			<table class="table">
				<thead>
					<tr>
						<th>COLOR종류</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>black</th>
					</tr>
					<tr>
						<th>red</th>
					</tr>
					<tr>
						<th>blue</th>
					</tr>
				</tbody>
			</table>	
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<br>
			<br>
			사이즈추천받기(모두 입력해주세요!!)
			<br>
			<form name = "form2" method ="post" action="shirtsize.php">
				키 : <INPUT type = "text" name="height">
				몸무게 : <INPUT type = "text" name="weight">
				<INPUT type = "submit" value = "입력">
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<br>
			<br>
			주문하기
			<br>
			<form name = "form1" method ="post" action="cart2.php">
				SIZE:<INPUT type = "text" name= "size">
				COLOR:<INPUT type = "text" name= "color">
				ADDRESS:<INPUT type = "text" name= "address">
				ID:<INPUT type = "text" name = "id">
				<INPUT type = "submit" value = "구매확정">
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
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