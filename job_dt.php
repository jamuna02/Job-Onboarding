<?php
include("jpro.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JOB DETAILS</title>
	<link rel="stylesheet" media="screen,projection" type="text/css" href="apro.css">

  <style type="text/css">
    .h{
      color: #056E66;
	    background-color: ghostwhite;
	    border:ghostwhite 5px solid;
	    border-right: none;
	    font-weight: bold;
	    border-top-left-radius: 20%;
	    border-bottom-left-radius: 20%;
	    padding-right: 0.8%;
	    padding-top: 7%;
	    padding-bottom: 7%;
	    pointer-events: none;
    }
    .table{
     
      text-align:center;
      font-family: Gabriola;
      font-size: 24px;
      font-weight: bolder;
      padding: 2.5%;
      border: #056E66 6px solid;
      border-radius: 25px;
      margin-top: 5%;
      margin-bottom: 3%;
      margin-left: -61%;
      width: 55%;
      height: 500px;
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
	margin-top: 32%;
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
  </style>
</head>
<body class="box">
	<img src="images/lg1.png" height="70" width="110" class="logo"></img>
	<a class="exit" href="index.html"> LOG OUT </a> 
	<div class="box1">
		<div class="container">
			<br><br>
		
			<ul>
			<li ><a href="jmainpg.html"> Home </a> </li>			
			<li><a class="h" href="posted_job.php" target="blank"> Jobs Available </a> </li>
			<li><a  href="job_avail.php" target="blank"> Jobs Applied </a> </li>
			<li><a  href="sel_job.php" target="blank"> Selected Job</a> </li>	
      <li><a  href="rej_job.php" target="blank"> Rejected Job</a> </li>	
      <li><a  href="wait_job.php" target="blank"> Waiting Job</a> </li>
	 		</ul>
	<br>
	 	</div>
	
      
    <table class="table" height="350" >
        <tbody>
      
        

  

    
     
<?php
session_start();
$un=$_SESSION['username'];
$id=$_GET['id'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","j-o-b");
// Specify the query to execute
$sql = "select * from post_job where p_id='$id'";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{

//$n=$row['sname'];

                  
    ?>
      <tr>   
        <td>COMPANY NAME</td>
        <td><?php  echo $row['cname'];?></td>
      </tr>
     <tr>
      <td>TITLE</td>
      <td><?php  echo $row['title'];?></td>
     </tr>
     <tr>
        <td>VACANCY</td>
      <td><?php  echo $row['vacancy'];?></td>
     </tr>
     <tr>
        <td>QUALIFICATION</td>
      <td><?php  echo $row['qualification'];?></td>
     </tr>
     <tr>
        <td>SALARY</td>
      <td><?php  echo $row['salary'];?></td>
     </tr>
     <tr>
        <td>DESCRIPTION</td>
      <td><?php  echo $row['Description'];?></td>
     </tr>   

<?php
}

mysqli_close($con);
?>
     
     </tbody>

</table>
  
 </div>


</body>
</html>