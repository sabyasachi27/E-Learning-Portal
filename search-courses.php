<?php include_once "connection.php"; ?>
<?php 
  $qr = mysqli_query($con, "SELECT * FROM `contents` WHERE `contentname` LIKE '%".$_REQUEST['q']."%' OR `content` LIKE '%".$_REQUEST['q']."%'");
  while($row = mysqli_fetch_array($qr)) {
    print_r($row);
    echo "<br>";
  }
?>