<!DOCTYPE html>
<html lang="en">
<head>
  <title>Accept Transaction from Farmer</title>
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
.table-responsive{

	width: 70%;
	margin: 0px auto;
	margin-top: 50px;
	float: none;
}
table#t01 th {
  border: 1px solid #e0e0e0;
    color: white;
    text-align:center;
    padding: 12px;
    background: linear-gradient(180deg, rgb(34,147,0) 20%, rgb(24,86,6) 80%);
    font-weight: 100;

}
table#t01 tr,td {
    height:30px;
    border: 1px solid #e0e0e0;
    padding: 10px;
    background-color: white;
}
#t01{
  border: 1px solid #e0e0e0;
  border-collapse: collapse;
  text-align:center;

}
.t02{
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
	padding-top: 2px;
	padding-bottom: 2px;
	width: 100px;
	border: none;
	color: white;
background: linear-gradient(180deg, rgb(34,147,0) 20%, rgb(24,86,6) 80%);
}
.btn-default:hover, .btn-default:active:focus,.btn-default:visited{
    color: #fff;
    background-color: #229300;
   
}
.btn-default:hover{
    -webkit-box-shadow: 0px 50px 0 0px #229300 inset , 0px -50px 0 0px #229300 inset; 
}


#btns{
	position:fixed;
	left: 40%;
}
#formshift{
  padding-top:50px;
  height:500px;
  width: 800px;
}

 </style>
</head>
<body>
<?php include('AcceptTransact_Php.php'); ?> 

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
        <li><a href="Index.php" style="color:white" onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'" >CONTACT US</a></li>
        <li><a style="color:white" disabled="true" onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">WELCOME <?php echo $name; ?></a></li>
        <li><a href="Logout.php"  style="color:white" onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="panel panel-default">
   
   <a href="Warehouse_Requests.php"><button type="button" class="btn-primary active" style="background: transparent; color: #229300; border-bottom: 2px solid #229300;" id="request" >TRANSACTIONS(<?php echo $counter; ?>)</button></a>
   <a href="Warehouse_Logs.php"><button type="button" id="logs"  class="btn-primary">LOGS</button></a>
   <a href="Warehouse_DashBoard.php"><button type="button" class="btn-primary" id="waredash">DASHBOARD</button></a>
  
  </div>
   <center>
<table id="t01">
<tr>
<th>FARMER NAME</th><th>CONTACT</th> 
</tr>
<tr>
<td><?php echo $fname; ?> </td><td><?php echo $contact; ?> </td>
</tr>
</table>
<hr>
  <div id="formshift">
 <div style="width: 500px; height: 200px; background-color: #fff">
  <form name="myForm" ng-app="" novalidate action="" method="POST">
  <div style="width:500px; height: 50px; background: linear-gradient(180deg, rgb(34,147,0) 20%, rgb(24,86,6) 80%);">
	<p style="font-size: 20px; font-weight: 200; color: white; padding: 10px;">ENTER THE CROP DETAILS </p></div>

  <div class="form-group">
    <label style="padding: 10px; font-size: 15px;"><?php echo $cropname; ?> : </label>

      <input type="number" minlength=1 maxlength=5 class="form-control" id="weight1" placeholder="* Weight(Quintals)" name="weight1" ng-model="weight1" required>
      <span style="color:red" ng-show="myForm.weight1.$dirty && myForm.weight1.$invalid">
      <span ng-show="myForm.weight1.$error.required">* Please Fill This Field.</span>
    </span>
    </div>

    <input type="submit" name="Cancel" class="btn btn-default" value="Cancel" title="Return Back To Search Page.">&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="submit" name="transactsubmit" ng-disabled="myForm.weight1.$invalid" class="btn btn-default" value="Submit" title="Please Fill The Required Details.">
  </form>
</div>
</center>
</div>
<div class="modal fade" id ="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" onclick="javascript:window.location.href='Warehouse_Requests.php'">&times;</button>
          <h4 class="modal-title">Transaction Complete</h4>
        </div>
        <div class="modal-body">
          <?php
          echo '<ul>';
          if($w1 == 0)
          {
            echo '<li>Incorrect Detials Were Provided.</li>';
            echo '<li>The Transaction Was Not Completed.</li>';
          }
          else
          {
            echo '<li>The Transaction Was Successfully Completed.</li>';
            echo '<li>The Warehouse Logs Will Be Accordingly Updated.</li>';
          }
          echo '</ul>';
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