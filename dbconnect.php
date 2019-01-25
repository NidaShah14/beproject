<?php
session_start();
$conn = mysqli_connect("localhost","root","","beproject") or die("Connection failed".mysqli_connect_error());
date_default_timezone_set("Asia/Kolkata");
?>