<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search For Warehouse</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
 <style>
  body{
  font-family:'Lato', sans-serif;
  background-color: #f7f7f7;
  
  }
  
input[type=number] {
    background: transparent;
    border: none;
  border-radius: 0px;
  width: 300px;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}

.navbar-default {
    background-color: #229300;
    border: 0px;
	border-radius: 0px;
background: linear-gradient(180deg, rgb(34,147,0) 30%, rgb(24,86,6) 70%);
	
}
.nav.navbar-nav li a{
        margin-left : 1em;
        margin-right : 1em;
		color: white;
  font-weight: 100;
    }
.navbar-default .navbar-nav > li > a {
    color: white;
	float: right;

}
#topnav{
margin-left: 850px;}

#secondnav{
margin-top: 100px;
height: 30px;
background: transparent;
}
.btn-primary{
color: black;
background: transparent;
border: 0px;
margin-top: 65px;
margin-left: 20px;
margin-left : 2em;
margin-right : 2em;
height: 35px;
padding-left: 0px;
padding-right: 0px;
}
.btn-primary:hover,.btn-primary:active:focus,.btn-primary:visited{
color: #339966;
background: transparent;
border: 0px;
margin-top: 65px;
margin-left: 20px;
margin-left : 2em;
margin-right : 2em;
height: 35px;
border-bottom: 2px solid #339966;
padding-top: 0px;
padding-right: 0px;
}


.panel-default{
 height: 100px;
 border:0px;

}
th,tr{
	text-align: center;
	font-family: 'Lato light';
}

.table-responsive{

	width: 70%;
	margin: 0px auto;
	margin-top: 50px;
	float: none;
}
#t01 th {
    color: white;
	text-align:center;
background: linear-gradient(180deg, rgb(34,147,0) 30%, rgb(24,86,6) 70%);
font-weight: 300;

}
#t01{
	border:none;
	width:40%;
	text-align:center;
	
}
#t02{
	border:none;
	text-align:center;
	width:40%;
	height:225px;
	
}
#t02 th{
	color: white;
background: linear-gradient(180deg, rgb(34,147,0) 30%, rgb(24,86,6) 70%);
font-weight: 300;
padding: 5px;
}
#t01 tr,td{
	padding:10px;
	border: 1px solid white;
	text-align:center;
	width:50%;
  background-color: white;

}
.table > tbody > tr:nth-child(2n) > td, .table > tbody > tr:nth-child(2n) > th {
   background-color: #eaecee;
}
.table > tbody > tr:nth-child(2n+1) > td, .table > tbody > tr:nth-child(2n+1) > th {
   background-color: #f7f7f7;
}
.dropbtn {
    background-color:white;
    color: #339966;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
	
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: white;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: white;}
.btn-default{
	border-radius: 30px;
	padding-top: 2px;
	padding-bottom: 2px;
	width: 120px;
background: linear-gradient(180deg, rgb(34,147,0) 30%, rgb(24,86,6) 70%);
	color: white;

}

#btns{
	position:fixed;
	left: 60;
}
#formshift{
	padding-top:50px;
	height:500px;
	width: 800px;
}
#tables{
	width:700px;
	height:250px;
	
}


 </style>
</head>
<body>
<?php include('Transact_Php.php'); ?> 

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"  style="color:white">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Warehouse_Requests.php" style="color:white;font-weight: 300;"  onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">HOME</a></li>
        <li><a href="Index.php" style="color:white;font-weight: 300;"  onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">F.A.C.E</a></li>
        <li><a href="Index.php" style="color:white;font-weight: 300;"  onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">ABOUT US</a></li>
        <li><a href="Index.php" style="color:white;font-weight: 300;"  onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">CONTACT US</a></li>
        <li><a style="color:white;font-weight: 300;"  onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'" disabled="true">WELCOME <?php echo $name; ?></a></li>
        <li><a href="Logout.php"  style="color:white;font-weight: 300;"  onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="panel panel-default">
  
  <a href="Farmer_DashBoard.php"><button type="button" class="btn-primary" id="farmdash" onclick="">DASHBOARD</button></a>
  <a href="Farmer_SearchWarehouse.php"><button type="button" class="btn-primary active" style="background: transparent; color: #229300; border-bottom: 2px solid #229300;" id="searchware" onclick="">SEARCH FOR WAREHOUSE</button></a>
	<a href="Farmer_Logs.php"><button type="button" id="farmlogs"  class="btn-primary">LOGS</button></a>

  </div>
 <center> <div id="tables">
<table id="t01"  style="float:left">
<caption>WAREHOUSE DETAILS</caption>
<tr><th>Name: </th><td><?php echo $wname; ?></td> </tr>
<tr><th>Manager Name: </th><td> <?php echo $mname; ?> </td></tr>
<tr><th>Manager Contact: </th><td><?php echo $contact; ?> </td></tr>
<tr><th>Address: </th><td><?php echo $address; ?> </td></tr>
</table>
<table id="t02" border=1px style="float:right">
<caption>CROP DETAILS</caption>

<tr><th>Crop Name</th><th>Crop Price (Rs. Per Quintal)</th><th>Quantity  (Quintals)</th></tr>
<?php
$sql = "SELECT * FROM warehouse_details WHERE Warehouse_Id=$wid";
$result = $conn->query($sql);
while($row = mysqli_fetch_assoc($result))
{
  echo '<tr><td>'.$row["Crop_Name"].'</td><td>'.$row["Price"].'</td><td>'.($row["Max_Capacity"] - $row["Used_Capacity"]).'</td></tr>';
}
?>
</table>
</div></center>
<br>
<hr>
<center>

  <div id="formshift">
  <form name="myForm" ng-app="" novalidate action="" method="POST">
  <table id="formtable" style="border-style: hidden;text-align:center">
	<tr><p style="font-size: 20px; font-weight: 200">ENTER YOUR CROP DETAILS </p></tr>

  <div class="form-group">
  <tr style="border-style: hidden;"><td style="border-style: hidden;">
    <label>Wheat :  </label></td>
	<td style="border-bottom: 1px solid black;">
      <input type="number" minlength=1 maxlength=5  id="weight1" placeholder="* Weight(Quintals)" name="weight1" ng-model="weight1" required>
      <span style="color:red" ng-show="myForm.weight1.$dirty && myForm.weight1.$invalid"><br>
      <span ng-show="myForm.weight1.$error.required">* Please Fill This Field.</span>
    </span></td></tr>
    </div>

    <div class="form-group">
	<tr style="border-style: hidden;"><td style="border-style: hidden;">
      <label>Corn :  </label></td><td>
      <input type="number" minlength=1 maxlength=5  id="weight2" placeholder="* Weight(Quintals)" name="weight2" ng-model="weight2" required>
      <span style="color:red" ng-show="myForm.weight2.$dirty && myForm.weight2.$invalid">
      <span ng-show="myForm.weight2.$error.required">* Please Fill This Field.</span>
    </span></td></tr>
    </div>

    <div class="form-group">
	<tr style="border-style: hidden;"><td style="border-style: hidden;">
      <label>Maize : </label></td><td>
      <input type="number" minlength=1 maxlength=5  id="weight3" placeholder="* Weight(Quintals)" name="weight3" ng-model="weight3" required>
      <span style="color:red" ng-show="myForm.weight3.$dirty && myForm.weight3.$invalid">
      <span ng-show="myForm.weight3.$error.required">* Please Fill This Field.</span>
    </span></td></tr>
    </div>
	<tr style="border-style: hidden;"><td style="border-style: hidden;">
    <input type="submit" name="Cancel" class="btn btn-default" value="Cancel" title="Return Back To Search Page.">&nbsp&nbsp&nbsp&nbsp&nbsp
	</td><td>
    <input type="submit" name="transactsubmit" ng-disabled="myForm.weight1.$invalid || myForm.weight2.$invalid || myForm.weight3.$invalid" class="btn btn-default" value="Submit" title="Please Fill The Required Details(Please Enter 0 if not required.)."></td></tr>
  </form>
</div>
</table>
<div class="modal fade" id ="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" onclick="javascript:window.location.href='Farmer_SearchWarehouse.php'">&times;</button>
          <h4 class="modal-title">Transaction Complete</h4>
        </div>
        <div class="modal-body">
          <?php
          echo '<ul>';
          if($c == 1)
          {
            echo '<li>Incorrect Detials Were Provided.</li>';
            echo '<li>Your Request Was Not Successfull.</li>';
          }
          else
          {
            echo '<li>Your Request Was Successfully Placed.</li>';
            echo '<li>Please View Your Logs For Further Communication From The Warehouse.</li>';
          }
          echo '</ul>';
          ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="javascript:window.location.href='Farmer_SearchWarehouse.php'">OK</button>
      </div>
    </div>
  </div>
</div>
</center>
</body>
</html>