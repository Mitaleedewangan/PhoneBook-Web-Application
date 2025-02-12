<?php

$a=$_POST['name'];
$b=$_POST['phnNo'];
$c=$_POST['address'];

$d= "update PhoneBook set name='$a',phnNo='$b',Address='$c'";

$con=mysqli_connect("localhost","root","@mitalee2003","info");

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