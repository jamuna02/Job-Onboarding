<?php

	$n=$_GET['i'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","j-o-b");
	// Specify the query to Insert Record
	$sql = "delete from contact_us where c_id='".$n."'";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("User Deleted Succesfully");window.location=\'acont.php\';</script>';

?>
</body>
</html>
