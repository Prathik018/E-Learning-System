<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login Panel</title>
<link rel="stylesheet" href="css/adminlogin.css">
<a class="navbar-brand" href="../index.php"><img src="images/home.png" alt="calligraphy-fonts" border="0"
          style="max-width: 100px; padding-left: 7px;"></a>
<style>
    body
    {
    background-image:url(images/bg.jpg);
    background-repeat:no-repeat;
    background-size: cover;
    
    }
</style>
</head>
<body>
  <div class="container">
    <div class="myform">
      <form method="post" name="login">
        <h2>ADMIN LOGIN</h2>
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" name="login">LOGIN</button>
      </form>
    </div>
    <div class="image">
      <img src="images/admin.png">
    </div>
  </div>
</body>
</html>
<?php
include("connection.php");
if(isset($_POST['login']))
{   $username=$_POST['username'];
    $password=$_POST['password'];
    $query="SELECT * FROM `adminlogin` WHERE `username`='$username' AND `password`='$password'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['adminloginid']=$_POST['username'];
        header('location:admin_main.php');
      }
      else { echo "<script>alert('incorrect password or username');</script>";
}}
?>
