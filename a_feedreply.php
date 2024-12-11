<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REPLY FOR FEEDBACK</title>
	<link rel="stylesheet" media="screen,projection" type="text/css" href="jfeed.css">
</head>
<body class="box">
	<img src="images/lg1.png" height="70" width="110" class="logo"></img>
	<a class="exit" href="index.html"> LOG OUT </a> 
	<div class="box1">
		<div class="container">
			<br><br>
		
			<ul>
				<li ><a class="home" href="#"> Home </a> </li>
			
			<li><a class="s" href="acont.php" target="blank">Contact Page </a> </li>
			<li><a  href="" target="blank"> Manage Jobseeker </a> </li>
			<li><a class="g" href="gvt.html" target="blank"> Manage Company </a> </li> 
	 		</ul>
	
	 	</div>
	 	<fieldset>
	 		<legend><h2><b> Send Reply </b></h2></legend>
	 	<form action="reply.php" method="POST">
	 		
	 		<div class="box2">
	 		<br>
	 		
			<textarea name="f" placeholder="Enter Your Reply Text" rows="5" pattern="regexp=^[A-Za-z-0-99999999'"></textarea><br>	
			
			<button class="reg"> <span> REPLY </span> </button><br><br>
		</div>
		</form>
	</fieldset>
</body>

<?php
error_reporting(0);
session_start();

$f = $_POST['f'];

$_SESSION['un']=$_GET['f_name'];
?>
</html>