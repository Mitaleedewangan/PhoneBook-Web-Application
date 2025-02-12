 <html>
 <body>
 <form action="delete1.php">
 Name:<select name="name">
 <?php
 $a= "select name from PhoneBook";
 $con=mysqli_connect("localhost","root","@mitalee2003","info");
 $rs=mysqli_query($con,$a);
 while($row=mysqli_fetch_array($rs))
 {
 echo"<option value='$row[name]'>$row[name]</option>";
 }
 ?>
 </select>
   
 <input type="submit" value="Delete">
  </form>
  
 </body>
 </html>    
 