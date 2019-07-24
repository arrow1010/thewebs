<html>
<head><title>login</title>
	   <!--Import Google Icon Font-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <style>
    table{

     font-size:20px; 
     padding:50px;
   }
  </style>
</head>
<body class="blue-grey darken-1">
  
  <div class="container">   
   <div class="row">
    <div class="col s12 m5">
      <div class="card-panel teal center">
        <span class="white-text"><form action="log.php" method="post">

            <?php 
              if(isset($_GET['error'])){
                 echo '<b style="color:red">you are not resister please resister <b>';             
                }
              

            ?>
			  <h1> Login</h1>
            
     
		 username
	    <input type="text" name="uname" placeholder="enter the username" required>
		
		 password 
	    <input type="password" name="upass" placeholder="enter the password" required>
     
	    <input type="submit" value="login" class="btn waves-effect yellow darken-3" style="padding-top:10px"> <a href="resistration.php" class="white-text">new resistration</a>
     
      </form>
        </span>
      </div>
    </div>
  </div>
 </div>
      
 
  <!--JavaScript at end of body for optimized loading-->
 <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script> 

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>