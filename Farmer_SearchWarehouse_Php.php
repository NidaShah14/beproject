<?php
include('dbconnect.php');

if(!isset($_SESSION["userid"]))
	header('Location:Logout.php');

$userid = $_SESSION["userid"];

$sql = "SELECT * FROM user WHERE User_Id = $userid";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);

$username = strtoupper($row["Name"]);
$ver = $row["Verified"];
if(!isset($_SESSION["firstattempt"])){
	$notv = $wrongv = $corv = 0;
	$_SESSION["firstattempt"] = 1;
	$test = "SELECT * FROM verification WHERE User_Id = $userid";
	$testresult = $conn->query($test);
	if(mysqli_num_rows($testresult) > 0)
	{
		if($row["Verified"] == 0)
		{
			$notv = 1;
			echo "<script type='text/javascript'>
        		$(document).ready(function(){
        		$('#myModal2').modal('show');
        		});
        		</script>";
		}
		else if($row["Verified"] == -1)
		{
			$wrongv = 1;
			echo "<script type='text/javascript'>
        		$(document).ready(function(){
        		$('#myModal2').modal('show');
        		});
        		</script>";
		}
		else if($row["Verified"] == 1)
		{
			$corv = 1;
			$test = "DELETE FROM verification WHERE Contact=$userid";
			$conn->query($test);
			echo "<script type='text/javascript'>
        		$(document).ready(function(){
        		$('#myModal2').modal('show');
        		});
        		</script>";
		}
	}
}

$sql = "SELECT * FROM user WHERE Type='Warehouse Manager' AND Verified='1'";
$result = $conn->query($sql);
$c = mysqli_num_rows($result);
for($j=0;$j<$c;$j++)
{
	$temp = "Book".$j;
	if(isset($_POST[$temp])){
		$bookingid = $j;
		header('Location:Transact.php?val='.($bookingid+1).'');
	}
}
?>