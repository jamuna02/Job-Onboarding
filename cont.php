<?php
session_start();
$e = $_POST['cemail'];
$n  = $_POST['cname'];
$m = $_POST['cm'];

//$_SESSION['sn']=$sname;




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
    $INSERT = "INSERT Into contact_us (email , gname , msg )values(?,?,?)";

//Prepare statement
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sss", $e , $n , $m);
      $stmt->execute();
      echo '<script type="text/javascript">window.onload = function(){ confirm("Message sent sucessfullty") }</script>';
      include('index.html');
     $stmt->close();
     $conn->close();
}

 //echo '<script type="text/javascript">window.onload = function(){ 
 	//alert("All field are required") }</script>';
 die(); 

?>