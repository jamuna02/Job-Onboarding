<?php
session_start();

$n  = $_POST['lname'];
$p = $_POST['lpassword'];

//$_SESSION['sn']=$sname;



if (!empty($n) || !empty($p))
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
  $SELECT = "SELECT uname From admin Where uname = ?";
  $INSERT = "INSERT Into admin (uname , pass )values(?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $uname);
     $stmt->execute();
     $stmt->bind_result($uname);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ss", $n , $p);
      $stmt->execute();
      echo '<script type="text/javascript">window.onload = function(){ confirm("New Admin Added successfully") }</script>';
      include_once('amainpg.html');
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