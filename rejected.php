
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REJECTED CANDIDATE</title>
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
	    padding-right: 5.7%;
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
      margin-left:-45%;
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
     margin-left: -38%;
     width: 65%;
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
				<li><a  href="post_job.php" target="blank"> Post Jobs </a> </li>
				<li><a  href="apply_can.php" target="blank"> Applied candidate </a></li>
				<li><a  href="selected.php" target="blank"> Selected candidate </a> </li>
				<li><a class="h" href="rejected.php" target="blank"> Rejected candidate </a> </li>

				
	 		</ul>
       <br>
	 	</div>
	
      
  

  

    
     
<?php
session_start();
//error_reporting(0);

$u=$_SESSION['username'];

// Establish Connection with Database
$con = mysqli_connect("localhost","root","","j-o-b");
// Specify the query to execute

$sq = "SELECT * FROM `j_applied` WHERE pj_uname='$u' AND status='Rejected' ";
// Execute query
$res = mysqli_query($con,$sq);
// Loop through each records 
$records = mysqli_num_rows($res);
if($records==0){
  ?>
  <br>
  <tr>
  <h3> NO CANDIDATE HAS BEEN REJECTED FOR THE JOB </h3>
  </tr>
  <?php
}

else{
    ?>
    <h4>Rejected Candidate</h4>
  <table class="table" height="330" >
        <tbody>
        <tr> 
         
        <th>JOB TITLE</th>
                
        <th>CANDIDATE NAME</th>
        <!--<th>QUALIFICATION</th><th>TOTAL VACANCY</th>-->
        <th>DETAILS</th>
        <th>ACTION</th>
      </tr>
<?php 
  while($r = mysqli_fetch_array($res))
  {
    $i = $r['pj_id'];
    $n = $r['ap_name'];
    $sql = "SELECT * FROM `post_job` WHERE p_id= '$i'";
// Execute query
    $result = mysqli_query($con,$sql);

  
  
 
  while($row = mysqli_fetch_array($result))
  {

  $pid=$row['p_id'];  
  $t= $row['title'];
  ?>

<tr>
  
  <td><?php echo $t; ?></td>
  <td><?php echo $n; ?></td>
  <!--<td><?php echo $q; ?></td><td><?php echo $v; ?></td>-->
  <td class="b"><a class="del" href="j_dt.php?name=<?php echo $n;?>">View</a></td>
  <td class="b"><a class="del" href="j_sel.php?id=<?php echo $i;?>">Select</a></td>
</tr>




<?php
  }
}
}
// Close the connection
mysqli_close($con);
?>
     
     </tbody>
</table>
  
 </div>


</body>
</html>