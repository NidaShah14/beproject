<!DOCTYPE html>
<html lang="en">
<head>
  <title>Farmer Logs</title>
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
background: linear-gradient(180deg, rgb(34,147,0) 30%, rgb(24,86,6) 70%);
	
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
caption{
  text-align: center;
  float: center;
  font-family: Lato, sans-serif;
  font-weight: 300;
  font-size: 20px;

}
 </style>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
<?php include('Farmer_Logs_Php.php'); ?>
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
        <li><a href="Farmer_SearchWarehouse.php" style="color:white" onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">HOME</a></li>
        <li><a href="Index.php" style="color:white" onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">F.A.C.E</a></li>
        <li><a href="Index.php" style="color:white" onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">ABOUT US</a></li>
        <li><a href="Index.php" style="color:white" onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">CONTACT US</a></li>
        <li><a style="color:white" disabled="true" onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">WELCOME <?php echo $name; ?></a></li>
        <li><a href="Logout.php"  style="color:white" onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="panel panel-default">
   
	<a href="Farmer_DashBoard.php"><button type="button" class="btn-primary" id="farmdash" onclick="">DASHBOARD</button></a>
  <a href="Farmer_SearchWarehouse.php"><button type="button" class="btn-primary" id="searchware" onclick="">SEARCH FOR WAREHOUSE</button></a>
  <a href="Farmer_Logs.php"><button type="button" id="farmlogs" class="btn-primary active" style="background: transparent; color: #229300; border-bottom: 2px solid #229300;">LOGS</button></a>

  </div>

<?php 
      $sql = "SELECT * FROM requests WHERE User_Id=$userid AND Status='0'";
      $result = $conn->query($sql);
      if((mysqli_num_rows($result)) == 0)
        echo '<center><p style="font-family: Lato, sans-serif; font-size: 15px;">No Pending Requests.</p></center>';
      else
      {
        $count = 1;
        echo '<center>';
        echo '<div class="table-responsive">';          
        echo '<table class="table table-striped" id="t01">';
         echo '<caption>PENDING REQUESTS</caption>';
        echo '<thead>';
        echo '<tr>';
          echo '<th>Sr No. </th>';
          echo '<th>Crop Name </th>';
          echo '<th>Quantity(Quintals)</th>';
          echo '<th>Price(Per Quintal)</th>';
          echo '<th>Warehouse Name </th>';
          echo '<th>Contact </th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        while($row = mysqli_fetch_assoc($result))
        {
          $wid = $row["Warehouse_Id"];
          $cropname = $row["Crop_Name"];
          $quantity = $row["Quantity"];
          $test = "SELECT * FROM warehouse WHERE Warehouse_Id=$wid";
          $testresult = $conn->query($test);
          $testrow = mysqli_fetch_assoc($testresult);
          $warehousename = $testrow["Name"];
          $uid = $testrow["User_Id"];
          $test = "SELECT * FROM warehouse_details WHERE Warehouse_Id=$wid AND Crop_Name='$cropname'";
          $testresult = $conn->query($test);
          $testrow = mysqli_fetch_assoc($testresult);
          $price = $testrow["Price"];
          $test = "SELECT * FROM user WHERE User_Id=$uid";
          $testresult = $conn->query($test);
          $testrow = mysqli_fetch_assoc($testresult);
          $contact = $testrow["Contact"];
          echo '<tr>';
          echo '<td>'.$count.'</td>';
          echo '<td>'.$cropname.'</td>';
          echo '<td>'.$quantity.'</td>';
          echo '<td>'.$price.'</td>';
          echo '<td>'.$warehousename.'</td>';
          echo '<td>'.$contact.'</td>';
          echo '</tr>';
          $count++;
        }
      echo '</tbody>';
      echo '</table>';
      echo '</div>';
      echo '</center>';
      }
      ?>
      <hr>
<?php 
      $sql = "SELECT * FROM logs WHERE User_Id=$userid";
      $result = $conn->query($sql);
      if((mysqli_num_rows($result)) == 0)
        echo '<center><p style="font-family: Lato, sans-serif; font-size: 15px; margin-top: 50px;">No Completed Transactions Present.</p></center>';
      else
      {
        $count = 1;
        echo '<div class="table-responsive">';   
        echo '<center>' ;        
        echo '<table class="table table-striped" id="t01">';
         echo '<caption>COMPLETED TRANSACTIONS</caption>';
        echo '<thead>';
        echo '<tr>';
          echo '<th>Sr No. </th>';
          echo '<th>Warehouse Name </th>';
          echo '<th>Crop Name </th>';
          echo '<th>Quantity(Quintals)</th>';
          echo '<th>Total Price </th>';
          echo '<th>Status</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        while($row = mysqli_fetch_assoc($result))
        {
          $wid = $row["Warehouse_Id"];
          $cropname = $row["Crop_Name"];
          $quantity = $row["Quantity"];
          $price = $row["Total_Price"];
          $status = $row["Status"];
          $test = "SELECT * FROM warehouse WHERE Warehouse_Id=$wid";
          $testresult = $conn->query($test);
          $testrow = mysqli_fetch_assoc($testresult);
          $warehousename = $testrow["Name"];
          echo '<tr>';
          echo '<td>'.$count.'</td>';
          echo '<td>'.$warehousename.'</td>';
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
      echo '</center>';
      }
      ?>

<div class="modal fade" id ="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" onclick="javascript:window.location.href='Farmer_Logs.php'">&times;</button>
          <h4 class="modal-title">Request Update</h4>
        </div>
        <div class="modal-body">
          <ul>
          <?php
            $sql = "SELECT * FROM requests WHERE User_Id=$userid AND Status='1'";
            $result = $conn->query($sql);
            while($row = mysqli_fetch_assoc($result))
            {
              $w = $row["Warehouse_Id"];
              $r = $row["Request_Id"];
              $test = "SELECT * FROM warehouse WHERE Warehouse_Id=$w";
              $testresult = $conn->query($test);
              $testrow = mysqli_fetch_assoc($testresult);
                echo '<li><b>'.$testrow["Name"].'</b> has Accepted Your Request Of [<b>'.$row["Crop_Name"].' : '.$row["Quantity"].' Quintals </b>].Please Visit The Warehouse To Complete The Transaction.</li>';
                $testtest = "UPDATE requests SET Status='2' WHERE Request_Id=$r";
                $conn->query($testtest);
            }
            echo '<hr>';
            $sql = "SELECT * FROM requests WHERE User_Id=$userid AND Status='-1'";
            $result = $conn->query($sql);
            while($row = mysqli_fetch_assoc($result))
            {
              $w = $row["Warehouse_Id"];
              $r = $row["Request_Id"];
              $test = "SELECT * FROM warehouse WHERE Warehouse_Id=$w";
              $testresult = $conn->query($test);
              $testrow = mysqli_fetch_assoc($testresult);
                echo '<li><b>'.$testrow["Name"].'</b> has Rejected Your Request Of [<b>'.$row["Crop_Name"].' : '.$row["Quantity"].' Quintals </b>].</li>';
                $testtest = "DELETE FROM requests WHERE Request_Id=$r";
                $conn->query($testtest);
            }
          ?>
        </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="javascript:window.location.href='Farmer_Logs.php'">OK</button>
      </div>
    </div>
  </div>
</div>


</body>
</html>