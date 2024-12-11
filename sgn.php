<?php
session_start();
$sname = $_POST['sname'];
$spassword  = $_POST['spassword'];
$susertype = $_POST['susertype'];

$_SESSION['username']=$sname;



if (!empty($sname) || !empty($spassword) || !empty($susertype))
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "j-o-b";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


/*
if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}*/
else{
  $SELECT = "SELECT sname From signin Where sname = ?";
  $INSERT = "INSERT Into signin (sname , spassword , susertype )values(?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $sname);
     $stmt->execute();
     $stmt->bind_result($sname);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sss", $sname , $spassword , $susertype);
      $stmt->execute();
      echo '<script type="text/javascript">window.onload = function(){ confirm("Joined J-O-B sucessfully") }</script>';
      if ($susertype=="j"){
      	//echo '<script> window.location=\'jdetails.html\';</script>';
        echo '<script type="text/javascript">window.location=\'jdetails.html\';</script>';
      }
      else{
        //echo '<script> window.location=\'cdetails.html\';</script>';
      	//include 'cdetails.html';
        echo '<script type="text/javascript">window.location=\'cdetails.html\';</script>';
      }

     } 
     else {
      echo '<script type="text/javascript">window.onload = function(){ alert("Username already exits") }</script>';
     }
     $stmt->close();
     $conn->close();
    }
} 
else {
 echo '<script type="text/javascript">window.onload = function(){ 
 	alert("All field are required") }</script>';
 die();
} 

?>