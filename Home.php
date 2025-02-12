<html>
<body>
<div>
<h1>Phone Book</h1>
<div class="container">
<h2>Total user in Your Account</h2>

<?php

 $a= "select count(*) from PhoneBook";
 $con=mysqli_connect("localhost","root","@mitalee2003","info");
 $rs=mysqli_query($con,$a);
 $row=mysqli_fetch_array($rs);

 echo "<h2>{$row[0]}</h2>";
 ?>
</div>

</div>
</body>
</html>

<style>
body{
    background: linear-gradient(to bottom right,red,rgb(210, 38, 92),rgb(206, 77, 13));
    color: white;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    margin-top: 100px;
}
.container{
    height:200px;
    width: 500px;
    margin: auto;
    display:flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 100px;
    border: 2px solid white;
    border-radius: 50%;

}
h1{
    margin-top: 150px;
}

</style>