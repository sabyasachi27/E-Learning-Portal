<?php include_once "connection.php"; ?>
<?php
	
	session_start();
	if (!isset($_SESSION['id'])) {
		header('location: login-student.php');
	}
?>
<?php
	
	$qr = 	"SELECT * FROM `student` WHERE `id` = ".$_SESSION['id'];

	$q1 = mysqli_query($con, $qr);

	$student= mysqli_fetch_array($q1);


	 echo 'Welcome to your profile '.$student['name'];
	 echo '<br>';


	 echo "Login Successful";

?>

<br>
<br>

<table border="1">
	<tr>
		
		<th>Topic Name</th>

	</tr>

<br>
<br>

<?php 


$qry1 = mysqli_query($con, "SELECT * FROM `topic` WHERE `status` = 'active'");

while($row = mysqli_fetch_array($qry1)) {
	// print_r($row);
	// echo $row['name'];
	// echo "<br>";

	echo "<tr>";
		echo "<td>".$row['name']."</td>";
	echo "</tr>";
}
?>

<br>
<br>
<a href="logout.php">Logout</a>