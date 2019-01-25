<?php

include('dbconnect.php');

if(!isset($_SESSION["userid"]))
	header('Location:Logout.php');

$userid = $_SESSION["userid"];

$sql = "SELECT * FROM warehouse WHERE User_Id=$userid";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);

$warehouse = $row["Warehouse_Id"];

$status = $_GET["status"];
$value = $_GET["val"];

$sql = "UPDATE requests SET Status='$status' WHERE Request_Id=$value";
$conn->query($sql);

$_SESSION["verification"] = $status;

header('Location:Warehouse_Requests.php');
?>