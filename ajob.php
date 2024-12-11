<?php
session_start();

$t = $_POST['t'];
$v = $_POST['v'];
$q = $_POST['q'];
$s = $_POST['s'];
$d = $_POST['d'];

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

  $sq = "select name from cdetails where c_uname='$u'";
  // Execute query
  $res = mysqli_query($conn,$sq);
  while($r = mysqli_fetch_array($res))
  {

  $cn= $r['name'];
  }
    
    $INSERT = "INSERT Into post_job (u_name, cname,	title,	vacancy,	qualification,	salary,	Description) values(?,?,?,?,?,?,?)";

//Prepare statement
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssssss", $u,$cn,$t,$v,$q,$s,$d);
      $stmt->execute();
      
        echo '<script type="text/javascript">window.onload = function(){ confirm("Job Posted Sucessfullty");window.location=\'post_job.php\'; }</script>';
      
      
     $stmt->close();
     $conn->close();
}


 die(); 

?>