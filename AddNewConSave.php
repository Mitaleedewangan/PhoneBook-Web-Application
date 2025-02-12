<?php

$name = $_GET['name'];
$phone = $_GET['phone'];
$address = $_GET['address'];

$con = mysqli_connect("localhost","root","@mitalee2003","info");

$sql = "INSERT INTO PhoneBook VALUES ('$name','$phone','$address')";

$rs = mysqli_query($con,$sql);

if($rs==1)
{
	echo "Success";
}
else
{
	echo "Error";
}



?>

