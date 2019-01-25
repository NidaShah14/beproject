<?php
include('dbconnect.php');

if(!isset($_SESSION["userid"]))
	header('Location:Logout.php');
?>