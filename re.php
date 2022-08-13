<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<title></title>
	<style>
		*{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
		}
		img{
	height: 100%;
	width: 100%;
	background-image: linear-gradient(rgba(0,0,0,0,.4),rgba(0,0,0,0.4)),url(lo.jpg);
	background-position: center;
	background-size: cover;
	position: absolute;
}
.from-box{
width: 380px;
height: 480px;
position: relative;
margin: 6% auto;
background: #fff;
padding: 5px;
}
.button-box{
	width: 220px;
	margin: 35px auto;
	position: relative;
	box-shadow: 0 0 20px 9px #ff61241f;
	border-radius: 30px;
}
.toggle-btn{
	padding: 10px 30px;
	cursor: pointer;
	background: transparent;
	border: 0;
	outline: none;
	position: relative;
}
#btn{
	top: 0;
	left: 0;
	position: absolute;
	width: 110px;
	height: 100%;
	background: linear-gradient(to right, #ff105f,#ffad06);
	border-radius: 30px;
	transition: .5s;
}
.input-group{
	top: 180px;
	position: absolute;
	width: 280px;
	transition: .5s;

}
.input-field{
	width: 100%;
	padding: 10px 0;
	margin: 5px 0;
	border-left: 0;
	border-top: 0;
	border-right: 0;
	border-bottom: 1px solid #999;
	outline: none;
	background: transparent;
}
.submit-btn{
	width: 85%;
	padding: 10px 30px;
	cursor: pointer;
	display: block;
	margin: auto;
	background: linear-gradient(to right, #ff105f,#ffad06);
	border: 0;
	outline: none;
	border-radius: 30px;
}
.chech-box{
	margin: 30px 10px 30px 0;
}
span{
	color: #777;
	font-size: 12px;
	bottom: 68px;
	position: absolute;
}
#register{
	left: 50px;

}
#login{
	left: 50px;
	
}


	</style>
</head>
<body>

	<div class="hero">
		<div class="from-box">
			<div class="button-box">
				<div id="btn"></div>
				<a href="index.php"><button type="button" class="toggle-btn">Register</button></a>
				<a href="index.php">
				<button type="button" class="toggle-btn" onclick="re()">Log In</button></a>

			</div>

			<form action="" method="POST">
				<div class="input-group">
			<div class="form-group">
			<input type="text" name="name" class="input-field" placeholder="Name">
		</div>
			<div class="form-group">
			<input type="text" name="username" class="input-field" placeholder="UserName">
		</div>
			<div class="form-group">
			<input type="text" name="password" class="input-field" placeholder="Password">
		</div>
			<input type="checkbox" name="checkbox" class="chech-box"><span>I agree to the term & conditions</span>
			<button type="submit" name="register" class="submit-btn">Register</button>
				</div>
			</form>
			</div>

<br />
			<?php include'register.php'?>			
		
</body>
</html>