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
if (!($_SESSION['ID']=='aaa' or $_SESSION['ID']=='bbb' or $_SESSION['ID']=='ccc' or $_SESSION['ID']=='ddd'))
{
	header('Location: ./login.html');
}
?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			주문정보조회페이지
			<br>
			<br>
			<a href=logout.php>로그아웃</a>
		</div>
	</div>
</div>
<div class="container">
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>이름</th>
						<th>키</th>
						<th>몸무게</th>
						<th>주소</th>
						<th>사이즈</th>
						<th>종류</th>
						<th>색깔</th>
						<th>가격</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$con=mysqli_connect("localhost","root","","shopDB")
					or die("MySQL접속 실패!!");    
					$sql="SELECT AES_DECRYPT(UNHEX(ID),'pw') as ID,AES_DECRYPT(UNHEX(NAME),'key') as NAME,HEIGHT,WEIGHT,ADDRESS,SIZE,PRODUCTNAME,COLOR,PRICE FROM ordertbl";
					$result=mysqli_query($con,$sql);
					while($row=mysqli_fetch_array($result)){
						?>
						<tr>
						<th><?php 
						echo $row['ID'];
						?></th>
						<th><?php 
						echo $row['NAME'];
						?></th>
						<th><?php 
						if($row['HEIGHT']==9)
							$height="150이하";
						else if($row['HEIGHT']==2)
							$height="150~155";
						else if($row['HEIGHT']==7)
							$height="155~160";
						else if($row['HEIGHT']==5)
							$height="160~165";
						else if($row['HEIGHT']==1)
							$height="165~170";
						else if($row['HEIGHT']==4)
							$height="170~175";
						else if($row['HEIGHT']==6)
							$height="175~180";
						else
							$height="180이상";
						echo $height;
						?></th>
						<th><?php 
						if($row['WEIGHT']==2)
							$weight="40이하";
						else if($row['WEIGHT']==5)
							$weight="40~50";
						else if($row['WEIGHT']==8)
							$weight="50~60";
						else if($row['WEIGHT']==4)
							$weight="60~70";
						else if($row['WEIGHT']==1)
							$weight="70~80";
						else
							$weight="80이상";
						echo $weight;
						?></th>
						<th><?php 
						echo $row['ADDRESS'];
						?></th>
						<th><?php 
						echo $row['SIZE'];
						?></th>
						<th><?php 
						echo $row['PRODUCTNAME'];
						?></th>
						<th><?php 
						echo $row['COLOR'];
						?></th>
						<th><?php 
						echo $row['PRICE'];
						?></th>
						</tr>
						<?php
					}
					?>			
				</tbody>
			</table>
		</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>