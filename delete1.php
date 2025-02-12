<?php
$a=$_GET['name'];

$con=mysqli_connect("localhost","root","@mitalee2003","info");
$d="delete from PhoneBook where name='$a'";
$rs=mysqli_query($con,$d);

if($rs)
{
echo"Success";
}
else
{
echo"Failure";
}
    
?>
