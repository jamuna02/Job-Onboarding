<?php
session_start();
$t = $_POST['t'];
$v = $_POST['v'];
$q = $_POST['q'];
$s = $_POST['s'];
$d = $_POST['d'];

//$i = $_SESSION['username'];
$I=$_SESSION['id'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","j-o-b");
// Specify the query to Update Record
$sql = "Update post_job set vacancy='".$v."',qualification='".$q."',salary='".$s."' where p_id=".$I."  ";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("Job Details Updated Succesfully");window.location=\'post_job.php\';</script>';

?>