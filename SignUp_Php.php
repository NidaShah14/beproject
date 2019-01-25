<?php 
include('dbconnect.php');
$err = array();
$errcontact = $erraadhar = $erremail = 0;
if(isset($_POST["signupsubmit"]))
{
	$fullname = $_POST["fullname"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$password = md5($_POST["password"]);
	$aadhar = $_POST["aadhar"];
	$type = $_POST["tab"];
	$test = "SELECT Contact FROM user";
	$result = $conn->query($test);
	while($row = mysqli_fetch_assoc($result))
	{
		if($phone == $row["Contact"])
			$errcontact = 1;
	}
	$test = "SELECT Email FROM user";
	$result = $conn->query($test);
	while($row = mysqli_fetch_assoc($result))
	{
		if($email == $row["Email"] && $email!="")
			$erremail = 1;
	}
	$test = "SELECT Aadhar FROM user";
	$result = $conn->query($test);
	while($row = mysqli_fetch_assoc($result))
	{
		if($aadhar == $row["Aadhar"])
			$erraadhar = 1;
	}
	if($errcontact!=1 && $erremail!=1 && $erraadhar!=1){
		$sql = "INSERT INTO user(Name,Email,Contact,Password,Aadhar,Verified,Type) VALUES('$fullname','$email','$phone','$password','$aadhar','0','$type')";
		$result = $conn->query($sql);
		if($result)
		{
			$test = "SELECT User_Id FROM user WHERE Contact='$phone'";
			$testresult = $conn->query($test);
			$row = mysqli_fetch_assoc($testresult);
			$userid = $row["User_Id"];
			$sql = "INSERT INTO verification VALUES($userid)";
			$conn->query($sql);
			if($type == "Warehouse Manager")
			{
				$address = $_POST["address"];
				$warehouse = $_POST["warehouse"];
				$sql = "INSERT INTO warehouse(User_Id,Address,Name,Rating) VALUES($userid,'$address','$warehouse',1)";
				$conn->query($sql);
				$test = "SELECT Warehouse_Id FROM warehouse WHERE User_Id=$userid";
				$testresult = $conn->query($test);
				$row = mysqli_fetch_assoc($testresult);
				$warehouseid = $row["Warehouse_Id"];
				$sql = "INSERT INTO warehouse_details VALUES($warehouseid,'Wheat',50.0,0.0,150.0)";
				$conn->query($sql);
				$sql = "INSERT INTO warehouse_details VALUES($warehouseid,'Corn',50.0,0.0,150.0)";
				$conn->query($sql);
				$sql = "INSERT INTO warehouse_details VALUES($warehouseid,'Maize',50.0,0.0,150.0)";
				$conn->query($sql);
			}
			echo "<script type='text/javascript'>
        		$(document).ready(function(){
        		$('#myModal2').modal('show');
        		});
        		</script>";
		}
		else 
			echo mysqli_error($conn);
	}
}
?>