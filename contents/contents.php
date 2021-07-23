<?php include_once "../connection.php"; ?>



<table border="1">
	<tr>
		<th>ID</th>
		<th>Course Id</th>
		<th>Heading</th>
    <th>Type</th>
    <th>Links</th>
    <th>Content</th>
		<th>Created By</th>
		<th>Created At </th>
		<th>Updated At</th>
        <th>Delete</th>
        <th>Update</th>
        
	</tr>


<?php

    //print_r($_REQUEST['id']);

    $qry = mysqli_query($con, "SELECT * FROM `contents` WHERE `topicid` = '".$_REQUEST['id']."' AND `status` = 'active'");
    while($row = mysqli_fetch_array($qry)) {
        //print_r($row);
	
        if(isset($row['topicid'])){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['topicid']."</td>";
            echo "<td>".$row['heading']."</a></td>";
        echo "<td>".$row['type']."</td>";
        echo "<td>".$row['links']."</td>";
        echo "<td>".$row['content']."</td>";
        echo "<td>".$row['createdBy']."</td>";
        echo "<td>".$row['createdAt']."</td>";
        echo "<td>".$row['updatedAt']."</td>";
        //
            echo "<td><a href=delete-content.php?id=".$row['id'].">Delete</a></td>";
            echo "<td><a href=update-contents.php?id=".$row['id'].">Update</a></td>";
            
        echo "</tr>";
        }
        else{
            
	            echo "<br><br>Please Insert your contents . Currently you don't have any contents";
        }
    }

    

    

?>
<br><br>
<a href="add-contents.php">Add</a>