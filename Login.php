<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
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
  overflow: hidden;
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
h2{
color: #e4f222;
margin-top:200px;  
margin-left: 840px;
}

input::placeholder{
font-style: italic;
}

.btn-default{
background-color: #e4f222;
color: black;
border-radius: 0px;
width: 100px;
margin-left: 100px;
margin-top: 20px;
border-color: #e4f222;
color: black;
}
.btn-default:hover{
    color: black;
    background-color: #e4f222;
    border-color: #e4f222;
}

#formshift{
margin-top: 50px;
overflow: visible;
margin-left:-100px;
}

.navbar {
  background: transparent;
  border: 0px;
  
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
font-family: 'Lato light';
font-style: italic;
font-size: 50px;
margin-left: 100px;
margin-top: -250px;
}
.btn-primary{
background: transparent;
font-family: 'Lato light';
border-radius: 0px;
width: 200px;
font-size: 25px;
border-color: #e4f222;
color: #e4f222;
margin-left: 250px;
margin-top: 40px;
}
 .btn-primary:hover{
    color: black;
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
<?php include('Login_Php.php'); ?>
<nav class="navbar navbar-default">
  <ul class="nav navbar-nav">
    <li><a href="Index.php">F.A.C.E</a></li>
    <li><a href="Index.php">ABOUT US</a></li>
    <li><a href="Index.php">CONTACT US</a></li>
    <li><a href="SignUp.php">REGISTER</a></li>
    <li><a href="Login.php">LOGIN</a></li>
  </ul>
</nav>

<div class="container">
  <h2>LOGIN</h2>
  
  <div id="formshift">
  <form name="myForm" style="float: right;" ng-app="" novalidate action="Login.php" method="POST">

    <div class="form-group">
    <input type="text" class="form-control" id="email" placeholder="* Email Address/Contact Number" ng-model="key" name="key" required autofocus>
    <span style="color:red" ng-show="myForm.key.$dirty && myForm.key.$invalid">
    <span ng-show="myForm.key.$error.required">* Please Enter Your Email/Contact.</span>
    </span>
    <?php if($errid==1) echo "<span class='error' style='color:red'>* No Such User Found.</span>"; ?>
    </div>

    <div class="form-group">
      <input type="password" class="form-control" id="password" placeholder="* Password" ng-model="password" required name="password">
      <span style="color:red" ng-show="myForm.password.$dirty && myForm.password.$invalid">
      <span ng-show="myForm.password.$error.required">* Please Enter Your Password.</span>
  	  </span>
      <?php if($errpass==1) echo "<span class='error' style='color:red'>* Incorrect Password Entered.</span>"; ?>
    </div>

     <br>

    <input type="submit" name="loginsubmit" ng-disabled="myForm.fullname.$invalid || myForm.password.$invalid" class="btn btn-default" value="SUBMIT"  title="Please Fill The Required Details">

  </form>
  </div>
</div>

<p id="quote">Let Us Find A Good Thing To <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Write Over Here</p>
<button type="button"  class="btn btn-primary" onclick="javascript:window.location.href='Index.php'">EXPLORE</button>

</body>
</html>
