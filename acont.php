<?php
include("contact.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MESSAGE FROM USER</title>
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
      margin-top: 3%;
      margin-bottom: 3%;
      margin-left: -65%;
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
	    padding-right: 31%;
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
			<li ><a href="amainpg.html"> Home </a> </li>			
			<li><a class="h"  href="acont.php" target="blank">Contact Page </a> </li>
			<li><a  href="manage_jobseeker.php" target="blank"> Manage Jobseeker </a> </li>
			<li><a  href="manage_company.php" target="blank"> Manage Company </a> </li> 
			<br><br> 
	 		</ul>
       
	 	</div>
	
      
    

  

    
     
<?php
error_reporting(0);
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","j-o-b");
// Specify the query to execute
$sql = "select * from contact_us";
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
        <!--<th>EMAIL ID</th>-->
        <th>NAME</th>
        <th>DETAILS</td>
        <th>ACTION</td>
      </tr>
<?php  
  while($row = mysqli_fetch_array($result))
  {

    $id=$row['c_id'];

?>

<tr>

<td class="name"><?php echo $row['gname'];?></td>
<!--<td><?php echo $row['email']??''; ?></td>
<td><?php echo $row['msg']??''; ?></td>-->
<td class="b"><a class="del" href="c_view.php?i=<?php echo $id;?>">View</a></td>
<td class="b"><a class="del" href="c_del.php?i=<?php echo $id;?>">Delete</a></td>
</tr>




<?php
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