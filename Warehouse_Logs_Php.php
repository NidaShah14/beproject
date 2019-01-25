<?php 
include('dbconnect.php');

if(!isset($_SESSION["userid"]))
	header('Location:Logout.php');

$userid = $_SESSION["userid"];

$sql = "SELECT * FROM user WHERE User_Id = $userid";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);

$name = strtoupper($row["Name"]);

$sql = "SELECT * FROM warehouse WHERE User_Id=$userid";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);

$warehouse = $row["Warehouse_Id"];

$sql = "SELECT * FROM requests WHERE Warehouse_Id=$warehouse AND (Status='0' OR Status='2' OR Status='1')";
$result = $conn->query($sql);
$counter = mysqli_num_rows($result);
?>