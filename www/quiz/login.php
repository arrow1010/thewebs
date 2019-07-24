
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login / register material design form</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css'>

      <link rel="stylesheet" href="css/style3.css">
	  
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="icon" href="images/logo2.png" type="image/x-icon" />
   
    <!-- Animate CSS -->
    <link href="vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
	<link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="vendors/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
	<link rel="stylesheet" type="text/css" href="vendors/owl_carousel/owl.carousel.css" media="all">

    <!--Theme Styles CSS-->
	<link rel="stylesheet" type="text/css" href="css/style2.css" media="all" />
	  <style>
	  body
{
	background: #ffab00 ;
}

h5
{
	font-weight: 400;
}

.container
{
	margin-top: 0px;
	width: 600px;
	height: 900px;
}

.tabs .indicator
{
	background-color: #e0f2f1;
	height: 100px;
	opacity: 0.3;
}

.form-container
{
	padding: 40px;
	padding-top: 10px;
}

.confirmation-tabs-btn
{
	position: absolute;
}

.container2{
	float:center;
	width:400px
	
}
	  </style>

  
</head>

<body>
		<p>  <?php 
              if(isset($_GET['error'])){
                 echo '<b style="color:red">Something went wrong ! Please try again... <b>';             
                }
              

            ?></p>
  <div class=" container white z-depth-2 center" align="center">
	<ul class="tabs grey darken-4" >
		<li class="tab col s3" style="height:100px;padding-top:30;padding-bottom:30"><a class="white-text active" href="#login" >login</a></li>
		<li class="tab col s3" style="height:100px;padding-top:30;padding-bottom:30"><a class="white-text" href="#register" >register</a></li>
	</ul>
	<div id="login" class="col s12">
		<form class="col s12" method="post" action="log.php">
			<div class="form-container">
	
				<h3 class="grey-text">Login</h3>
				<div class="row">
					<div class="input-field col s12">
						<input id="email" name="uname" type="email" class="validate">
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password" type="password" name="upass" class="validate">
						<label for="password">Password</label>
					</div>
				</div>
				<br>
				<center>
			
					<button class="btn waves-effect waves-light grey darken-4 wow fadeInUp animated" data-wow-delay="0.3s" type="submit" name="action">Login</button>
				
					<br>
					<br>
					<a href="">Forgotten password?</a>
				</center>
			</div>
		</form>
	</div>
	<div id="register" class="col s12">
		<form class="col s12" method="post" action="reg.php">
			<div class="form-container">
				<h3 class="grey-text">Welcome</h3>
				<div class="row">
					<div class="input-field col  s12">
						<input id="last_name" type="text" name="uname" class="validate">
						<label for="last_name"> Name</label>
					</div>
					<br>
					
				</div>
		
				<div class="row">
					<div class="input-field col s12">
						<input id="email1" type="email" name="uemail" class="validate">
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password1" type="password" name="upass" class="validate">
						<label for="password">Password</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password-confirm" type="password" name="upass" class="validate">
						<label for="password-confirm">Password Confirmation</label>
					</div>
				</div>
				<center>
					<button class="btn waves-effect waves-light grey darken-4 wow fadeInUp animated" data-wow-delay="0.3s" type="submit" name="action">Submit</button>
				</center>
			</div>
		</form>
	</div>
</div>
  
 <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script> 

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  

    <script  src="js/index.js"></script>
<!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!-- jQuery JS -->
    <script src="js/jquery-1.12.0.min.js"></script>
    
    <!-- Animate JS -->
    <script src="vendors/animate/wow.min.js"></script>
    <!-- Camera Slider -->
    <script src="vendors/camera-slider/jquery.easing.1.3.js"></script>
    <script src="vendors/camera-slider/camera.min.js"></script>
    <!-- Isotope JS -->
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <!-- Progress JS -->
    <script src="vendors/Counter-Up/jquery.counterup.min.js"></script>
    <script src="vendors/Counter-Up/waypoints.min.js"></script>
    <!-- Owlcarousel JS -->
    <script src="vendors/owl_carousel/owl.carousel.min.js"></script>
    <!-- Stellar JS -->
    <script src="vendors/stellar/jquery.stellar.js"></script>
    <!-- Theme JS -->
    <script src="js/theme.js"></script>



</body>

</html>
