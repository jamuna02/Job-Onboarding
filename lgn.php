<?php

error_reporting(0);
session_start();
if ($_POST['login']=="")
{
	
	echo '<script type="text/javascript">window.onload = function(){ alert("Select User Type") } </script>';

	}


else{

	$n = $_POST['lname'];
	$p  = $_POST['lpassword'];
	$u = $_POST['login'];

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "j-o-b";

//$_SESSION['sn']=$n;

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$sql = "select * from signin where sname='$n' and spassword='$p' and susertype='$u'";

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
	if($u=="j"){
		$result = mysqli_query($conn,$sql);
		$records = mysqli_num_rows($result);
		//$row = mysqli_fetch_array($result);		
		while($row = mysqli_fetch_array($result))
		{

			$_SESSION['username']=$row['sname'];
		}
		
		if ($records==0)
		{
			echo '<script type="text/javascript">window.onload = function(){
				alert("Wrong UserName or Password") } </script>';
		}
		else{

			//include 'jmainpg.html';
			echo '<script type="text/javascript">window.location=\'jmainpg.html\';</script>';
			
		}

	}
	else if($u=="c"){
		$result = mysqli_query($conn,$sql);
		$records = mysqli_num_rows($result);
		//$row = mysqli_fetch_array($result);
		while($row = mysqli_fetch_array($result))
		{

			$_SESSION['username']=$row['sname'];
		}
		if ($records==0)
		{
			echo '<script type="text/javascript">window.onload = function(){
				alert("Wrong UserName or Password") } </script>';
		}
		else{
			//include 'cmainpg.php'; 
			echo '<script type="text/javascript">window.location=\'cmainpg.html\';</script>';
		}
	}
	
}
//$stmt->Close();
mysqli_close($conn);
}



?>