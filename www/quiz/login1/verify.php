<?php
include('connection.php');
 session_start();
$id1=$_POST['number'];
$password1=$_POST['password'];
$password2=$_POST['password-confirm'];

 





$result = mysqli_query($con,"SELECT idnumber, password,uid FROM accounts WHERE idnumber = $id1");

$row = mysqli_fetch_array($result);

if($row["idnumber"]==$id1 && $row["password"]==$password1)
{echo"You are a validated user.";
$_SESSION['uid'] = $row['uid'];
 $result = $id1;
 $_SESSION['username'] = $id1;

    header("Location:user.php?user=".$user);
    exit();
}
else
    echo"Sorry, your credentials are not valid, Please try again.";
?><a href="index.php">click here to go back</a><?php
  

     ?>
	 
	 
	 
	 
	 

