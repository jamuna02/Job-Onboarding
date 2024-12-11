<?php
include("postjob.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>POST JOB</title>
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
	    padding-right: 50.9%;
	    padding-top: 7%;
	    padding-bottom: 7%;
	    pointer-events: none;
    }
    h3{
      
      margin-left:-43%;
      font-family: Gabriola;
      font-size: 40px;
      font-weight: bolder;
      color: #056E66;
      margin-top: 19%;    
    }
    .table{
     
      text-align:center;
      font-family: Gabriola;
      font-size: 24px;
      font-weight: bolder;
      padding: 2.5%;
      border: #056E66 6px solid;
      border-radius: 25px;
      margin-top: 7%;
      margin-bottom: 3%;
      margin-left: -65%;
      width: 72%;
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
	margin-top: 2%;
	margin-left: -15%;
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
  .del:hover{
      border-bottom: solid 5px #056E66; 
      padding-bottom: 0%;         
      background-color: transparent;
      color: #056E66;       
      cursor: pointer;
      width: 60%;
      font-weight: bolder;
    }

    .del{
      text-align:center;
      font-family: Gabriola;
      font-size: 22px;
      font-weight: bolder;
      background-color: transparent;
      border: none;
      color:black;
      text-decoration: none;
      
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
				<li><a class="h" href="post_job.php" target="blank"> Post Jobs </a> </li>
				<li><a  href="apply_can.php" target="blank"> Applied candidate </a> </li>
				<li><a  href="selected.php" target="blank"> Selected candidate </a> </li>
				<li><a  href="rejected.php" target="blank"> Rejected candidate </a> </li>
	 		</ul>
	<br>
	 	</div>
         <button class="reg" onclick="window.location.href='addjob.html';"> <span> Post Job</span> </button>
	
     <?php
error_reporting(0);

session_start();
$un=$_SESSION['username'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","j-o-b");
// Specify the query to execute


$sql = "select * from post_job where u_name='$un'";
// Execute query
$result = mysqli_query($con,$sql);
$records= mysqli_num_rows($result);

if($records==0){
  ?>
  <tr>
  <h3> NO JOBS POSTED YET</h3>
  </tr>

  <?php
  }
  else{
  ?>

  <table class="table" height="330" >
    <tbody>
        <tr>   
        <th>TITLE</th>
        <th>TOTAL VACANCY</th>
        <th>QUALIFICATION</th>
        <th>SALARY</th>
        <th>JOB DESCRIPTION</th>
        <th>ACTION</th>
        <th>ACTION</th>
      </tr>
<?php  

while($row = mysqli_fetch_array($result))
{
  $pid=$row['p_id'];
  $t= $row['title'];
  $v= $row['vacancy'];
  $q= $row['qualification'];
  $s= $row['salary'];
  $d= $row['Description'];
  
?>

<tr>

  <td><?php echo $t; ?></td>
  <td><?php echo $v; ?></td>
  <td><?php echo $q; ?></td>
  <td><?php echo $s; ?></td>
  <td><?php echo $d; ?></td>
  <td class="b"><a class="del" href="p_edit.php?p_id=<?php echo $pid;?>">Edit</a></td>
  <td class="b"><a class="del" href="p_del.php?p_id=<?php echo $pid;?>">Delete</a></td>
</tr>

<?php

}
}
?>

<?php
$_SESSION['T']=$t;
$_SESSION['V']=$v;
$_SESSION['Q']=$q;
$_SESSION['S']=$s;
$_SESSION['D']=$d;
mysqli_close($con);
?>
     
  </tbody>
</table>
  
 </div>


</body>
</html>