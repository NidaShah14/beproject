<?php
include('dbconnect.php');
$errid = $errpass = 0;
if(isset($_POST["loginsubmit"]))
{
	if($_POST["key"] == "Admin" && $_POST["password"] == "Admin"){
		$_SESSION["userid"]="admin";
		header('Location:AdminPage.php');
	}

	$key = $_POST["key"];
	$password = md5($_POST["password"]);
	$sql1 = "SELECT * FROM user WHERE Email='$key'";
	$sql2 = "SELECT * FROM user WHERE Contact='$key'";

	$result1 = $conn->query($sql1);
	$result2 = $conn->query($sql2);

	if(mysqli_num_rows($result1) > 0)
	{
		$row = mysqli_fetch_assoc($result1);
		if($password != $row["Password"])
			$errpass = 1;
		else
		{
			$_SESSION["userid"] = $row["User_Id"];
			if($row["Type"] == "Farmer")
			header('Location:Farmer_DashBoard.php');
			else
			header('Location:Warehouse_DashBoard.php');
		}
	}
	else if(mysqli_num_rows($result2) > 0)
	{
		$row = mysqli_fetch_assoc($result2);
		if($password != $row["Password"])
			$errpass = 1;
		else
		{
			$_SESSION["userid"] = $row["User_Id"];
			if($row["Type"] == "Farmer")
			header('Location:Farmer_DashBoard.php');
			else
			header('Location:Warehouse_DashBoard.php');
		}
	}
	else
		$errid = 1;
}
?>