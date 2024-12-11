<?php
$Id = $_POST['id'];
$Name=$_POST['n'];
$Password=$_POST['p'];

// Establish Connection with Database
$con = mysqli_connect("localhost","root","","j-o-b");
// Specify the query to Update Record
$sql = "Update signin set spassword='".$Password."' where id=".$Id."";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location=\'jpro_ed.php\';</script>';
?>