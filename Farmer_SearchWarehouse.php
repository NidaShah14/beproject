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
<script src="Farmer_SearchWarehouse_Js.js"></script>
 <style>
  body{
  font-family:'Lato', sans-serif;
  background-color: #f7f7f7;
  
  }
  

.navbar{
  
    border: 0px;
	border-radius: 0px;
background-color: #229300;
	
}
.nav.navbar-nav li a{
        margin-left : 1em;
        margin-right : 1em;
		color: white;

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
color: #229300;
background: transparent;
border: 0px;
margin-top: 65px;
margin-left: 20px;
margin-left : 2em;
margin-right : 2em;
height: 35px;
border-bottom: 2px solid #229300;
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
	border: 1px solid white;
}

.table-responsive{

	width: 70%;
	margin: 0px auto;
	margin-top: 50px;
	float: none;
}
table#t01 th {

    color: white;
	  text-align:center;
	  padding: 15px;

  border:1px solid #e0e0e0;

}
table#t01 tr,td {
    height:30px;
    border: 1px solid #e0e0e0;
    border-bottom: 1px solid #e0e0e0;
    padding: 5px;
}
#t01{
	border: 1px solid #e0e0e0;
	border-collapse: collapse;
	text-align:center;
  width:90%;

}

#t02{
  border: 1px solid #229300;
  border-collapse: collapse;
  text-align:center;
  width:100%;
  
}
.dropbtn {
    background-color:white;
    color: #229300;
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
	width: 100px;
	border: 1px solid #229300;
	color: white;
	
}
#btns{
	position:fixed;
	left: 40%;
}
#formshift{
	padding-top:50px;
	height:500px;
	width: 800px;
	border:1px solid white;
	border-radius:20px;
}
input[type=number] {
    background: transparent;
    border: none;
  border-radius: 0px;
  width:90%;
  
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
#myInput{
  width: 90%;
}
ul#hlist li{
  display: inline-block;
  padding: 10px;
}
ul#hlist{
  border: 1px solid #229300;
  border-collapse: collapse;
  
}
</style>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#t01 tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)

    });
  });
});
</script>
</head>
<body>
<?php include('Farmer_SearchWarehouse_Php.php'); ?>

<nav class="navbar navbar-default navbar-fixed-top" style=" background: linear-gradient(180deg, rgb(34,147,0) 30%, rgb(24,86,6) 70%);">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"  style="color:white;">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Farmer_SearchWarehouse.php" style="color:white" onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">HOME</a></li>
        <li><a href="Index.php" style="color:white" onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'" >F.A.C.E</a></li>
        <li><a href="Index.php" style="color:white" onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">ABOUT US</a></li>
        <li><a href="Index.php" style="color:white" onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">CONTACT US</a></li>
        <li><a style="color:white" disabled="true" onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">WELCOME <?php echo $username; ?></a></li>
        <li><a href="Logout.php"  style="color:white;" onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>
<div class="panel panel-default">
  
  <a href="Farmer_DashBoard.php"><button type="button" class="btn-primary" id="farmdash" onclick="">DASHBOARD</button></a>
  <a href="Farmer_SearchWarehouse.php"><button type="button" class="btn-primary active" style="background: transparent; color: #229300; border-bottom: 2px solid #229300;" id="searchware" onclick="">SEARCH FOR WAREHOUSE</button></a>
	<a href="Farmer_Logs.php"><button type="button" id="farmlogs"  class="btn-primary">LOGS</button></a>

  </div>
<center>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
<?php
  $sql = "SELECT * FROM user WHERE Type='Warehouse Manager' AND Verified='1'";
  $result = $conn->query($sql);
  if(mysqli_num_rows($result)==0)
  echo '<h4>No Warehouses Available</h4>';
  else{
    $count = 1;
    echo '<table id="t01" class="table table-striped">';
    echo '<tr style="  background: linear-gradient(180deg, rgb(34,147,0) 30%, rgb(24,86,6) 70%);">';
      echo '<th >Sr No</th>';
      echo '<th>Name</th>'; 
      echo '<th>Manager Name</th>';
      echo '<th>Manager Contact</th>';
      echo '<th>Address</th>';
  	  echo '<th>Rating(Out of 10)</th>';
  	  echo '<th>Crop Details</th>';
  	  echo '<th>Book Warehouse</th>';
    echo '</tr>';
    while($row = mysqli_fetch_assoc($result))
    {
      $id = $row["User_Id"];
      $test = "SELECT * FROM warehouse WHERE User_Id=$id";
      $testresult = $conn->query($test);
      $testrow = mysqli_fetch_assoc($testresult);
      $warehouseid = $testrow["Warehouse_Id"];
      echo '<tr>';
      echo '<td>'.$count.'</td>';
      echo '<td>'.$testrow["Name"].'</td>';
      echo '<td>'.$row["Name"].'</td>';
  	  echo '<td>'.$row["Contact"].'</td>';
  	  echo '<td>'.$testrow["Address"].'</td>';
      echo '<td>'.$testrow["Rating"].'</td>';	
      echo '<td>';
  	    echo '<table id="t02">';
  	    echo '<ul id="hlist">';
  	      echo '<li><strong>Crop</strong></li>';
  	      echo '<li><strong>Price</strong></li>';
          echo '<li><strong>Capacity</strong></li>';
  	    echo '</ul>';
        $testsql = "SELECT * FROM warehouse_details WHERE Warehouse_Id=$warehouseid";
        $testsqlresult = $conn->query($testsql);
        while($testsqlrow = mysqli_fetch_assoc($testsqlresult))
        {
  	    echo '<ul id="hlist">';
  	      echo '<li>'.$testsqlrow["Crop_Name"].'</li>';
  	      echo '<li>'.$testsqlrow["Price"].'</li>';
          echo '<li>'.($testsqlrow["Max_Capacity"] - $testsqlrow["Used_Capacity"]).'</li>';
  	    echo '</ul>';
        }
  	    echo '</table>';
  	  echo '</td>';
      echo '<td>';
        echo '<form method="POST">';
        if($ver == '0')
          echo '<input type="submit" class="btn btn-default" value="Book" name="Book'.($count-1).'" title="Book This Warehouse" disabled="true">';
        else
          echo '<input type="submit" class="btn btn-default" value="Book" style=" background: linear-gradient(180deg, rgb(34,147,0) 30%, rgb(24,86,6) 70%);" name="Book'.($count-1).'" title="Book This Warehouse">';
        echo '</form>';
      echo '</td>';
    echo '</tr>';

    $count++;
    }
    echo '</table>';
  }
    ?>

</center>

<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Confirmation</h4>
      </div>
      <div class="modal-body">
        <p><?php echo $message; ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</body>
</html>