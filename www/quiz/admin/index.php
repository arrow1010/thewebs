<?php
include ('../conn.php');

 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>LeText</title>
<!-- Bootstrap -->
<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="../css/materialize.min.css" rel='stylesheet' type='text/css' />
<link href="../css/materialize.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="../css/style2.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!----font-Awesome----->
   	<link rel="stylesheet" href="../fonts/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
<div class="header_bg1">
<div class="container">
	<div class="row header">
		<div class="logo navbar-left"  style="color:black">
			<h1><a href="index.php"><font size="50" style="color:black">LeText</font></a></h1>
			SMS Marketing & Communication
		</div>
		
		<div class="clearfix"></div>
	</div>
	
	<div class="clearfix"></div>
</div>
</div>
<div class="row container">
  <div class="col s12 l6 m6" >
				  	<h2>Admin Panel</h2>
					    <form method="post" action="verify.php">
					    	<div>
						    	<span>Username</span>
						    	<span><input type="text" name="username" class="form-control" id="userName" required></span>
						    </div>
						    <div>
						    	<span>Password</span>
						    	<span><input type="password" name="password" class="form-control" id="inputEmail3" required></span>
						    </div>
						
						  		<button class="btn waves-effect waves-light grey " type="submit" name="action" >Login</button>
					    </form>
				    </div>
</div>

<div class="footer_bg"><!-- start footer -->
	<div class="container">
		<div class="row  footer">
			<div class="copy text-center">
				<p class="link"><span>&#169; All rights reserved </a></span></p>
			</div>
		</div>
	</div>
</div>
</body>
</html>