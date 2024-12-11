<?php
session_start();

	$n=$_GET['p_id'];
   
// Establish Connection with Database
    $con = mysqli_connect("localhost","root","","j-o-b");
	// Specify the query to Insert Record
	$sql = "delete from j_applied where pj_id ='".$n."' ";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">confirm("Applied Job Has Been Cancelled Succesfully");window.location=\'job_avail.php\';</script>';

?>

