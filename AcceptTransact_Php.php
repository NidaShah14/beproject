<?php 
include('dbconnect.php');

if(!isset($_SESSION["userid"]))
	header('Location:Logout.php');

$userid = $_SESSION["userid"];

$reqid = $_GET["val"];

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

$sql = "SELECT * FROM requests WHERE Request_Id=$reqid";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);

$uid = $row["User_Id"];
$cropname = $row["Crop_Name"];
$sql = "SELECT * FROM user WHERE User_Id=$uid";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);

$fname = $row["Name"];
$contact = $row["Contact"];

if(isset($_POST["Cancel"]))
{
	header('Location:Warehouse_Requests.php');
}

if(isset($_POST["transactsubmit"]))
{
	$c=0;
	$w1 = $_POST["weight1"];

	if($w1 != 0)
	{
		$w1 = (double)$w1;
		$sql = "SELECT * FROM warehouse_details WHERE Warehouse_Id=$warehouse AND Crop_Name='$cropname'";
		$result = $conn->query($sql);
		$row = mysqli_fetch_assoc($result);
		$price = $row["Price"];
		$total = $w1 * $price;
		$used = $row["Used_Capacity"];
		$sql = "INSERT INTO logs(User_Id,Warehouse_Id,Crop_Name,Quantity,Price_Per_Quintal,Total_Price,Status) VALUES ($uid,$warehouse,'$cropname',$w1,$price,$total,'1')";
		$conn->query($sql);
		$sql = "DELETE FROM requests WHERE Request_Id=$reqid";
		$conn->query($sql);
		$newused = $used+$w1;
		$sql = "UPDATE warehouse_details SET Used_Capacity=$newused WHERE Warehouse_Id=$warehouse AND Crop_Name='$cropname'";
		$conn->query($sql);
	}
	echo "<script type='text/javascript'>
        		$(document).ready(function(){
        		$('#myModal').modal('show');
        		});
        		</script>";
}

?>