<?php

	$n=$_GET['uname'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","j-o-b");
	// Specify the query to Insert Record
	$sql = "delete from admin where uname='".$n."'";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("User Deleted Succesfully");window.location=\'apro.php\';</script>';

?>
