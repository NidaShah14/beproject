<?php
include('dbconnect.php');
$wid = $_GET["val"];
if(!isset($_SESSION["userid"]))
	header('Location:Logout.php');

$userid = $_SESSION["userid"];

$sql = "SELECT * FROM user WHERE User_Id = $userid";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);

$name = strtoupper($row["Name"]);

$sql = "SELECT * FROM warehouse WHERE Warehouse_Id = $wid";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$wuserid = $row["User_Id"];
$wname = $row["Name"];
$address = $row["Address"];
$rate = $row["Rating"];

$sql = "SELECT * FROM user WHERE User_Id = $wuserid";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);

$mname = $row["Name"];
$contact = $row["Contact"];

if(isset($_POST["Cancel"]))
{
	header('Location:Farmer_SearchWarehouse.php');
}

if(isset($_POST["transactsubmit"]))
{
	$c=0;
	$w1 = $_POST["weight1"];
	$w2 = $_POST["weight2"];
	$w3 = $_POST["weight3"];

	if(($w1==0) && ($w2==0) && ($w3==0))
		$error = 1;
	else{
	if($w1 > 0)
	{
		$w1 = (double)$w1;
		$sql = "INSERT INTO requests(User_Id,Warehouse_Id,Crop_Name,Quantity,Status) VALUES($userid,$wid,'Wheat',$w1,'0')";
		$conn->query($sql);
	}
	if($w2 > 0)
	{
		$w2 = (double)$w2;
		$sql = "INSERT INTO requests(User_Id,Warehouse_Id,Crop_Name,Quantity,Status) VALUES($userid,$wid,'Corn',$w2,'0')";
		$conn->query($sql);
	}
	if($w3 > 0)
	{
		$w3 = (double)$w3;
		$sql = "INSERT INTO requests(User_Id,Warehouse_Id,Crop_Name,Quantity,Status) VALUES($userid,$wid,'Maize',$w3,'0')";
		$conn->query($sql);
	}
	}
	echo "<script type='text/javascript'>
        		$(document).ready(function(){
        		$('#myModal').modal('show');
        		});
        		</script>";
}

?>