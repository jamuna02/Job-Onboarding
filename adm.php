<?php


error_reporting(0);

	$n = $_POST['lname'];
	$p  = $_POST['lpassword'];
	

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "j-o-b";



// Create connection
$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$sql = "select * from admin where uname='$n' and pass='$p'";

if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{


		$result = mysqli_query($con,$sql);
		$records = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		if ($records==0)
		{
			echo '<script type="text/javascript">window.onload = function(){
				alert("Wrong UserName or Password") } </script>';
		}
		else{
			//include 'amainpg.html';
			echo '<script type="text/javascript">window.location=\'amainpg.html\';</script>';
			
		}

	}

mysqli_close($con);




?>