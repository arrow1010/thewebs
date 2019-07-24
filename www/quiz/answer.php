<html>
<head>
<title>score card</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css'>
     <!-- Animate CSS -->
    <link href="vendors/animate/animate.css" rel="stylesheet">

</head>
<body bgcolor="#F8B81D">

<?php 

require_once('conn.php');
session_start();
$email=$_SESSION['EMAIL'];
$pass=$_SESSION['PASSWORD'];
$subjj=$_SESSION['SUBNAME'];
$st=mysqli_query($con,"select * from question where subject='$subjj'");
$_SESSION['f1']="0%";
$j=1;
$k=1;
$sum=0;
if(!(isset($_POST['ans1']))){
$a1="null" ;
}else{
	$a1=$_POST['ans1'];
}

if(!(isset($_POST['ans2']))){
$a2="null" ;
}else{
	$a2=$_POST['ans2'];
}


if(!(isset($_POST['ans3']))){
$a3="null";
}else{
	$a3=$_POST['ans3'];
}

if(!(isset($_POST['ans4']))){
$a4="null";
}else{
	$a4=$_POST['ans4'];
}

if(!(isset($_POST['ans5']))){
$a5="null";
}else{
	$a5=$_POST['ans5'];
}


if(!(isset($_POST['ans6']))){
$a6="null";
}else{
	$a6=$_POST['ans6'];
}

if(!(isset($_POST['ans7']))){
$a7="null";
}else{
	$a7=$_POST['ans7'];
}

if(!(isset($_POST['ans8']))){
$a8="null";
}else{
	$a8=$_POST['ans8'];
}


if(!(isset($_POST['ans9']))){
$a9="null";
}else{
	$a9=$_POST['ans9'];
}


if(!(isset($_POST['ans10']))){
$a10="null";
}else{
	$a10=$_POST['ans10'];
}





try{
$ans=array(1=>$a1,2=>$a2,3=>$a3,4=>$a4,5=>$a5,6=>$a6,7=>$a7,8=>$a8,9=>$a9,10=>$a10);

}catch(Exception $e){
	
}

while($j<10){
//echo $ans[$j];
$j++;
}

echo "ANSWERS<br>"."<br>";
while($r=mysqli_fetch_assoc($st)){
	if($ans[$k]==$r['ans']){
	  $sum++;
	}
echo $k." ".$r['ans']."<br>";
$k++;

}
$percent=(10*($sum)/100)*100;
function result(){
	global $percent;
	if($percent>=80){
		echo '<i style="color:green" ><b>You are  Excillent </b> </i>';
	}
	elseif($percent>=60)
	   echo '<i style="color:green"><b> Good Performance </b></i>';
	else
		echo '<i style="color:#d50000"><b> Average Performance </b></i><br>&nbsp;'."  "."you need  more prepration";
}

$query2=mysqli_query($con,"update `users` set `marks` = '$percent' where `email`='$email' and `password` = '$pass'");
$_SESSION['cheat']=0;

?>

<h1 style="text-align:center;color:white;">Your Score card</h1>
<div class="container blue  center  wow fadeInUp animated" data-wow-delay="0.5s"  align="center">
<div class="row  green" >
    <div class="col s12 grey">
      <div class="card-panel darken-1 center" style="background-color:black">
        <span class="white-text">
		<center>
     <span style="color:white; font-size:25px;"><?php echo $percent; ?>%</span><br>
    <br><span style="color:#006064 ; font-size:19px;"><b>Correct Answers : </b></span> <span style="color:white; font-size:25px;"><?php echo $sum; ?> Out of 10.</span>
	<br><br><br><span style="color:white; font-size:25px;"><?php result(); ?></span><br><br><br><br>
	<a href="logout.php" style="color:green;font-size:25px;" ><b>click here to log out </b></a>
	</center>
        </span>
      </div>
    </div>
  </div>
  </div>
 <script src='https://code.jquery.com/jquery-2.1.1.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js'></script>
 <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script> 
<!-- Animate JS -->
    <script src="vendors/animate/wow.min.js"></script>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  
  
  
</body>
</html>