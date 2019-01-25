<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Sign Up</title>
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

border-radius: 0px;
width: 100px;
margin-left: 100px;
margin-top: 20px;
border-color: #e4f222;
color: #black;
}
.btn-default:hover{
    color: black;
    background-color: #e4f222;
    border-color: #e4f222;
}

#formshift{
margin-top: 30px;
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
margin-top: -300px;
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
<script>
function show1(){
  document.getElementById('address').style.display ='none';
  document.getElementById('warehouse').style.display ='none';
  document.getElementById('fullname').focus();
  document.getElementById('address').required=true;
  document.getElementById('warehouse').required=true;
}
function show2(){
  document.getElementById('address').style.display = 'block';
  document.getElementById('warehouse').style.display = 'block';
  document.getElementById('fullname').focus();
  document.getElementById('address').required=false;
  document.getElementById('warehouse').required=false;
}
</script>
</head>
<body>

<?php include('SignUp_Php.php'); ?>
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

  <h2>REGISTER</h2>
  
  <div id="formshift">
  <form name="myForm" style="float: right;" ng-app="" novalidate action="SignUp.php" method="post">

  <input type="radio" name="tab" value="Warehouse Manager" onclick="show2();" checked/>
  <label style="color:white">Warehouse Manager</label> &nbsp
	<input type="radio" name="tab" value="Farmer" onclick="show1();"/>
  <label style="color:white">Farmer</label>

  <br><br>
    <div class="form-group">
      <input type="text" class="form-control" id="fullname" placeholder="* Full Name" name="fullname" ng-model="fullname" required autofocus>
      <span style="color:red" ng-show="myForm.fullname.$dirty && myForm.fullname.$invalid">
      <span ng-show="myForm.fullname.$error.required">* Please Enter Your Name.</span>
      </span>
    </div>

    <div class="form-group">
      <input type="email" class="form-control" id="email" placeholder="Email Address" name="email" ng-model="email">
      <span style="color:red" ng-show="myForm.email.$dirty && myForm.email.$invalid">
      <span ng-show="myForm.email.$error.email">* Please Enter A Valid Email.</span>
    </span>
    <?php if($erremail==1) echo "<span class='error' style='color:red'>* This Email Has Already Been Registered.</span>"; ?>
    </div>
    
    <div class="form-group">
      <input type="text" class="form-control" id="warehouse" name="warehouse" placeholder="* Warehouse Name" ng-model="warehouse" required>
      <span style="color:red" ng-show="myForm.warehouse.$dirty && myForm.warehouse.$invalid">
      <span ng-show="myForm.warehouse.$error.required">* Please Enter Your Warehouse Name.</span>
      </span>
    </div>

	  <div class="form-group">
	    <input type="text" class="form-control" id="address" name="address" placeholder="* Address" ng-model="address" required>
      <span style="color:red" ng-show="myForm.address.$dirty && myForm.address.$invalid">
      <span ng-show="myForm.address.$error.required">* Please Enter Your Address.</span>
      </span>
	  </div>
	  
    <div class="form-group">
      <input type="number" ng-minlength="10" ng-maxlength="10" class="form-control" id="phone" placeholder="* Phone Number" name="phone" ng-model="phone" required>
      <span style="color:red" ng-show="myForm.phone.$dirty && myForm.phone.$invalid">
      <span ng-show="myForm.phone.$error.required">* Please Enter Your Contact Number.</span>
      <span ng-show="myForm.phone.$invalid">* Contact Number Must Be 10 Digits Long.</span>
    </span>
    <?php if($errcontact==1) echo "<span class='error' style='color:red'>* This Contact Has Already Been Registered.</span>"; ?>
    </div>

    <div class="form-group">
      <input type="password" class="form-control" id="password" placeholder="* Password" name="password" ng-model="password" required>
      <span style="color:red" ng-show="myForm.password.$dirty && myForm.password.$invalid">
      <span ng-show="myForm.password.$error.required">* Please Enter Your Password.</span>
    </span>
    </div>

    <div class="form-group">
      <input type="number" ng-minlength=12 ng-maxlength=12 class="form-control" id="aadhar" placeholder="* Aadhar Card Number" name="aadhar" ng-model="aadhar" required>
      <span style="color:red" ng-show="myForm.aadhar.$dirty && myForm.aadhar.$invalid">
      <span ng-show="myForm.aadhar.$error.required">* Please Enter Your Aadhar Card Number.</span>
      <span ng-show="myForm.aadhar.$invalid">* Aadhar Number Must Be 12 Digits Long.</span>
    </span>
    <?php if($erraadhar==1) echo "<span class='error' style='color:red'>* This Aadhar Card Has Already Been Registered.</span>"; ?>
    </div>

    <br>

    <input type="submit" name="signupsubmit" ng-disabled="myForm.fullname.$invalid || myForm.email.$invalid || myForm.phone.$invalid || myForm.password.$invalid || myForm.aadhar.$invalid" class="btn btn-default" value="SUBMIT*" title="Please Fill The Required Details.">
  </form>
  </div>

</div>

<p id="quote">Let Us Find A Good Thing To <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Write Over Here</p>
<button type="button" class="btn btn-primary" onclick="javascript:window.location.href='Index.php'">EXPLORE</button>

<div class="modal fade" id ="myModal2" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" onclick="javascript:window.location.href='Login.php'">&times;</button>
          <h4 class="modal-title">Authentication Complete</h4>
        </div>
        <div class="modal-body">
          <ul>
            <li>Your Details Have Been Successfully Registered To The Website.</li>
            <li>Verification Of Your Aadhar Account Will Be Carried Out For Completion Of The Registration Process.</li>  
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="javascript:window.location.href='Login.php'">OK</button>
      </div>
    </div>
  </div>
</div>


</body>
</html>
