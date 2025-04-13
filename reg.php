<?php
include "connection.php";
if (isset($_POST['register']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="INSERT INTO `login`(`username`, `email`,`password`) VALUES ('$username','$email','$password')";
    // $conn->close();
   $data=mysqli_query($con,$query);
    echo "<script>alert('Registration success');window.location='userlogin.php';</script>";

}
?>
<?php
include("connection.php");
if(isset($_POST['login']))
{   $username=$_POST['username'];
    $password=$_POST['password'];
    $query="SELECT * FROM `login` WHERE `username`='$username' AND `password`='$password'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['adminloginid']=$_POST['username'];
        header('location:courses.php');
      }
      else { echo "<script>alert('incorrect password or username');</script>";
}}
?>
