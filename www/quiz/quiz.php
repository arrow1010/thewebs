<html>
<head>
<title>Quiz</title>
   <!--Import Google Icon Font-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	   
<!--	  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>-->
 
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  
  <script src="../build/tracking-min.js"></script>
  <script src="../build/data/face-min.js"></script>
   <script src="../node_modules/dat.gui/build/dat.gui.min.js"></script>
 <!-- <script src="assets/stats.min.js"></script> -->
<style>
ol li{
	margin-top:25px;
	font-size:19px;
	margin-left:100px;
}

  video, canvas {
    margin-left: 230px;
    margin-top: 120px;
    position: absolute;
  }
  
  .container{
	  width:90%;
  }
  
.myButton {
	-moz-box-shadow:inset 0px 1px 0px 0px #fce2c1;
	-webkit-box-shadow:inset 0px 1px 0px 0px #fce2c1;
	box-shadow:inset 0px 1px 0px 0px #fce2c1;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffc477), color-stop(1, #fb9e25));
	background:-moz-linear-gradient(top, #ffc477 5%, #fb9e25 100%);
	background:-webkit-linear-gradient(top, #ffc477 5%, #fb9e25 100%);
	background:-o-linear-gradient(top, #ffc477 5%, #fb9e25 100%);
	background:-ms-linear-gradient(top, #ffc477 5%, #fb9e25 100%);
	background:linear-gradient(to bottom, #ffc477 5%, #fb9e25 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffc477', endColorstr='#fb9e25',GradientType=0);
	background-color:#333333;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #eeb44f;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #cc9f52;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fb9e25), color-stop(1, #ffc477));
	background:-moz-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
	background:-webkit-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
	background:-o-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
	background:-ms-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
	background:linear-gradient(to bottom, #fb9e25 5%, #ffc477 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fb9e25', endColorstr='#ffc477',GradientType=0);
	background-color:#fb9e25;
}
.myButton:active {
	position:relative;
	top:1px;
}

.ScrollStyle
{
    height: 500px;
    overflow-y: scroll;
	width:80%;
}

.head{
    background-image: url('images/pns8.png');
  
    background-repeat: no-repeat;
    background-size: auto;
	height:;
	
}

</style>

</head>
<body bgcolor="">
 <div class="container " style="background-color:">
  <div class="demo-frame row head" style="">
    
 <div class="col l12 s12 grey right" ><form>
<?php
session_start(); 

if(isset($_SESSION['NAME'])){
  echo '<h1 style="color:teal" class="right">welcome <br>'.$_SESSION['NAME'].'</h1>';?>
  <input type="hidden" value="<?php echo $_SESSION['NAME']; ?>" id="uname">
  </div></form>
      <div class="demo-container col l6 s12" style="padding-left:64%">
      <video id="video" width="400" height="300" preload autoplay loop muted></video>
      <canvas id="canvas" width="400" height="300"></canvas>
    
<div style="float:right;" class="myButton"><p id="demo"></p> </div>
</div>
 </div>
 <div class="row">
 <div class="col s12 l12">
<?php
require_once('conn.php');

$subj=$_POST['sub'];
$st=mysqli_query($con,"select * from question where subject='$subj'");
$_SESSION['SUBNAME']=$subj;
$_SESSION['cheat']=0;


?>
<h1 style="color:orange; text-align:center;"><?php 
echo $subj." "."QUIZ";
 ?>
 </h1>
 <b><p id="demo" style="color:red">
 </p>
</b>
<form method="post" action="answer.php" name="quiz">
<div class="ScrollStyle">
<ol>

<?php
$i=1;
while($r=mysqli_fetch_assoc($st)){
	?>
	<li>
	<?php
	echo $r['ques']."<br>";
	?>
	A<input type="radio" class="with-gap" name="ans<?php echo $i;?>" value="<?php echo $r['oa'];?>"><?php echo $r['oa'];?><br>
	B<input type="radio" class="with-gap" name="ans<?php echo $i;?>" value="<?php echo $r['ob'];?>"><?php echo $r['ob'];?><br>
	C<input type="radio" class="with-gap" name="ans<?php echo $i;?>" value="<?php echo $r['oc'];?>"><?php echo $r['oc'];?><br>
	D<input type="radio" class="with-gap" name="ans<?php echo $i;?>" value="<?php echo $r['od'];?>"><?php echo $r['od'];?><br>
	
</li>
<?php
$i++;

}

?>

</ol><br>
<br>
<input type="submit" align="center" style="font-size:25px;margin-left:200px;background-color:#F8B81D" class="myButton" id="b1" onclick="submitFormOkay = true;">
</form>
</div>
<?php
}
else{
header("location:login.php");

}?>

<script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script> 

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
 
  var  count=0;
window.top.onblur = function() { 
count++;
//alert("dont change the window");
if(count<2){
  swal({
  title: "Warning for changing windows",
  text: "You may be debarred from the examination 1",
  icon: "warning",
//var name=document.getElementById("namec").value();
  				//	 
	
  //button: "Aww yiss!",
  //buttonColor:#fff,
});

  
}
if(count>=3){
	//alert("You are debard from examination");
	
	  swal({
  title: "Irrelevant Activity Performed",
  text: "you are debarred from the examination 2",
  icon: "error",
  button: "sorry!",
 
});
	// send();
	<?php $_SESSION['cheat']=2; ?>
     window.location = 'logout.php'; 
     
	
}
 }

 
 
 
 function send(){
	var name = document.getElementById("uname").value;
	var mail="avisingh4532@gmail.com";
	var mssg=  "Student Named :"+name+" is performing irrevelent activities";
	$.post('email.php?action=Aditya',{ml:mail,mesg:mssg},function(e){
    
	});
	
}


  </script>
  <script>
  function dontcheat(){
	  swal({
     title: "Irrelevant Action Detected",
     text: "You may be debarred from the examination",
     icon: "error",

});
  }
  
   window.onload = function() {
      var video = document.getElementById('video');
      var canvas = document.getElementById('canvas');
      var context = canvas.getContext('2d');

      var tracker = new tracking.ObjectTracker('face');
      tracker.setInitialScale(4);
      tracker.setStepSize(2);
      tracker.setEdgesDensity(0.1);

      tracking.track('#video', tracker, { camera: true });

      tracker.on('track', function(event) { 
	  var ct2=0;
	 if (event.data.length === 0) {
		
		 
 } else
      {  context.clearRect(0, 0, canvas.width, canvas.height);
       
        event.data.forEach(function(rect) {
         context.strokeStyle = '#a64ceb';
          context.strokeRect(rect.x, rect.y, rect.width, rect.height);
          context.font = '11px Helvetica';
          context.fillStyle = "#fff";
          context.fillText('x: ' + rect.x + 'px', rect.x + (rect.width) + 5, rect.y + 11);
          context.fillText('y: ' + rect.y + 'px', rect.x + (rect.width) + 5, rect.y + 22);
		  var a =rect.x+40;
		  
		
	      if(a>=250 || a<=90){
			 count++;
			 dontcheat();
		 
		 }
	  });}
      });

      var gui = new dat.GUI();
      gui.add(tracker, 'edgesDensity', 0.1, 0.5).step(0.01);
      gui.add(tracker, 'initialScale', 1.0, 10.0).step(0.1);
      gui.add(tracker, 'stepSize', 1, 5).step(0.1);
    };
  </script>
<script >
var submitFormOkay = false;
$(window).bind('beforeunload', function(e) {
   if (submitFormOkay==false) {
	 //  send();
	 dontcheat();
    if (confirm) {
		 dontcheat();
        return;
   }}
});
window.onresize = function(event) {
   dontcheat();
};
</script>
<script> 
var deadline = new Date().getTime()+5*60000; 
var x = setInterval(function() { 
var now = new Date().getTime();
//var deadline = new Date(now + 5*60000);
var t = (deadline) - now ; 
var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
var seconds = Math.floor((t % (1000 * 60)) / 1000); 
document.getElementById("demo").innerHTML = "TIME LEFT : "+ days + "d "  
+ hours + "h " + minutes + "m " + seconds + "s "; 
    if (t < 0) { 
        clearInterval(x); 
        document.getElementById("demo").innerHTML = "TIME UP";
		submitFormOkay = true;
			
		document.forms['quiz'].submit(true).click();
    } 
}, 1000); 
</script> 


</body>
</html>