<?php
error_reporting(0);
session_start();



$n=$_POST['cname'];
$p=$_POST['cper'];
$a=$_POST['cadd'];
$c=$_POST['ccity'];
$e=$_POST['cemail'];
$no=$_POST['cno'];
$wh=$_POST['cwh'];

$s=$_SESSION['sn'];
$_SESSION['username']=$s;
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "j-o-b";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

else{


      $INSERT = "INSERT Into cdetails (c_uname,	name,	contperson,	address,	city,	email,	contno,	whatsappno)values(?,?,?,?,?,?,?,?)";
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssssss",$s,$n,$p,$a,$c,$e,$no,$wh);
      $stmt->execute();
      
      echo '<script type="text/javascript">window.onload = function(){ confirm(" Hi !! Welcome to J-O-B!!! your profile has been set.."); }window.location=\'cmainpg.html\';</script>';
      
    
      mysqli_close($conn);
}
      

?>