<html>
 <body>
<h1>Phone Book</h1>
<?php
 $a= "select  * from PhoneBook";
 $con=mysqli_connect("localhost","root","@mitalee2003","info");
 $rs=mysqli_query($con,$a);


 echo"<table>";
  echo "<tr>
   <td>Name</td>
   <td>Phone</td>
   <td>Address</td>
   <td>Action</td>
   </tr>";
   echo "</table>";

 while($row=mysqli_fetch_array($rs))
 {
 
    echo"<table border='1'>";
   
    echo"<tr>
   
    <td>{$row[0]}</td>
    <td>{$row[1]}</td>
    <td>{$row[2]}</td>
     <td><a href='delete.php'>Delete</a></td>
     <td><a href='Edit.php'>Edit</a></td>
    
    </tr> ";
   
   echo" </table>";
   
   
 }
 ?>
 </body>
 </html>

 <style>
 body{
  display: flex;
  justify-content: center;
  
 flex-direction: column;
 
  margin-top: 50px;
    background: linear-gradient(to bottom right,red,rgb(210, 38, 92),rgb(206, 77, 13));
    color: white;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
}
table{
  width: 500px;
	height: 60px;
	margin: auto;
	border: 2px solid white;
}
td{
	width: 200px;
	height: 10px;
}

a{
    text-decoration: none;
    color: white;
}
</style>