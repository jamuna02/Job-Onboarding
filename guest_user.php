
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JOBS</title>
	

  <style type="text/css">
    .con{
	background-color: #04877D;
	color: white;
	border: #056E66 3px solid;
	font-weight: bold;
	pointer-events: none;
}
    ul{
	list-style-type: none;
	float: right;
	margin-top: -4%;
	margin-right: 5%;
}
ul li{
	display: inline-block;
	font-size: 25px;
	font-weight: bold;
	font-family: Footlight MT Light;

}
ul li a{
	text-decoration: none;
	color:black;
	margin-right: 8px;
	padding: 5px 20px;
	/*border: 1px solid ;*/
}
ul li a:hover{
	background-color: #04877D;
	color: white;
	border: #056E66 3px solid;
	font-weight: bold;

}
    .h{
      color: #056E66;
	    background-color: ghostwhite;
	    border:ghostwhite 5px solid;
	    border-right: none;
	    font-weight: bold;
	    border-top-left-radius: 20%;
	    border-bottom-left-radius: 20%;
	    padding-right: 15.8%;
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
     margin-top: -6%;
     margin-bottom: 3%;
     margin-left: 5%;
     width: 90%;
     height: 550px;
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
	<header>
			<ul>
				<li><a class="con" target="blank"> Jobs </a> </li>   
	 			<li><a href="login.html" target="blank"> Log In </a></li> 
                <li><a href="signin.html" target="blank"> Sign In </a></li> 
	 		</ul>
		
	</header>
      
  

  

    
     
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
  <td class="b"><a class="del" href="signin.html">View</a></td>
  <td class="b"><a class="del" href="signin.html">View</a></td>
<td class="b"><a class="del" href="signin.html">Apply</a></td>
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