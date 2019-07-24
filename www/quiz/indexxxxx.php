<html>
<head>
<title>quiz</title>
	   <!--Import Google Icon Font-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<div class="container ">
<div class="row center">
<div class="col s12 l12 flow-text blue">
<h3>Welcome to 'Test Your knowledge'</h3>
<p>Hello friends , in my website you can check the performance of your examination prepration .</p>
</div>
<div class="col s12 l6 flow-text ">
<?php
session_start(); 
if(isset($_SESSION['NAME'])){
  echo '<h4 style="color:teal">welcome <br>'.$_SESSION['NAME'].'</h4>';
  ?>
  </div>
  <div class="col s12 l6 flow-text ">
<a href="logout.php" style="float:center;font-size:30px;">logout</a>
<?php
}
else{
?>
<a href="login.php" style="float:center;font-size:30px;">login</a>
<?php

}

?>
</div>
</div>

<div class="row">
<div class="col s12 l12 center ">
<h4 style="color:blue; font-size:25px;"> select the subject and 'test your knowledge'</h4>
</div>

<div class="col s12 l12 center " style="float:center;padding-top:200px">
<form method="post" action="quiz.php" >
<div class="input-field" style="padding-top:200px">
<select name="sub" style="font-size:30px;" class="center"  >
<br><br>
  <option>select subject</option>
  <option value="DAA">DAA</option>
  <option value="DBMS">DBMS</option>
</select>
</div><br><br>
<input type="submit" style="font-size:30px;" class="btn waves-effect">
</form>
</div>
</div>
</div>
<!--JavaScript at end of body for optimized loading-->
 <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script> 

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
	$(document).ready(function(){
		$('select').material_select();
	})
  </script>
</body>


</html>
