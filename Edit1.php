

<?php
$con=mysqli_connect("localhost","root","@mitalee2003","info");

$a=$_GET['name'];


$r="select * from PhoneBook where name='$a'";
$rs=mysqli_query($con,$r);
$row=mysqli_fetch_array($rs);


?>

<html>
<body>
    <form action="Edit2.php" method="post">
   Name:<input type="text" name="name" value="<?php echo $row['name'];?>">
   PhnNo:<input type="text" name="phnNo" value="<?php echo $row['phnNo'];?>">
   Address:<input type="text" name="address" value="<?php echo $row['Address'];?>">
  
   <input type="submit" value="Update">
   </form>

</body>
</html>

