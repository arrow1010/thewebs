<?php 

   include '../dbcon.php';
   


   if (isset($_REQUEST['contact'])) {
    
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $name=mysqli_real_escape_string($con,$_POST['name']);
    
    $message=mysqli_real_escape_string($con,$_POST['message']);

     
    
      if ($email==" " || $name==" " || $message==" ") {
      	# code...
      	echo "wrong";
      	return false;
      }else{
          
          $query=mysqli_query($con,"INSERT INTO `contact` (`contact_id`, `name`, `email`, `message`) VALUES (NULL, '$name', '$email', '$message')");
          if($query){
              echo "1";
              exit();
              
          }else{
              echo "0";
              exit();
          }

      	 
         
      }

    }
    
    
    
    
   if (isset($_REQUEST['subscribe'])) {
    
    $name=$_POST['name'];
    $email=mysqli_real_escape_string($con,$_POST['email']);
    
   
     
    
      if ($email=="" || $name=="") {
      	# code...
      	echo "wrong";
      	return false;
      }else{
          
          $query=mysqli_query($con,"INSERT INTO `subscribe` (`subscribe_id`, `name`, `email`) VALUES (NULL, '$name', '$email')");
          if($query){
              echo "1";
              exit();
              
          }else{
              echo "0";
              exit();
          }

      	 
         
      }

    }


?>