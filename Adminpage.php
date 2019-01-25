<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body{
  font-family:'Lato', sans-serif;
  background-color: #f7f7f7;
  
  }
.navbar{
	font-family: Lato;
	 background: linear-gradient(180deg, rgb(34,147,0) 30%, rgb(24,86,6) 70%);
	color: white;
}
.secondnav{
	width: 100%;
	background-color:transparent;
	color:#229300;
}
th,tr{
	text-align: center;
	font-family: 'Lato light';
	border: none;
}

.table-responsive{
	border: none;
	width: 70%;
	margin: 0px auto;
	margin-top: 50px;
	float: none;

}
table#t01 th {
	  border: 1px solid white;
    color: white;
  background: linear-gradient(180deg, rgb(34,147,0) 20%, rgb(24,86,6) 80%);
	  text-align:center;
	  padding: 15px;
}
table#t01 tr,td {
    height:30px;
    border: none;
    
}

#t01{
	border: 1px solid white;
	border-collapse: collapse;
	text-align:center;
}
.t02{
  border: 1px solid white;
  border-collapse: collapse;
  text-align:center;
  width:100%;
}
.btn-default{
	border-radius: 20px;
	width: 100px;
	border: 1px solid #229300;
	color: white;
  padding: 3px;
	 background: linear-gradient(180deg, rgb(34,147,0) 20%, rgb(24,86,6) 80%);
 transition-duration: 0.5s;
    transition-timing-function: ease-out;
    box-shadow: 0px 0px 0 0 #229300 inset , 0px 0px 0 #229300 inset;
}
.btn-default:hover, .btn-default:active:focus,.btn-default:visited{
    color: #fff;
    background-color: #229300;
   
}
.btn-default:hover{
    -webkit-box-shadow: 0px 50px 0 0px #229300 inset , 0px -50px 0 0px #229300 inset; 
}
caption{
  text-align: center;
  float: center;
  font-family: Lato, sans-serif;
  font-weight: bold;
  font-size: 20px;
}
table { box-shadow: 1px 1px 1px #d8d6d6; }
</style>
  </head>

<body>
<?php include('AdminPage_Php.php'); ?>
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
        <li><a style="color:white; font-weight: 300;" disabled="true">WELCOME ADMIN</a></li>
        <li><a href="Logout.php"  style="color:white; font-weight: 300;"  onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">LOGOUT</a></li>
          </ul>
        
      </ul>
    </div>
  </div>
</nav>
<br><br><br>
<div id="section1">
  
  <?php
    $sql = "SELECT * FROM user WHERE Verified = '0' AND Type='Farmer'";
    $result = $conn->query($sql);
    if(mysqli_num_rows($result) > 0){
      $c = 1 ;
      echo '<table id="t01" class="table table-striped table-responsive">';
      echo '<caption>Pending Farmer Authentication</caption>';
        echo '<tr>';
          echo '<th><center>Sr no.</center></th>';
          echo '<th><center>Name</center></th>';
          echo '<th><center>Task</center></th>';
        echo '</tr>';
        while($row = mysqli_fetch_assoc($result))
        {
        $userid = $row["User_Id"];
        echo '<tr>';
        echo '<td align="center">'.$c.'</td>';
        echo '<td align="center">'.$row["Name"].'</td>';
        echo '<td align="center"><a href="Verify.php?id='.$userid.'"><button type="button" class="btn-default">Verify</button></a></td>';
        echo '</tr>';
        $c++;
      }
      echo '</table>';
  }
  else
    echo '<p style="text-align: center;float: center;font-family: Lato, sans-serif;font-weight:400; font-size: 20px;">No Pending Farmer to Verify</p>';
  ?>
</div>
<hr>
<div id="section2">
  <?php
    $sql = "SELECT * FROM user WHERE Verified = '0' AND Type='Warehouse Manager'";
    $result = $conn->query($sql);
    if(mysqli_num_rows($result) > 0){
      $c = 1 ;
      echo '<table id="t01" class="table table-striped table-responsive">';
      echo '<caption>Pending Warehouse Manager Authentication</caption>';
          echo '<tr>';
          echo '<th><center>Sr no.</center></th>';
          echo '<th><center>Name</center></th>';
          echo '<th><center>Task</center></th>';
        echo '</tr>';
        while($row = mysqli_fetch_assoc($result))
        {
        $userid = $row["User_Id"];
        echo '<tr>';
        echo '<td align="center">'.$c.'</td>';
        echo '<td align="center">'.$row["Name"].'</td>';
        echo '<td align="center"><a href="Verify.php?id='.$userid.'"><button type="button" class="btn-default">Verify</button></a></td>';
        echo '</tr>';
        $c++;
      }
      echo '</table>';
  }
  else
    echo '<p style="text-align: center;float: center;font-family: Lato, sans-serif;font-weight:400; font-size: 20px;">No Pending Warehouse Manager to Verify</p>';
  ?>
</div>
<hr>
</body>
</html>

