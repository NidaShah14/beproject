<?php
include('dbconnect.php');

if(!isset($_SESSION["userid"]))
	header('Location:Logout.php');

$id = $_GET["id"];

$sql = "SELECT * FROM user WHERE User_Id=$id";
$result = $conn->query($sql);

$row = mysqli_fetch_assoc($result);
$name = $row["Name"];
$aadhar = $row["Aadhar"];

if(isset($_POST["Accept"]))
{
	$aadhar = md5($aadhar);
	$sql = "UPDATE user SET Verified='1',Aadhar='$aadhar' WHERE User_Id=$id";
	$conn->query($sql);
	header('Location:AdminPage.php');
}
if(isset($_POST["Reject"]))
{
	$sql = "UPDATE user SET Verified='-1' WHERE User_Id=$id";
	$conn->query($sql);
	header('Location:AdminPage.php');
}
?>