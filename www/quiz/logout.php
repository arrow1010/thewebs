<?php
include('conn.php');
session_start();
$email=$_SESSION['EMAIL'];
$pass=$_SESSION['PASSWORD'];
if($_SESSION['cheat']==2){
	$query2=mysqli_query($con,"update `users` set `status` = '2' where `email` = '$email' and `password` = '$pass' ");
}else{
$query2=mysqli_query($con,"update `users` set `status` = '0' where `email` = '$email' and `password` = '$pass' ");
}
session_destroy();
header("location:index.php");

?>