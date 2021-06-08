<?php include_once "connection.php"; ?>
<?php
	
	session_start();
	if (!isset($_SESSION['id'])) {
		header('location: login-teacher.php');
	}
?>
<?php
	
	$qr = 	"SELECT 
				*
			FROM 
				`teacher`
			WHERE 
				`id` = ".$_SESSION['id'];

	$q1 = mysqli_query($con, $qr);

	$teacher= mysqli_fetch_array($q1);


	 echo 'Welcome to your profile '.$teacher['name'];
	 echo '<br>';

	 echo 'Email: '.$teacher['email']; 
	 echo '<br>';

	 

     echo "Login Success";

?>
<br>
<br>
<a href="insert-topic.php">Add</a>
<br>
<br>

<table border="1">
	<tr>
		<th>ID</th>
		<th>user id</th>
		<th>Topic Name</th>
		<th>Delete</th>
		<th>Update</th>
	</tr>

<?php 


$qry1 = mysqli_query($con, "SELECT * FROM `topic` WHERE `status` = 'active'");

while($row = mysqli_fetch_array($qry1)) {
	// print_r($row);
	// echo $row['name'];
	// echo "<br>";
	if($teacher['id'] === $row['user_id']){
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['user_id']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td><a href='delete-topic.php?id=".$row['id']."'>Delete</a></td>";
		echo "<td><a href='update-topic.php?id=".$row['id']."'>Update</a></td>";
	echo "</tr>";
}
else {
	echo "Please Insert your contents . Currently you don't have any contents";
}

	}

	
?>


<br>
<br>
<a href="logout.php">Logout</a>