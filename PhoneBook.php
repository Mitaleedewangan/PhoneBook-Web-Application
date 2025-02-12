<html>
<body>
<h1>Phone Book</h1>
<div>
    <a href="Home.php">Home</a>
    <a href="AddNewCon.php">Add New </a>
    <a href="ViewAll.php">View All</a>
   <section class="dropdown">
    <a href=" ">Profile</a>
    <section class="dropdown-content">
      <a href="ChangePassword.php">ChangePassword</a>
      <a href="ViewAll.php">View All</a>
    </section>
   </section>

    <a href="ContactUs.php">Contact Us</a>
</div>

</body> 
</html>
    
<style>
body{
    background:linear-gradient(to bottom right,red,rgb(210, 38, 92),rgb(206, 77, 13));
    color: white;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    margin-top: 100px;
}
div{
    height:70px;
    width: 600px;
    margin: auto;
    padding: 10px;
    display:flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 100px;
    border: 3px solid white;
    border-radius: 50px;
    font-size: 20px;
    font-weight: bold;

}
a{
    text-decoration: none;
    color: white;
}
a:hover{
    color: blue;
    font-size: 20px;
    
}
.dropdown{
    position: relative;
    display: inline-block;
    flex-direction: column;
}
.dropdown-content{
    display: none;
    flex-direction: column;
    position: absolute;
    background-color: orange;
    min-width: 100px;
    min-height: 90px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    padding: 10px 0;
   
}

.dropdown-content a:hover{
    color: blue;
}

.dropdown:hover .dropdown-content{
    display: block;
    display: flex;
    flex-direction: column;
   gap: 20px;
   padding: 10px;
   
}
</style>