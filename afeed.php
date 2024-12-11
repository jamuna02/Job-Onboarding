<?php
error_reporting(0);

include("afeedback.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FEEDBACK FROM USER</title>
	<link rel="stylesheet" media="screen,projection" type="text/css" href="apro.css">

  <style type="text/css">
    h3{
      
      margin-left:-53%;
      font-family: Gabriola;
      font-size: 40px;
      font-weight: bolder;
      color: #056E66;
      margin-top: 16%;    
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
      margin-left: -68%;
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
    .h{
      color: #056E66;
	    background-color: ghostwhite;
	    border:ghostwhite 5px solid;
	    border-right: none;
	    font-weight: bold;
	    border-top-left-radius: 20%;
	    border-bottom-left-radius: 20%;
	    padding-right: 75%;
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
			<li ><a class="h" href="amainpg.html"> Home </a> </li>			
			<li><a  href="acont.php" target="blank">Contact Page </a> </li>
			<li><a  href="manage_jobseeker.php" target="blank"> Manage Jobseeker </a> </li>
			<li><a  href="manage_company.php" target="blank"> Manage Company </a> </li> 
			<br><br>
	 		</ul>
       <br><br>
	 	</div>
	
      
       
     
<?php

// Establish Connection with Database
$con = mysqli_connect("localhost","root","","j-o-b");
// Specify the query to execute
$sql = "select * from feedback";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
$records = mysqli_num_rows($result);
if($records==0){
  ?>
  <tr>
  <h3> NO MESSAGES FROM THE USER YET</h3>
  </tr>
  <?php
  }
  else{
  ?>
  <table class="table" height="330" >
        <tbody>
        <tr>   
        <th>USERNAME</th>
        
        <th>USER TYPE </th>
        <th>DETAILS</th>
        <th>ACTION</th>
      </tr>
<?php  
while($row = mysqli_fetch_array($result))
{
$i=$row['f_id'];
$n=$row['f_name'];
$m=$row['f_msg'];
?>

<tr>
<td><?php echo $n ??''; ?></td>
<!--<td class="name"><?php echo $m??''?></td>-->
<td><?php echo $row['f_usertype']??''; ?></td>
<td class="b"><a class="del" href="a_view.php ?id=<?php echo $i;?>">View</a></td>
<td class="b"><a class="del" href="a_fdel.php?id=<?php echo $i;?>">Delete</a></td>
<!--<td class="b"><a class="del" href="a_feedreply.php ?f_name=<?php echo $n;?>">Reply</a></td>-->
</tr>

<?php

}
}
//$_SESSION['ms']=$m;

//$records = mysqli_num_rows($result);
?>

<?php
// Close the connection
mysqli_close($con);
?>
     
     </tbody>
</table>
  
 </div>


</body>
</html>