<?php
$username=$_POST['username'];
$userid=$_POST['userid'];
$password=$_POST['password'];
$sql="INSERT INTO PhnbookRegister(username,userid,password) VALUES('$username','$userid','$password')";
$conn=mysqli_connect("localhost","root","@mitalee2003","info");
$result=mysqli_query($conn,$sql);
if($result){
    echo "Successfully Registered";
}
else{
    echo "Error";
}
?>