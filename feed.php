<?php
session_start();

$f = $_POST['f'];

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

  $ret="select * from signin where sname=?";
  $stmt= $conn->prepare($ret) ;
  $stmt->bind_param('s',$u);
  $stmt->execute() ;
  $res=$stmt->get_result();
  
  // Execute query

  //$result = mysqli_query($con,$sql);
  // Loop through each records
  //while ($row = mysqli_fetch_array($result)) {
    while($row=$res->fetch_object())
    {
      
      
      
      $usty = $row->susertype;
    
    } 
    
    $stmt->close();
    if($usty == "j"){
      $us="JobSeeker";
    }
    else{
      $us="Company";
    }
    $INSERT = "INSERT Into feedback (f_name, f_msg, f_usertype )values(?,?,?)";

//Prepare statement
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sss", $u,$f,$us);
      $stmt->execute();
      if($usty == "j"){
        echo '<script type="text/javascript">window.onload = function(){ confirm("Feedback sent sucessfullty");window.location=\'jmainpg.html\'; }</script>';
      }
      else{
        echo '<script type="text/javascript">window.onload = function(){ confirm("Feedback sent sucessfullty");window.location=\'cmainpg.html\'; }</script>';
      }
      
      
     $stmt->close();
     $conn->close();
}

 //echo '<script type="text/javascript">window.onload = function(){ 
 	//alert("All field are required") }</script>';
 die(); 

?>