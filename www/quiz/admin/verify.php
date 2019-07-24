<?php
include ('../conn.php');
 session_start();
$username=$_POST['username'];
$password=$_POST['password'];


if($username=="admin" && $password=="123")
{echo"You are a validated user.";
$_SESSION['uid'] = $username;

 $_SESSION['pwd'] =$password;

    header("Location:profile.php?user=");
    exit();
}
else
    echo"Sorry, your credentials are not valid, Please try again.";
?><a href="index.php">click here to go back</a><?php
  

     ?>	
	
