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
	background: url(../img/teacher-bg.jpg) no-repeat center center fixed;
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
	border-bottom: 5px solid rgb(66, 61, 61);
	margin-bottom: 34px;
	padding: 12px 0;
}
.box{
	width: 100%;
	border-bottom: 2px solid rgb(66, 61, 61);
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
	border: 2px solid rgb(66, 61, 61);
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
				<input type="text" name="name" id="name" placeholder="Enter Your Name" required>
			</div>
			<div class="box">
			    <i class="fa fa-envelope"></i>
				<input type="email" name="email" id="email" placeholder="Enter Your Email" required>
			</div>
			<div class="box">	
				<i class="fa fa-unlock"></i>
				<input type="password" name="password" id="password" placeholder="Enter Your Password" required>
			</div>
			<div class="box">
				<i class="fa fa-mobile"></i>
				<input type="text" name="mobile" id="mobile" placeholder="Enter Your Phone Number" pattern="[6789][0-9]{9}" title="Please, enter the valid 10 digit number" required>
			</div>	
			<!--Image: <input type="file" id="img" name="img" accept="image/*"><br><br> -->
			
			<button class="btn"><b>Register</b></button>
		</form>
	</div>
	<script>
		function validateForm()
		{
			// validating name
			var name = document.getElementById('name').value;
			if(name == "")
			{
				alert('Name field cannot be empty');
				return false;
			}
			// validating email
			var email = document.getElementById('email').value;
			if(email == "")
			{
				alert('Email field cannot be empty');
				return false;
			}
			// validating password
			var password = document.getElementById('password').value;
			if(password == "")
			{
				alert('Password field cannot be empty');
				return false;
			}
			// validating mobile number
			var mob_num = document.getElementById('mobno').value;
			if(mob_num == "")
			{
				alert('Mobile number field cannot be empty');
				return false;
			}
		}
	</script>
</body>
</html>
