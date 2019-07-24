<html>
<head>
</head>

<?php


 session_start();
   if(!(isset($_SESSION['NAME']))){
	   $f1=0;
	   $src=""; 
	   
   }else{
	   $f1=30;
	   $src="face_camera.html"; 
   }
?>
<frameset cols="100% ,<?php echo $f1; ?> ">

<frame src="quiz.php">< /frame>

<frame src="<?php echo $src; ?>"></frame>
</frameset>

</html>
