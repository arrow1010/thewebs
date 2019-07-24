<?php
include('../conn.php');

$email=$_POST['email'];
$password=$_POST['pass'];
$query2=mysqli_query($con,"update `users` set `marks` = 0 ");
    if(isset($query2)){
       //echo "thank you for resistration";
        header("location:profile.php?resister=1");
    }
    else{
      echo "sorry!! reset process faild";
   }




?>
