<?php
session_start();
	$u=$_SESSION['username'];
	$p=$_GET['p_id'];
	$t=$_SESSION['T'];
    $v=$_SESSION['V'];
	$q=$_SESSION['Q'];
	$s=$_SESSION['S'];
// Establish Connection with Database
    $con = mysqli_connect("localhost","root","","j-o-b");
	// Specify the query to Insert Record
	$sql = "delete from post_job where p_id='".$p."' and u_name='".$u."' and title='".$t."' and vacancy='".$v."' and qualification='".$q."' and salary='".$s."'  ";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Posted Job Deleted Succesfully");window.location=\'post_job.php\';</script>';

?>
</body>
</html>
