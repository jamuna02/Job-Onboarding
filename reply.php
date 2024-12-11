<?php
session_start();

$f = $_POST['f'];

//$_SESSION['sn']=$sname;

$u=$_SESSION['un'];
//$us="JobSeeker";

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
    
    $INSERT = "INSERT Into reply (r_name, r_msg )values(?,?)";

//Prepare statement
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ss", $u,$f);
      $stmt->execute();
      echo '<script type="text/javascript">window.onload = function(){ confirm("Reply sent sucessfullty");window.location=\'amainpg.html\'; }</script>';
      
     $stmt->close();
     $conn->close();
}

 //echo '<script type="text/javascript">window.onload = function(){ 
 	//alert("All field are required") }</script>';
 die(); 

?>