<html>
 <body>

<?php
 $a= "select  * from PhoneBook";
 $con=mysqli_connect("localhost","root","@mitalee2003","info");
 $rs=mysqli_query($con,$a);

 while($row=mysqli_fetch_array($rs))
 {
    echo"<table border='1'>";
    echo"<tr>
    <td>{$row[0]}</td>
    <td>{$row[1]}</td>
    <td>{$row[2]}</td>
    <td><a href='Edit1.php?name={$row['name']}&phone={$row['phnNo']}&address={$row['Address']}'>Edit</a></td>
   
   
    </tr> ";
   echo" </table>";
    
 }
 ?>
 </body>
 </html>