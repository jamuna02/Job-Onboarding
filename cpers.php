<?php
//include("jpro.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EDIT PERSONAL INFO</title>
	<link rel="stylesheet" media="screen,projection" type="text/css" href="jpro.css">

  <style type="text/css">
  input{
	text-align: center;
	font-family: Gabriola;
	font-size: 24px;
	font-weight: bolder;
	padding: 0.3%;
	border: none;
	width: 70%;
  background-color: transparent;
	color: black;
}	
input:focus{
  outline: none;
}
input:hover{
	background-color: transparent;
  color: #056E66;
  border: none;
 }
    h3{
      margin-left:-50%;
      font-family: Gabriola;
     font-size: 40px;
     font-weight: bolder;
     color: #056E66;
     margin-top: 1.3%;
    }
 table{
     
     text-align:center;
     font-family: Gabriola;
     font-size: 24px;
     font-weight: bolder;
     padding: 2.5%;
     
     
     margin-top: 20%;
     margin-bottom: 1%;
     margin-left: -105%;
     width: 150%;
     line-height: 1em ;
   }
   
   td{
     border: #31ABA2 3px solid;     
     border-radius: 5px;
     height: fit-content;
    
   }
   
   .reg{
	text-align:center;
	display: inline-block;
	cursor: pointer;	
	margin-top: 0%;
	margin-left: -170%;
	width: 25%;
	border: #056E66 5px solid;
	background-color: #056E66;
	color:ghostwhite;
	font-family: Gabriola;
	font-size: 26px;
	font-weight: bolder;
	border-radius: 25px;
	margin-bottom: 4%;
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
      <li ><a class="home" href="#"> Home </a> </li>			
				<li><a  href="post_job.php" target="blank"> Post Jobs </a> </li>
				<li><a  href="apply_can.php" target="blank"> Applied candidate </a> </li>
				<li><a  href="selected.php" target="blank"> Selected candidate </a> </li>
				<li><a  href="rejected.php" target="blank"> Rejected candidate </a> </li>
	 		</ul>
	
	 	</div>
     <h3>Edit Pesonal Information</h3>
      
     <?php
            
            $Id = $_SESSION['username'];
            // Establish Connection with Database
            $con = mysqli_connect("localhost", "root", "", "j-o-b");
            // Specify the query to execute
            //$sql = "select * from admin where aid=" . $Id . "";
            $ret="select * from cdetails where c_uname=?";
            $stmt= $con->prepare($ret) ;
            $stmt->bind_param('s',$Id);
            $stmt->execute() ;
            $res=$stmt->get_result();
            
            // Execute query

            //$result = mysqli_query($con,$sql);
            // Loop through each records
            //while ($row = mysqli_fetch_array($result)) {
              while($row=$res->fetch_object())
              {
                
                $i = $row->cid;
                $n = $row->name;
                $ex = $row->contperson;
                $a = $row->address;
                $c = $row->city;
                $e = $row->email;
                $p = $row->contno;
                $w = $row->whatsappno;
                
              } 
              mysqli_close($con);
                ?>
            
           
            
        
        
        <form method="post" action="cpers_edit.php">
            <table height="350">
            <tr>
                <td>COMPANY ID</td>
                <td>
                
                <input class="i" name="i" readonly type="text" value="<?php echo $i; ?>"/>
                
                </td>
            </tr>
            <tr>
                <td>COMPANY NAME</td>
                <td>
                
                <input class="i" name="n" readonly type="text" value="<?php echo $n; ?>"/>
                
                </td>
            </tr>
            <tr>
                <td>CONTACT PERSON</td>
                <td>
                
                <input class="i" name="ex" required type="text" value="<?php echo $ex; ?>"/>
                
                </td>
            </tr>        
            <tr>
                <td>ADDRESS</td>
                <td>
                
                <input class="i" name="a" required type="text" value="<?php echo $a; ?>"/>
               
                </td>
            </tr>
            <tr>
                <td>CITY</td>
                <td>
                
                <input class="i" name="c" required type="text" value="<?php echo $c; ?>"/>
                
                </td>
            </tr>          
            <tr>
                <td>EMAIL ID</td>
                <td>
                
                <input class="i" name="e" required type="text" value="<?php echo $e; ?>"/>
                
                </td>
            </tr>     
            <tr>
                <td>CONTACT NUMBER</td>
                <td>
                
                <input class="i" name="p" required type="text" value="<?php echo $p; ?>"/>
                
                </td>
            </tr>               
            <tr>
                <td>WHATSAPP NUMBER</td>
                <td>
                
                <input class="i" name="w" required type="text" value="<?php echo $w; ?>"/>
                
                </td>
            </tr>  
            
                
            
            </table>
            
            <button class="reg" > <span> UPDATE </span> </button>  
        </form>
        
      
 </div>


</body>
</html>