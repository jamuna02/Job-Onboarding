<?php
session_start();

$i = $_GET['p_id'];
$n=$_SESSION['n'];

//$_SESSION['sn']=$sname;

$u=$_SESSION['username'];
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
  $SELECT = "SELECT ap_name From j_applied Where pj_id = ?";
  $stmt = $conn->prepare($SELECT);
  $stmt->bind_param("s", $i);
  $stmt->execute();
  $stmt->bind_result($i);
  $stmt->store_result();
  $rnum = $stmt->num_rows;

  //checking username
   if ($rnum==0) {
   $stmt->close();
    $INSERT = "INSERT Into j_applied (pj_id, pj_uname	,ap_name )values(?,?,?)";

//Prepare statement
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sss", $i,$n,$u);
      $stmt->execute();
      
        echo '<script type="text/javascript">window.onload = function(){ confirm("Applied For The Job Successfully");window.location=\'posted_job.php\'; }</script>';
      
      
      
     $stmt->close();
     $conn->close();
   }
   else{
    echo '<script type="text/javascript">window.onload = function(){ confirm("Already Applied For The Job");window.location=\'posted_job.php\'; }</script>';
   }
}

 //echo '<script type="text/javascript">window.onload = function(){ 
 	//alert("All field are required") }</script>';
 die(); 

?>