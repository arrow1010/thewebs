<?php
include('../conn.php');

$email=$_POST['email'];
$password=$_POST['pass'];
$query2=mysqli_query($con,"update `users` set `status` = 0 where `email`='$email' and `password` = '$password' ");
    if(isset($query2)){
       //echo "thank you for resistration";
        header("location:profile.php?resister=1");
    }
    else{
      echo "sorry!! unblock process faild";
   }




?>
