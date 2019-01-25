<?php
include('dbconnect.php');

$userid = $_SESSION["userid"];

$sql = "SELECT * FROM user WHERE User_Id = $userid";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);

$name = strtoupper($row["Name"]);

$sql = "SELECT * FROM requests WHERE User_Id=$userid AND (Status='1' OR Status='-1')";
      $result = $conn->query($sql);
      if((mysqli_num_rows($result)) > 0)
      {
      	echo "<script type='text/javascript'>
        		$(document).ready(function(){
        		$('#myModal').modal('show');
        		});
        		</script>";
      }
?>