<?php
error_reporting(0);
session_start();
if ($_POST['jgen']=="" && $_POST['exp']="")
{
  
  echo '<script type="text/javascript">window.onload = function(){ alert("Gender or Experience is not selected.... Please select to continue....") } </script>';

  }

$n=$_POST['jname'];
$a=$_POST['address'];
$c=$_POST['jcity'];
$e=$_POST['jemail'];
$no=$_POST['jno'];
$wh=$_POST['jwh'];
$q=$_POST['jq'];
$g=$_POST['jgen'];
$dob=$_POST['dob'];
$yr=$_POST['jyr'];
$ex=$_POST['exp'];
$r=$_POST['jres'];

$s=$_SESSION['sn'];
//$s = $_GET['id'];
$_SESSION['username']=$s;
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "j-o-b";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

else{
      //$id="SELECT id from signin WHERE sname=$s";
      //$jid=mysqli_query($conn,$id);
      
      

      $INSERT = " INSERT Into jdetails (j_uname,name,	address,	city,	email,	phno, whno,	qualification,	gender,	dob,	yop,	exp,	resume)values(?,?,?,?,?,?,?,?,?,?,?,?,?)";
  
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssssssssiss",$s,$n,$a,$c,$e,$no,$wh,$q,$g,$dob,$yr,$ex,$r);
      $stmt->execute();
      
      echo '<script type="text/javascript">window.onload = function(){ confirm(" Hi !! Welcome to J-O-B!!! your profile has been set..") }window.location=\'jmainpg.html\';</script>';
      //include 'jmainpg.html'; 
    
      mysqli_close($conn);

      //$jid->execute();
      //print($jd);
      /*$INSERT = "INSERT Into jdetails (jid,name,	address,	city,	email,	phno, whno,	qualification,	gender,	dob,	yop,	exp,	resume)values(?,?,?,?,?,?,?,?,?,?,?,?,?)";
  
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssssssssssss",$jd['id'],$n,$a,$c,$e,$no,$wh,$q,$g,$dob,$yr,$ex,$r);
      $stmt->execute();
      echo '<script type="text/javascript">window.onload = function(){ confirm(" Hi !! Welcome to J-O-B!!! your profile has been set..") }</script>';
      include 'jmainpg.html';
      $jid->close();
      $stmt->close();
      $conn->close();*/
    }


?>