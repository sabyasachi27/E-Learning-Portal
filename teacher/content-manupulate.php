<?php include_once "../connection.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
.content-table{
	border-collapse: collapse;
	margin: 25px 0;
	font-size: 0.9em;
	min-width: 400px;
}
.content-table thead tr{
background-color: #499bef;
color: white;
text-align: left;
font-weight: bold;
}
body a{
background-color: #6979d8;	
padding: 4px 8px 4px 8px;
border-radius: 40px;
text-decoration: none; 
}
body a:hover{
	cursor: pointer;
}
</style>
<body>
<table class="content-table" border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>user id</th>
			<th>Course Name</th>
		<th>Course Description</th>
		<th>Course Image</th>
		<th>Course Type</th>
		<th>Course Fee</th>
			<th>Delete</th>
			<th>Update</th>
			
		</tr>
	</thead>
    <?php
	
	session_start();
	$qr = 	"SELECT 
				*
			FROM 
				`teacher`
			WHERE 
				`id` = ".$_SESSION['id'];

	$q1 = mysqli_query($con, $qr);

	$teacher= mysqli_fetch_array($q1);
    //echo ''.$qr;

	//  echo 'Welcome to your profile '.$teacher['name'];
	//  echo '<br>';

	//  echo 'Email: '.$teacher['email']; 
	//  echo '<br>';

	 

    //  echo "Login Success";

     $qry1 = mysqli_query($con, "SELECT * FROM `contents` WHERE `teacherid` = '".$_SESSION['id']."' AND `status` = 'active'");
     //print_r($qry1);
while($row = mysqli_fetch_array($qry1)) {
  
	if($teacher['id'] === $row['teacherid']){
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['teacherid']."</td>";
		echo "<td><a href=../contents/contents.php?id=".$row['id'].">".$row['name']."</a></td>";
    echo "<td>".$row['description']."</td>";
    echo "<td><img src='".$row['image']."' width = '100'></td>";
    echo "<td>".$row['type']."</td>";
    echo "<td>".$row['coursefee']."</td>";
		echo "<td><a href=../course/delete-course.php?id=".$row['id'].">Delete</a></td>";
		echo "<td><a href=../course/update-course.php?id=".$row['id'].">Update</a></td>";
		//echo "<td><a href=../contents/update-contents.php?id=".$row['id'].">Edit</a></td>";
	echo "</tr>";
}
else {
	echo "<br><br>Please Insert your contents . Currently you don't have any contents";
	break;
}

	}

  

?>
<br><br>
<a href="../course/insert-course.php">Add</a>
<br><br>
<a href = "teacher-profile.php">back</a>	
</body>
</html>
