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
	background-color: #229300;
	color: white;
 background: linear-gradient(180deg, rgb(34,147,0) 30%, rgb(24,86,6) 70%);
}
.btn-default{
  border-radius: 30px;
  width: 120px;
  border: 1px solid #229300;
  color: white;
  font-weight: 300;
  background-color: #229300;
   background: linear-gradient(180deg, rgb(34,147,0) 20%, rgb(24,86,6) 80%);
}
.btn-default:hover, .btn-default:active:focus,.btn-default:visited{
    color: #fff;
    background-color: #229300;
   
}
.btn-default:hover{
    -webkit-box-shadow: 0px 50px 0 0px #229300 inset , 0px -50px 0 0px #229300 inset; 
}


</style>
  </head>

<body>
<?php include('Verify_Php.php'); ?>
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
        <li><a href="Logout.php" style="color:white; font-weight: 300;"  onMouseOver="this.style.color='#e4f222'" onMouseOut="this.style.color='white'">LOGOUT</a></li>
          </ul>
        
      </ul>
    </div>
  </div>
</nav>
 
<hr>

<div class="container">
<center><div style="width:500px;height:250px;padding-top: 20px; padding-bottom: 20px;background-color:white;margin-top:100px;">
  <div style="width:500px;height:50px;background: linear-gradient(180deg, rgb(34,147,0) 30%, rgb(24,86,6) 70%);margin-top:-40px;padding: ">
  <center><p style="font-size: 20px;padding: 10px;color: white;font-weight: 300;">VERIFY DETAILS</p></center>
  </div>
  
  <form name="myForm" action="" method="POST">
    <br><br>
    <div class="form-group">
    <center><label style="font-size: 15px;">Name : <?php echo $name; ?> </label></center>
    </div>
    <div class="form-group">
    <center><label>Aadhar Number : <?php echo $aadhar; ?> </label></center>
    </div>
     <br>

   <center> <input type="submit" name="Accept" class="btn btn-default" value="ACCEPT" title="Verify">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="submit" name="Reject" class="btn btn-default" value="REJECT" title="Verify"> </center>
</div>
  </form>
</div>
</center>
</body>
</html>

