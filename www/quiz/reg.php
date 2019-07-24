<?php
include('conn.php');
$user=$_POST['uname'];
$email=$_POST['uemail'];
$password=$_POST['upass'];

//$r=mysqli_num_rows($row);
$query1=mysqli_query($con,"select * from users where name='$user' or email='$email'");
$row=mysqli_fetch_array($query1);
if($row){
  //echo "user already exists ";
   header("location:login.php?error=1");
}else
 {
    $query2=mysqli_query($con,"insert into users values('$user','$email','$password',0,0)");
    if(isset($query2)){
       //echo "thank you for resistration";
        header("location:login.php?resister=1");
    }
    else{
      echo "resistration faild";
   }
}



?>
