<?php include_once "../connection.php"; ?>
<table border="1">
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

     $qry1 = mysqli_query($con, "SELECT * FROM `courses` WHERE `teacherid` = '".$_SESSION['id']."' AND `status` = 'active'");
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