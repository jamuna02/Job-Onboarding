<?php
session_start();

	$n=$_GET['id'];
   
// Establish Connection with Database
    $con = mysqli_connect("localhost","root","","j-o-b");
	// Specify the query to Insert Record
	$sql = "UPDATE `j_applied` SET `status`='Rejected' WHERE `pj_id`='$n'";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">confirm("The Candidate Has Been Rejected");window.location=\'apply_can.php\';</script>';

?>

