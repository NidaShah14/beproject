<!DOCTYPE html>
<html lang="en">
<head>
  <title>Warehouse Logs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

 <style>
  body{
  font-family:'Lato', sans-serif;
  background-color: #f7f7f7;
  
  }
  

.navbar-default {
    background-color: #229300;
    border: 0px;
	border-radius: 0px;
	min-width: 165;	
background: linear-gradient(180deg, rgb(34,147,0) 20%, rgb(24,86,6) 80%);
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
  border: 1px solid #229300;
}

.table-responsive{
  width: 70%;
  margin: 0px auto;
  margin-top: 50px;
  float: none;
}
table#t01 th {

  border: none;
    color: #229300;
    text-align:center;
    padding: 5px;
}
table#t01 tr,td {
   height:30px;
   border: none;
    padding: 5px;
}
#t01{
  margin-top:50px;
 border: none;
  border-collapse: collapse;
  text-align:center;
  width:90%;
}
.table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
   background-color: #eff1f4;
}
.table-striped > tbody > tr:nth-child(2n) > td, .table-striped > tbody > tr:nth-child(2n) > th {
   background-color: #f7f7f7;
}
.t02{
  border: 1px solid #229300;
  border-collapse: collapse;
  text-align:center;
  width:100%;
}
.btn-default{
	border-radius: 30px;
	padding-top: 2px;
	padding-bottom: 2px;
	width: 120px;
	border: 1px solid #229300;
	color: #229300;
}
#btns{
	position:fixed;
	left: 40%;
}
 </style>
</head>
<body>
<?php include('Warehouse_Logs_Php.php'); ?>
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
        <li><a href="Warehouse_Requests.php" style="color:white" onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">HOME</a></li>
        <li><a href="Index.php" style="color:white" onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">F.A.C.E</a></li>
        <li><a href="Index.php" style="color:white" onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">ABOUT US</a></li>
        <li><a href="Index.php" style="color:white" onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">CONTACT US</a></li>
        <li><a style="color:white" disabled="true" onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">WELCOME <?php echo $name; ?></a></li>
        <li><a href="Logout.php"  style="color:white" onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'" >LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="panel panel-default">
   <a href="Warehouse_DashBoard.php"><button type="button" class="btn-primary" id="waredash">DASHBOARD</button></a>
	 <a href="Warehouse_Requests.php"><button type="button" class="btn-primary" id="request" >REQUESTS(<?php echo $counter; ?>)</button></a>
   <a href="Warehouse_Logs.php"><button type="button" id="logs" class="btn-primary active" style="background: transparent; color: #229300; border-bottom: 2px solid #229300;">LOGS</button></a>
  </div>
      <?php
      $sql = "SELECT * FROM logs WHERE Warehouse_Id=$warehouse";
      $result = $conn->query($sql);
      if(mysqli_num_rows($result) == 0)
        echo '<center><h4>No Logs To Show.</h4></center>';
      else{
        echo '<center>';
        echo '<div class="table-responsive">';          
        echo '<table class="table table-striped" id="t01">';
        echo '<thead>';
          echo '<tr>';
            echo '<th>Sr No.</th>';
            echo '<th>Farmer Name</th>';
            echo '<th>Crop Name</th>';
            echo '<th>Quantity(Quintals)</th>';
            echo '<th>Total Price(Rupees)</th>';
            echo '<th>Status</th>';
          echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        $count=1;
        while($row = mysqli_fetch_assoc($result))
        {
          $cropname = $row["Crop_Name"];
          $price = $row["Total_Price"];
          $uid = $row["User_Id"];
          $quantity = $row["Quantity"];
          $status = $row["Status"];
          $test = "SELECT * FROM user WHERE User_Id=$uid";
          $testresult = $conn->query($test);
          $testrow = mysqli_fetch_assoc($testresult);
          $fname = $testrow["Name"];
          echo '<tr>';
            echo '<td>'.$count.'</td>';
            echo '<td>'.$fname.'</td>';
            echo '<td>'.$cropname.'</td>';
            echo '<td>'.$quantity.'</td>';
            echo '<td>'.$price.'</td>';
            if($status == '1')
              echo '<td style="color: #229300;">Successfull</td>';
          echo '</tr>';
          $count++;
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        echo '</center>';
        echo '<br>';
      }
      ?>
</body>
</html>