<html>
<body>
<form action="login.php" method="post">
<h1>Login</h1><br>

<section id="Login">

</section>

Username: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
<input type="submit" name="submit" value="Login"><br>
<p><a href="Register.php"> Not a member yet?<h2>Register here</h2></a></p>
</form>
</body> 
</html>


<?php
if(isset($_POST['username']))
{
$t1 = $_POST['username'];
$t2 = $_POST['password'];

$sql="SELECT * FROM PhnbookRegister WHERE username='$t1' AND password='$t2'";
$conn=mysqli_connect("localhost","root","@mitalee2003","info");
$result=mysqli_query($conn,$sql);



if(mysqli_num_rows($result)>0){
    header('Location: PhoneBook.php');
    exit();
}
else{
  echo "<script> document.getElementById('Login').innerHTML='<p>Invalid Username or Password</p>';</script>";
}
}
?>



<style>
body{
    background:linear-gradient(to bottom right,red,rgb(210, 38, 92),rgb(206, 77, 13));
    color: white;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
}
h1{
    font-size: 50px;
}
form{
    width: 500px;
    height: 450px;
    margin: auto;
	
	flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 200px;
    border: 2px solid white;

}

input {
    width: 200px;
    height: 30px;
	margin-top: 20px;
}
input:hover{
	border: 2px solid blue;
}
input[type=text] {
    margin-top: 0.2px;
}
input[type=submit] {
    width: 100px;
    height: 35px;
    font-size: 18px;
	margin-top: 25px;
	
}
p{
	margin-top: 25px;
    font-size: 20px;
   
}	

a{
    text-decoration: none;
       color: black;
}
a:hover{
    color: blue;
}

div #Login{
    font-size: 10px;
    color: black;

}
</style>

