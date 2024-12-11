<?php
include("postjob.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JOB POSTING</title>
	<link rel="stylesheet" media="screen,projection" type="text/css" href="jpro.css">

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
      margin-left:-46%;
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
      <li ><a href="cmainpg.html"> Home </a> </li>			
				<li><a class="h" href="post_job.php" target="blank"> Post Jobs </a> </li>
				<li><a  href="apply_can.php" target="blank"> Applied candidate </a> </li>
				<li><a  href="selected.php" target="blank"> Selected candidate </a> </li>
				<li><a  href="rejected.php" target="blank"> Rejected candidate </a> </li>
	 		</ul>
	
	 	</div>
	 	
    <h3>Edit Job Details</h3>
    <?php
            session_start();
            //$Id = $_SESSION['username'];
            $Id=$_GET['p_id'];
            // Establish Connection with Database
            $con = mysqli_connect("localhost", "root", "", "j-o-b");
            // Specify the query to execute
            //$sql = "select * from admin where aid=" . $Id . "";
            $ret="select * from post_job where p_id=?";
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
                
                $t = $row->title;
                $v = $row->vacancy;
                $q = $row->qualification;
                $s = $row->salary;
                $d = $row->Description;
                                
              } 
              $_SESSION['id']=$Id;
              mysqli_close($con);
                ?>
            
           
            
        
        
        <form method="post" action="p_ed.php">
            <table height="350">
            <tr>
                <td>JOB TITLE</td>
                <td>
                
                <input class="i" name="t" readonly type="text" value="<?php echo $t; ?>"/>
                
                </td>
            </tr>
            <tr>
                <td>TOTAL VACANCY</td>
                <td>
                
                <input class="i" name="v" required type="text" value="<?php echo $v; ?>"/>
                
                </td>
            </tr>
            <tr>
                <td>QUALIFICATION</td>
                <td>
                
                <input class="i" name="q" required type="text" value="<?php echo $q; ?>"/>
                
                </td>
            </tr>        
            <tr>
                <td>SALARY</td>
                <td>
                
                <input class="i" name="s" required type="text" value="<?php echo $s; ?>"/>
               
                </td>
            </tr>
            <tr>
                <td>JOB DESCRIPTION</td>
                <td>
                
                <input class="i" name="d" readonly type="text" value="<?php echo $d; ?>"/>
                
                </td>
            </tr>          
             
            </table>
            
            <button class="reg" > <span> UPDATE </span> </button>  
        </form>
        
      
 </div>


</body>
</html>