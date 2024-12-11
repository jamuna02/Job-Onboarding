
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JOBS AVAILABLE</title>
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
    h3{
      
      margin-left:-63%;
      font-family: Gabriola;
      font-size: 44px;
      font-weight: bolder;
      color: #056E66;
      margin-top: 16%;    
    }
    h4{
      margin-left:-40%;
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
     margin-top: 7%;
     margin-bottom: 3%;
     margin-left: -43%;
     width: 78%;
     height: 500px;
     line-height: 1.5em ;
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
      <li ><a href="jmainpg.html"> Home </a> </li>			
			<li><a class="h" href="posted_job.php" target="blank"> Jobs Available </a> </li>
			<li><a  href="job_avail.php" target="blank"> Jobs Applied </a> </li>
			<li><a  href="sel_job.php" target="blank"> Selected Job</a> </li>	
      <li><a  href="rej_job.php" target="blank"> Rejected Job</a> </li>				
			<li><a  href="wait_job.php" target="blank"> Waiting Job</a> </li>
	 		</ul>
       <br>
	 	</div>
	
      
    

  

    
     
<?php
error_reporting(0);
session_start();
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","j-o-b");
// Specify the query to execute

$sql = "select * from post_job";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
$records = mysqli_num_rows($result);
if($records==0){
  ?>
  <br>
  <tr>
  <h3> NO JOBS OFFERS AVAILABLE</h3>
  </tr>
  <?php
}
else{
  ?>
  <h4>Jobs Available </h4>
  <table class="table" height="330" >
        <tbody>
        <tr> 
        <th>COMPANY NAME</th>  
        <th>JOB TITLE</th>
        <th>SALARY</th>
        <th>JOB DETAILS</th>
        <th>COMPANY DETAILS</th>
        <th>ACTION</th>
      </tr>
<?php  
  while($row = mysqli_fetch_array($result))
  {

  $pid=$row['p_id'];
  $n= $row['u_name'];
  $c= $row['cname'];
  $t= $row['title'];
  //$v= $row['vacancy'];
  //$q= $row['qualification'];
  $s= $row['salary'];
  //$d= $row['Description'];

?>

<tr>
  <td><?php echo $c; ?></td>
  <td><?php echo $t; ?></td>
  
  <td><?php echo $s; ?></td>
  <td class="b"><a class="del" href="job_dt.php?id=<?php echo $pid;?>">View</a></td>
  <td class="b"><a class="del" href="com_dt.php?na=<?php echo $c; ?>">View</a></td>
<td class="b"><a class="del" href="j_apply.php?p_id=<?php echo $pid;?>">Apply</a></td>
</tr>




<?php
}
}

$_SESSION['n']=$n;
// Close the connection
mysqli_close($con);
?>
     
     </tbody>
</table>
  
 </div>


</body>
</html>