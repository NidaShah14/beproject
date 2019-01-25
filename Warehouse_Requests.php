<!DOCTYPE html>
<html lang="en">
<head>
  <title>Incoming Requests</title>
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
table#t01 th {
  border: 1px solid #e0e0e0;
  background: linear-gradient(180deg, rgb(34,147,0) 20%, rgb(24,86,6) 80%);
    color: white;
    font-family: Lato,sans-serif;
    text-align:center;
    padding: 20px;
}
table#t01 tr,td {
    height:50px;
    border: 1px solid #e0e0e0;
    padding: 20px;
}
#t01{
  border: 1px solid #e0e0e0;
  border-collapse: collapse;
  text-align:center;
  width:90%;
}
.t02{
  border: 1px solid #229300;
  border-collapse: collapse;
  text-align:center;
  width:100%;
}

.table-responsive{
	width: 70%;
	margin: 0px auto;
	margin-top: 50px;
	float: none;
}
.btn-default{

	border-radius: 30px;
	padding-top: 2px;
	padding-bottom: 2px;
	width: 120px;
	border: 1px solid #229300;
	color: #229300;
}
.btn-success{
	border-radius: 0px;
	border:1px solid #229300;
	padding-top: 4px;
	background-color: #229300;
	padding-bottom: 4px;
	width: 100px;
	color: white;
background: linear-gradient(180deg, rgb(34,147,0) 20%, rgb(24,86,6) 80%);
}
.btn-success:hover, .btn-success:active:focus,.btn-success:visited{
    color: #fff;
    background-color: #229300;
   
}
.btn-success:hover{
    -webkit-box-shadow: 0px 50px 0 0px #229300 inset , 0px -50px 0 0px #229300 inset; 
}
.btn-warning{
	border: 1px solid #229300;	
	padding-top: 4px;
	background: white;
	padding-bottom: 4px;
	width: 100px;
	color: #229300;
}
.btn-warning:hover, .btn-warning:active:focus,.btn-warning:visited{
    color: #fff;
    background-color: #229300;
    border: #229300;
   
}
.btn-warning:hover{
    -webkit-box-shadow: 0px 50px 0 0px #229300 inset , 0px -50px 0 0px #229300 inset; 
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
<body>
<?php include('Warehouse_Requests_Php.php'); ?>
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
        <li><a href="Logout.php"  style="color:white" onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="panel panel-default">
   
   <a href="Warehouse_DashBoard.php"><button type="button" class="btn-primary" id="waredash">DASHBOARD</button></a>
   <a href="Warehouse_Requests.php"><button type="button" class="btn-primary active" id="request" style="background: transparent; color: #229300; border-bottom: 2px solid #229300;">REQUESTS(<?php echo $counter; ?>)</button></a>
   <a href="Warehouse_Logs.php"><button type="button" id="logs" class="btn-primary" >LOGS</button></a>
	
  </div>
<?php
      $sql = "SELECT * FROM requests WHERE Warehouse_Id=$warehouse AND Status='0'";
      $result = $conn->query($sql);
      if(mysqli_num_rows($result) == 0)
        echo '<center><p style="font-family: Lato, sans-serif; font-size: 15px;">No Pending Incoming Requests.</p></center>';
      else
      {
        echo '<div class="table-responsive">';          
        echo'<center>';
        echo '<table class="table" id="t01">';
      
        echo '<caption>Incoming requests ('.mysqli_num_rows($result).')</caption>';
        echo '<thead>';
        echo '<tr>';
          echo '<th>Sr No.</th>';
          echo '<th>Crop Name</th>';
          echo '<th>Quantity</th>';
          echo '<th>Farmer Name</th>';
          echo '<th>Contact</th>';
          echo '<th>Action</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        $count = 1;
        while($row = mysqli_fetch_assoc($result))
        {
          $cropname = $row["Crop_Name"];
          $quantity = $row["Quantity"];
          $uid = $row["User_Id"];
          $test = "SELECT * FROM user WHERE User_Id=$uid";
          $testresult = $conn->query($test);
          $testrow = mysqli_fetch_assoc($testresult);
          $name = $testrow["Name"];
          $contact = $testrow["Contact"];
          $r = $row["Request_Id"];
          echo '<tr>';
          echo '<td>'.$count.'</td>';
          echo '<td>'.$cropname.'</td>';
          echo '<td>'.$quantity.'</td>';
          echo '<td>'.$name.'</td>';
          echo '<td>'.$contact.'</td>';
          echo '<td><a href="AcceptRequest.php?status=1&val='.$r.'"><button type="button" class="btn-success">CONFIRM</button></a>&nbsp&nbsp&nbsp<a href="AcceptRequest.php?status=-1&val='.$r.'"><button type="button" class="btn-warning">REJECT</button></a></td>';
          echo '</tr>';
          $count++;
        }
        echo '</tbody>';
        echo '</table>';
        echo'</center>';
      }
      ?>
</div>
<br><hr>
<?php
      $sql = "SELECT * FROM requests WHERE Warehouse_Id=$warehouse AND (Status='2' OR Status='1')";
      $result = $conn->query($sql);
      
      if(mysqli_num_rows($result) == 0)
        echo '<center><p style="font-family: Lato, sans-serif; font-size: 15px; margin-top: 50px;">No Pending Transactions.</p></center>';
      else
      {
        echo '<div class="table-responsive">';          
        echo '<center>';
        echo '<table class="table table-striped" id="t01">';
        echo '<caption>Pending Transactions('.mysqli_num_rows($result).')</caption>';
        echo '<thead>';
        echo '<tr>';
          echo '<th>Sr No.</th>';
          echo '<th>Crop Name</th>';
          echo '<th>Quantity</th>';
          echo '<th>Farmer Name</th>';
          echo '<th>Contact</th>';
          echo '<th>Action</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        $count = 1;
        while($row = mysqli_fetch_assoc($result))
        {
          $cropname = $row["Crop_Name"];
          $quantity = $row["Quantity"];
          $uid = $row["User_Id"];
          $test = "SELECT * FROM user WHERE User_Id=$uid";
          $testresult = $conn->query($test);
          $testrow = mysqli_fetch_assoc($testresult);
          $name = $testrow["Name"];
          $contact = $testrow["Contact"];
          $r = $row["Request_Id"];
          echo '<tr>';
          echo '<td>'.$count.'</td>';
          echo '<td>'.$cropname.'</td>';
          echo '<td>'.$quantity.'</td>';
          echo '<td>'.$name.'</td>';
          echo '<td>'.$contact.'</td>';
          echo '<td><a href="AcceptTransact.php?&val='.$r.'"><button type="button" class="btn-success">COMPLETE</button></a>';
          echo '</tr>';
          $count++;
        }
        echo '</tbody>';
        echo '</table>';
        echo '</center>';
        echo '<br>';
        
      }
      ?>
</div>

<div class="modal fade" id ="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" onclick="javascript:window.location.href='Warehouse_Requests.php'">&times;</button>
          <h4 class="modal-title">Request Completion</h4>
        </div>
        <div class="modal-body">
          <?php
            if($_SESSION["verification"] == 1){
              echo '<ul>';
                echo '<li>The Request Has Been Accepted.</li>';
                echo '<li>The Farmer Will Be Notified Of The Same.</li>';  
              echo '</ul>';
            }
            else{
              echo '<ul>';
                echo '<li>The Request Has Been Rejected.</li>';
                echo '<li>The Farmer Will Be Notified Of The Same.</li>';  
              echo '</ul>';
            }
            unset($_SESSION["verification"]);
          ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="javascript:window.location.href='Warehouse_Requests.php'">OK</button>
      </div>
    </div>
  </div>
</div>



</body>
</html>