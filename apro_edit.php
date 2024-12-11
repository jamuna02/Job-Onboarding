<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EDIT ADMIN PROFILE</title>
	<link rel="stylesheet" media="screen,projection" type="text/css" href="apro.css">

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
      margin-left:-43%;
      font-family: Gabriola;
     font-size: 40px;
     font-weight: bolder;
     color: #056E66;
    }
 table{
     
     text-align:center;
     font-family: Gabriola;
     font-size: 24px;
     font-weight: bolder;
     padding: 2.5%;
     
     
     margin-top: 35%;
     margin-bottom: 3%;
     margin-left: -80%;
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
	margin-left: -120%;
	width: 25%;
	border: #056E66 5px solid;
	background-color: #056E66;
	color:ghostwhite;
	font-family: Gabriola;
	font-size: 26px;
	font-weight: bolder;
	border-radius: 25px;
	margin-bottom: 7%;
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
       
        </div>
        <h3>Edit User</h3>
 
    
    
        <?php
            
            $Id = $_GET['uname'];
            // Establish Connection with Database
            $con = mysqli_connect("localhost", "root", "", "j-o-b");
            // Specify the query to execute
            //$sql = "select * from admin where aid=" . $Id . "";
            $ret="select * from admin where uname=?";
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
                
                
                $id = $row->aid;
                $n = $row->uname;
                $p = $row->pass;
              } 
              mysqli_close($con);
                ?>
            
           
            
        
        
        <form method="post" action="apro_ed.php">
            <table height="350">
            <tr>
                <td>ADMIN ID</td>
                <td>
                
                <input class="i" name="id" readonly type="text" value="<?php echo $id; ?>"/>
                
                </td>
            </tr>
            <tr>
                <td>USERNAME</td>
                <td>
                
                <input class="i" name="n" required type="text" value="<?php echo $n; ?>"/>
               
                </td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td>
                
                <input class="i" name="p" required type="password" value="<?php echo $p; ?>"/>
                
                </td>
            </tr>          
                       
             
                
            
            </table>
            
            <button class="reg"> <span> UPDATE </span> </button>  
        </form>
        
       
   </div> 

</body>
</html>









 <!--</tr>
                <tr>
                <td height="36"><span class="style8">UserName</span></td>
                <td><span id="sprytextfield2">
                <label>
                <input name="txtUserName" type="text" id="txtUserName" value=""/>
                </label>
                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
            
              </tr>
            <tr>
                <td height="36"><span class="style8">Password</span></td>
                <td><span id="sprytextfield3">
                <label>
                    <input name="txtPass" type="password" id="txtPass" value=""/>
                </label>
                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                
                
              </tr>
                
            -->