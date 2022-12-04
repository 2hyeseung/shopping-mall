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
if($_SESSION['ID']=='aaa' or $_SESSION['ID']=='bbb' or $_SESSION['ID']=='ccc' or $_SESSION['ID']=='ddd')
{
	?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				관리자페이지입니다
				<br>
				<br>
				<br>
				<form name="form1" method="post" action="info.php">
					<input type="submit" value="주문 정보 보러가기">
				</form>
				<br>
				<br>
				<a href=logout.php>로그아웃</a>
			</div>
		</div>
	</div>	
	<?php
}else{
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				메인페이지입니다
				<br>
				<br>
				<?php
				echo "ID:".$_SESSION['ID'].""."<br>";
				?>
				<br>
				<br>
				<form name="form1" method="post" action="form.php">
					<input type="submit" value="상품보러가기">
				</form>
				<br>
				<br>
				<a href=logout.php>로그아웃</a>
			</div>
		</div>
	</div>
<?php
}
?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>