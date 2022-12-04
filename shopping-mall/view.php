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
	$id=$_POST['id'];
	$pw=$_POST['password'];
	$con=mysqli_connect("localhost","root","","shopDB")
	or die("MySQL접속 실패!!");    
    $sql="SELECT * FROM membertbl WHERE ID=HEX(AES_ENCRYPT('".$id."','pw'))";
    $result=mysqli_query($con,$sql);
	if($result->num_rows==1){
		$row=$result->fetch_array();
		$password=$row['PASSWORD'];
		$salt=$row['SALT'];
		$token=hash('sha512',"$pw$salt");
		if($token==$password){
			$_SESSION['ID']=$id;
			if(isset($_SESSION['ID']))
			{
				header('Location: ./main.php');
			}
			else{
				echo "세션저장실패";
			}
		}
		else{
			?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<form name="form1" method="post" action="login.html">
					<input type="submit" value="로그인하러가기">
				</form>
			</div>
		</div>
	</div>	
<?php
		}
	}
	else{
		?>
<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<form name="form1" method="post" action="login.html">
					<input type="submit" value="로그인하러가기">
				</form>
			</div>
		</div>
	</div>	
<?php
	}
?>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>	