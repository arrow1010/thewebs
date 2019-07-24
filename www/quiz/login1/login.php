
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

      <link rel="stylesheet" href="css/style.css">
	  <style>
	  body
{
	background: #f5f5f5;
}

h5
{
	font-weight: 400;
}

.container
{
	margin-top: 80px;
	width: 400px;
	height: 700px;
}

.tabs .indicator
{
	background-color: #e0f2f1;
	height: 60px;
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
	  </style>

  
</head>

<body>

  <div class="container white z-depth-2 hide-on-med-and-down">
	<ul class="tabs purple lighten-2">
		<li class="tab col s3"><a class="white-text active" href="#login">login</a></li>
		<li class="tab col s3"><a class="white-text" href="#register">register</a></li>
	</ul>
	<div id="login" class="col s12">
		<form class="col s12" method="post" action="verify.php">
			<div class="form-container">
				<h3 class="purple-text">Hello</h3>
				<div class="row">
					<div class="input-field col s12">
						<input id="email" type="email" class="validate">
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password" type="password" class="validate">
						<label for="password">Password</label>
					</div>
				</div>
				<br>
				<center>
					<button class="btn waves-effect waves-light purple" type="submit" name="action">Login</button>
					<br>
					<br>
					<a href="">Forgotten password?</a>
				</center>
			</div>
		</form>
	</div>
	<div id="register" class="col s12">
		<form class="col s12" method="post" action="verify.php">
			<div class="form-container">
				<h3 class="purple-text">Welcome</h3>
				<div class="row">
					<div class="input-field col l6 s6">
						<input id="last_name" type="text" class="validate">
						<label for="last_name">First Name</label>
					</div>
					<div class="input-field col l6 s6">
						<input id="last_name" type="text" class="validate">
						<label for="last_name">Last Name</label>
					</div>
					<br>
					
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="number" type="number" class="validate">
						<label for="number">Contact Number</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="email" type="email" class="validate">
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password" type="password" class="validate">
						<label for="password">Password</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password-confirm" type="password" class="validate">
						<label for="password-confirm">Password Confirmation</label>
					</div>
				</div>
				<center>
					<button class="btn waves-effect waves-light purple" type="submit" name="action">Submit</button>
				</center>
			</div>
		</form>
	</div>
</div>
  <script src='https://code.jquery.com/jquery-2.1.1.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js'></script>
 <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script> 

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  

    <script  src="js/index.js"></script>




</body>

</html>
