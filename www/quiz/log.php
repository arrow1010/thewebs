
<?php
include('conn.php');
$user=$_POST['uname'];
$password=$_POST['upass'];

//$r=mysqli_num_rows($row);
$query1=mysqli_query($con,"select * from users where email='$user' and password='$password' ");
$row=mysqli_fetch_array($query1);


if($row && $row['status'] !=2){
   $query2=mysqli_query($con,"update `users` set `status` = '1' where `email`='$user' and `password` = '$password'");

   $query1=mysqli_query($con,"select * from users where email='$user' and password='$password'");
   
   session_start();
   $_SESSION['NAME']=$row['name'];
   $_SESSION['EMAIL']=$row['email'];
   $_SESSION['PASSWORD']=$row['password'];
    
  echo "<script>window.top.location='index.php'</script>";
}else
 {
     
       echo "thank you for resistration";
        header("location:login.php?error=1");
}
?>
