<?php
include("jpinfo.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JOBSEEKER PERSONAL INFO</title>
	<link rel="stylesheet" media="screen,projection" type="text/css" href="apro.css">

  <style type="text/css">
    .table{
     
      text-align:center;
      font-family: Gabriola;
      font-size: 24px;
      font-weight: bolder;
      padding: 2.5%;
      border: #056E66 6px solid;
      border-radius: 25px;
      margin-top: 3%;
      margin-bottom: 3%;
      margin-left: -30%;
      width: 55%;
      line-height: 1em ;
    }
    th{
      border: #056E66 3px solid; 
      background-color: #31ABA2;     
      border-radius: 5px;
      height: fit-content;
     
    }
    td{
      border: #31ABA2 3px solid;     
      border-radius: 5px;
      height: fit-content;
      
    }
    
    .reg{
	text-align:center;
	
	cursor: pointer;	
	margin-top: 37%;
	margin-left: -40%;
	width: 10%;
	border: #056E66 5px solid;
	background-color: #056E66;
	color:ghostwhite;
	font-family: Gabriola;
	font-size: 26px;
	font-weight: bolder;
	border-radius: 25px;
    height: 200%;
    margin-bottom: 1.5%;
}
.reg:hover {
	background-color: transparent;
	color: #31ABA2;	
	box-shadow: 0 2px #056E66;
	border: #056E66 5px solid;
	font-weight: bolder;

}


.reg:active {
	background-color: #043A36;
	box-shadow: 0 3px #056E66;
	transform: translateY(3px);
  }
  .h{
      color: #056E66;
	    background-color: ghostwhite;
	    border:ghostwhite 5px solid;
	    border-right: none;
	    font-weight: bold;
	    border-top-left-radius: 20%;
	    border-bottom-left-radius: 20%;
	    padding-right: 55.8%;
	    padding-top: 7%;
	    padding-bottom: 7%;
	    pointer-events: none;
    }
  </style>
</head>
<body class="box">
	<img src="images/lg1.png" height="70" width="110" class="logo"></img>
	<a class="exit" href="index.html"> LOG OUT </a> 
	<div class="box1">
		<div class="container">
			<br><br>
		
			<ul>
			<li ><a class="h" href="jmainpg.html"> Home </a> </li>			
			<li><a  href="posted_job.php" target="blank"> Jobs Available </a> </li>
			<li><a  href="job_avail.php" target="blank"> Jobs Applied </a> </li>
			<li><a  href="sel_job.php" target="blank"> Selected Job</a> </li>	
      		<li><a  href="rej_job.php" target="blank"> Rejected Job</a> </li>				
			<li><a  href="wait_job.php" target="blank"> Waiting Job</a> </li>
	 		</ul>
	<br>
	 	</div>
	
      
    <table class="table" height="460" >
        <tbody>
      
        

  

    
     
<?php
session_start();
$un=$_SESSION['username'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","j-o-b");
// Specify the query to execute
$sql = "select * from jdetails where j_uname='$un'";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{

//$n=$row['name'];

                  
    ?>
      <tr>   
        <td>NAME</td>
        <td><?php  echo $row['name'];?></td>
      </tr>
     <tr>
      <td>ADDRESS</td>
      <td><?php  echo $row['address'];?></td>
     </tr>
     <tr>
      <td>CITY</td>
      <td><?php  echo $row['city'];?></td>
     </tr>
     <tr>   
        <td>EMAIL ID</td>
        <td><?php  echo $row['email'];?></td>
      </tr>
     <tr>
     <tr>   
        <td>PHONE NUMBER</td>
        <td><?php  echo $row['phno'];?></td>
      </tr>
     <tr>
     <tr>   
        <td>WHATSAPP NUMBER</td>
        <td><?php  echo $row['whno'];?></td>
      </tr>
     <tr>
     <tr>   
        <td>EXPERIENCE</td>
        <td><?php  echo $row['exp'];?></td>
      </tr>
     <tr>
     <button class="reg" onclick="window.location.href='jpers.php';">  EDIT </button>  

    

<?php
}

mysqli_close($con);
?>
     
     </tbody>

</table>
  
 </div>


</body>
</html>