<?php
session_start();

	$n=$_GET['id'];
    //$m=$_SESSION['ms'];
	
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","j-o-b");
	// Specify the query to Insert Record
	$sql = "delete from feedback where f_id='".$n."'  ";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">confirm("Message Deleted Succesfully");window.location=\'afeed.php\';</script>';

?>

