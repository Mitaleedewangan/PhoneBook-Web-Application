<?php

$oldpassword = $_GET['oldpassword'];
$newpassword = $_GET['newpassword'];
$confirmpassword = $_GET['confirmpassword'];

$con = mysqli_connect("localhost","root","@mitalee2003","info");

$sql = "SELECT * FROM PhnbookRegister WHERE password='$oldpassword'";
$result=mysqli_query($con,$sql);

//if the query returned any rows.  this means that at least one record in the database matches.

if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_array($result);
    $username=$row[0];
    $password=$row[1];
}
else{
    echo"Invalid Password";
    exit();
}

if($newpassword==$confirmpassword){
    $sql="UPDATE PhnbookRegister SET password='$newpassword' WHERE username='$username'";

    $rs=mysqli_query($con,$sql);

    if($rs)
    {
        echo"Success";
    }
    else
    {
        echo"Failure";
    }
}
else{
    echo"Passwords do not match";
}
?>