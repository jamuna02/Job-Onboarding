<?php
session_start();

$n=$_POST['n'];
$p=$_POST['p'];
$p1=$_POST['p1'];
if($p==$p1)
{
$con = mysqli_connect("localhost","root","","j-o-b");
//mysqli_select_db("job", $con);
$sql = "select * from signin  where sname='".$n."' ";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
echo $records;
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong Username");window.location=\'Forget.html\';</script>';
}
else
{
    $s="UPDATE `signin` SET `spassword`='$p1' WHERE `sname`='$n'";
    $r = mysqli_query($con,$s);
    echo '<script type="text/javascript">alert("Password Has Been Set Successfully");window.location=\'login.html\';</script>';
    }
    mysqli_close($con);
}
?>