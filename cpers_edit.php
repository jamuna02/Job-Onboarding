<?php
$i = $_POST['i'];
$n = $_POST['n'];
$a = $_POST['a'];
$c = $_POST['c'];
$e = $_POST['e'];
$p = $_POST['p'];
$w = $_POST['w'];
$ex = $_POST['ex'];


// Establish Connection with Database
$con = mysqli_connect("localhost","root","","j-o-b");
// Specify the query to Update Record
$sql = "Update cdetails set contperson='".$ex."', address='".$a."',city='".$c."',email='".$e."',contno='".$p."',whatsappno='".$w."' where cid=".$i."";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("Personal Information Updated Succesfully");window.location=\'cpersonal.php\';</script>';
?>