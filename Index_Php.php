<?php 
include('dbconnect.php');

if(isset($_SESSION["userid"]))
{
	$userid = $_SESSION["userid"];

	$sql = "SELECT * FROM user WHERE User_Id = $userid";
	$result = $conn->query($sql);
	$row = mysqli_fetch_assoc($result);

	$name = strtoupper($row["Name"]);

}

?>