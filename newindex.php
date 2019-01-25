<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
  background-color: black;
  background: url('background.png');
  background-repeat: no-repeat;
  background-size: cover;
  }
  
 input[type=text] {
    background: transparent;
    border: 0px;
    border-bottom: 1px solid #e4f222;
  border-radius: 0px;
  width: 100%;
  color: #dcdcdc;
  }

  
 input[type=password] {
    background: transparent;
    border: none;
    border-bottom: 1px solid #e4f222;
  border-radius: 0px;
  width: 300px;
  color: #dcdcdc;
  
}
 input[type=email] {
    background: transparent;
    border: none;
    border-bottom: 1px solid #e4f222;
  border-radius: 0px;
  width: 300px;
  color: #dcdcdc;
}
 input[type=number] {
    background: transparent;
    border: none;
    border-bottom: 1px solid #e4f222;
  border-radius: 0px;
  width: 300px;
  color: #dcdcdc;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
h2{
color: #e4f222;
margin-top:150px;  
margin-left: 840px;}
input::placeholder{
font-style: italic;
}
.btn-default{
background-color: #e4f222;
color: black;
border: 0px;
border-radius: 0px;
width: 100px;
margin-left: 100px;
}

#formshift{
margin-top: 30px;
overflow: visible;
margin-left:-100px;
}

.navbar {
  background: transparent;
  border: 0px;
  margin-top: -250px;
  border-radius: 0px;
  float: right;
  
}
 .nav.navbar-nav li a{
        margin-left : 1em;
        margin-right : 1em;
    color: white;
    }
  .nav.navbar-nav > li > a:hover{
    background: transparent;
  border-bottom: 1px solid #e4f222;
  color: #e4f222;
  
}

.nav.navbar-nav > li > a:visited{
    background: transparent!important;

  color: white!important;
  
}
.nav.navbar-nav > li > a:active{
    background: transparent!important;

  color: #e4f222!important;
  
}


#quote{
color: white;
font-family: 'Lato';
font-style: italic;
font-weight: lighter;
font-size: 50px;
text-align: center;
margin-top: 250px;
}

.btn-primary{
background: transparent;
font-family: 'Lato light';
border-radius: 0px;
width: 200px;
font-size: 25px;
border-color: #e4f222;
color: #e4f222;
margin-top: 40px;
}
 .btn-primary:hover{
    color: white;
    background-color: #e4f222;
    border-color: #e4f222;
}
 .btn-primary:active, .btn-primary:focus {
  color: white!important;
  background-color: #b4be27 !important;
  border-color: #b4be27 !important;
}

</style>
</head>
<body>

<?php include('Index_Php.php'); ?>
<div id="container">
<nav class="navbar navbar-default">
  <ul class="nav navbar-nav">
    <?php
    if(isset($_SESSION["userid"]))
    {
      if($row["Type"] == "Farmer")
        echo '<li><a href="Farmer_SearchWarehouse.php" style="color:white">HOME</a></li>';
      else
        echo '<li><a href="Warehouse_Requests.php" style="color:white">HOME</a></li>';
    }
    ?>
    <li><a href="Index.php">F.A.C.E</a></li>
    <li><a href="Index.php">ABOUT US</a></li>
    <li><a href="Index.php">CONTACT US</a></li>
    <?php 
    if(isset($_SESSION["userid"]))
    {
        echo '<li><a style="color:white" disabled="true">WELCOME '.$name.'</a></li>';
        echo '<li><a href="Logout.php"  style="color:white">LOGOUT</a></li>';
    }
    else
    {
      echo '<li><a href="SignUp.php">REGISTER</a></li>';
      echo '<li><a href="Login.php">LOGIN</a></li>';
    }
    ?>
  </ul>
</nav></div>


<p id="quote" >Changing The F.A.C.E Of Agriculture<br>In Maharashtra</p>
<center><button type="button" class="btn btn-primary" >EXPLORE</button></center>




</body>
</html>
