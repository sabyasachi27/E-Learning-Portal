<!DOCTYPE html>
<html>
<head>
<style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */
</style>
</head>
<body>

<h1>Login As:</h1>

<button action = "login-student.php" class="button button1"><a href = "student/login-student.php">Learner</a></button>

<button action = "login-teacher.php" class="button button2"><a href = "teacher/login-teacher.php">Teacher</a></button>

</body>
</html>