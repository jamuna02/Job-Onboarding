<?php
include("cpinfo.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CANDIDATE DETAILS</title>
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
	    padding-right: 8.9%;
	    padding-top: 7%;
	    padding-bottom: 7%;
	    pointer-events: none;
    }

    h3{
      margin-left:-49%;
      font-family: Gabriola;
     font-size: 40px;
     font-weight: bolder;
     color: #056E66;
     margin-top: 1.3%;
    }

    .table{
     
      text-align:center;
      font-family: Gabriola;
      font-size: 24px;
      font-weight: bolder;
      padding: 2.5%;
      border: #056E66 6px solid;
      border-radius: 25px;
      margin-top: 6.5%;
      margin-bottom: 3%;
      margin-left: -43%;
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
  </style>
</head>
<body class="box">
	<img src="images/lg1.png" height="70" width="110" class="logo"></img>
	<a class="exit" href="index.html"> LOG OUT </a> 
	<div class="box1">
		<div class="container">
			<br><br>
		
			<ul>
        <li ><a href="cmainpg.html"> Home </a> </li>			
				<li><a  href="post_job.php" target="blank"> Post Jobs </a> </li>
				<li><a class="h" href="apply_can.php" target="blank"> Applied candidate </a> </li>
				<li><a  href="selected.php" target="blank"> Selected candidate </a> </li>
				<li><a  href="rejected.php" target="blank"> Rejected candidate </a> </li>
	 		</ul>
	<br>
	 	</div>
	
      
    <table class="table" height="460" >
        <tbody>
      
        

  

        <h3> APPLIED CANDIDATE DETAILS  </h3>
     
<?php
session_start();
$un=$_SESSION['username'];
$n=$_GET['name'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","j-o-b");
// Specify the query to execute
$sql = "select * from jdetails where j_uname='$n'";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 

while($row = mysqli_fetch_array($result))
{

$n=$row['name'];

                  
    ?>
      <tr>   
        <td>NAME</td>
        <td><?php  echo $row['name'];?></td>
      </tr>

      <tr>
      <td>DATE OF BIRTH</td>
      <td><?php  echo $row['dob'];?></td>
     </tr>

      <tr>   
        <td>EMAIL ID</td>
        <td><?php  echo $row['email'];?></td>
      </tr>

      <tr>   
        <td>CONTACT NUMBER</td>
        <td><?php  echo $row['phno'];?></td>
      </tr>
     <tr>

      <tr>
      <td>CITY</td>
      <td><?php  echo $row['city'];?></td>
     </tr>


     <tr>
      <td>QUALIFICATION</td>
      <td><?php  echo $row['qualification'];?></td>
     </tr>

     <tr>   
        <td>YEAR OF PASSING</td>
        <td><?php  echo $row['yop'];?></td>
      </tr>
    
     <tr>   
        <td>EXPERIENCE</td>
        <td><?php  echo $row['exp'];?></td>
      </tr>
     <tr>
            

    

<?php
}

mysqli_close($con);
?>
     
     </tbody>

</table>
  
 </div>


</body>
</html>