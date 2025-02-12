<html>
<body>
<div>
<form action="ChangePasswordSave.php" method="GET">
<h1>Change Password</h1><br>
<p id="success"></p>
Old Password:<input type="text" name="oldpassword"><br><br>
New Password:<input type="text" name="newpassword"><br><br>
Confirm Password:<input type="text" name="confirmpassword"><br><br>
<input type="submit" name="update" value="CHANGE">
</form>
</div>
</body>
</html>

<style>
body{
    background:linear-gradient(to bottom right,red,rgb(210, 38, 92),rgb(206, 77, 13)) ;
    color: white;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
}
div{
    height:400px;
    width: 500px;
    margin: auto;
    display:flex;
    justify-content: center;
    align-items: center;
    margin-top: 200px;
    border: 2px solid white;

}
input {
    width: 200px;
    height: 30px;
}
input[type=submit] {
    width: 100px;
    height: 30px;
    font-size: 18px;
}
</style>