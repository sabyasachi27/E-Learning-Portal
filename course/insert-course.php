<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="insert-acc.php" method="post">
		Course Name: <input type="text" name="name"><br><br>
		Course Description: <input type="text" name="description"><br><br>
		<label for="type">Course Type:</label>
  	<select name="type" id="type">
    	<option value="paid">paid</option>
    	<option value="free">free</option>
  	</select>
  		<br><br>
		  Course Fee: <input type="text" name="coursefee"><br><br>
		
		<input type="submit" value="Insert">
	</form>
</body>
</html>