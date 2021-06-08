<!DOCTYPE html>
<html>
<head>
	<title>Register as teacher</title>
	<script src="https://kit.fontawesome.com/de068c17ac.js" crossorigin="anonymous"></script>
</head>
<style>
*{
	margin: 0;
	padding: 0;
}
body{
	background: url(teacher-bg.jpg) no-repeat center center fixed;
	background-size: cover;
}
.container{
	color: black;
	position: absolute;
	top: 28%;
	left: 39%;
}
.container h1{
	display: inline-block;
	font-size: 40px;
	border-bottom: 5px solid purple;
	margin-bottom: 34px;
	padding 12px 0;
}
.box{
	width: 100%;
	border-bottom: 2px solid purple;
	margin: 22px 0px;
}
.box input{
	background: none;
	width: 75%;
	padding: 5px 10px;
	font-size: 20px;
	border: none;
	outline:none;
	color: white;
}
.btn{
	cursor: pointer;
	outline: none;
	margin: 12px 0;
	padding: 8px 14px;
	border: 2px solid purple;
	border-radius: 10px;
	font-size:18px;
	background: none;
	color: white;
}
.btn:hover{
        color: #fff;
        background-color:#496ebc; 
    }
.box i{
	width: 20px;
	text-align: center;
	padding: 0px 10px;
}
</style>
<body>
	<div class= "container">
	<h1>Register Yourself</h1>
		<form action="register-acc-teacher.php" method="post">
			<div class="box">
			<i class="fa fa-user"></i>
				<input type="text" name="name" id="name" placeholder="Enter Your Name">
			</div>
			<div class="box">
			    <i class="fa fa-envelope"></i>
				<input type="email" name="email" id="email" placeholder="Enter Your Email">
			</div>
			<div class="box">	
				<i class="fa fa-unlock"></i>
				<input type="password" name="password" id="password" placeholder="Enter Your Password">
			</div>
			<div class="box">
				<i class="fa fa-mobile"></i>
				<input type="text" name="mobno" id="mobno" placeholder="Enter Your Phone Number">
			</div>	
			<!--Image: <input type="file" id="img" name="img" accept="image/*"><br><br> -->
			
			<button class="btn"><b>Register</b></button>
		</form>
	</div>
</body>
</html>