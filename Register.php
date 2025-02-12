<html>
<body>
<form action="registerSave.php" method="post">
<div class="container">
<h1>Register</h1>
<h4>Username:<input type="text" name="username" placeholder="Enter Username"></h4>
<h4>UserId:<input type="text" name="userid" placeholder="Enter UserId"></h4>
<h4>Password:<input type="password" name="password" placeholder="Enter Password"></h4>

<input type="submit" name="submit" value="Register">
</div>
</form>
</body>
</html>

<style>
body{
    background:linear-gradient(to bottom right,red,rgb(210, 38, 92),rgb(206, 77, 13));
    font-family:Arial, Helvetica, sans-serif;
    margin:0;
    padding:0;
    display:flex;
    justify-content:center;
    height:100vh;
}
.container{
    width:500px;
    height:60%;
    display:flex;
   justify-content:center;
   align-items:center;
   flex-direction:column;
  border:2px solid white;
   border-radius:10px;
  

   margin-top:100px;
   gap:0;
   
}

h1{
    text-align:center;
    color:white;
    font-size:35px;
}
h3{
    text-align:center;
}
input{
    width:300px;
    height:40px;
    padding:10px;
    border-radius:5px;
    font-size:17px;
    margin-left:10px;
    border:none;


}
input[type="submit"]{
    width:150px;
    height:40px;
    padding:10px;
    border-radius:5px;
    font-size:17px;
    margin-left:10px;
    background-color:rgb(0,0,0);
    color:white;
    border:none;
}
</style>