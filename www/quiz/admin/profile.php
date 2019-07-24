<?php
include ('../conn.php');
 session_start();
if(empty($_SESSION['uid']))
{
  header("Location:index.php");
}
else
{
$count=mysqli_query($con,"SELECT * FROM contact_msg where order by date desc ");

?>
<html>
<head>
<title>SOM ADMIN</title>
 <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	   <link type="text/css" rel="stylesheet" href="../css/transition2.css"  media="screen,projection"/>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!----font-Awesome----->
   	<link rel="stylesheet" href="../fonts/css/font-awesome.min.css">
<!----font-Awesome----->
	  <style>
	  
	  .container1 {
    position: relative;
}

/* Bottom right text */
.text-block {
    position: absolute;
    bottom: 20px;
    right: 20px;
	
    background-color: ;
    color: white;
    padding-left: 20px;
    padding-right: 20px;
}
	  
	  /* Set height of body and the document to 100% to enable "full page tabs" */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: ;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: black;
  display: none;
  padding: ;
  height: 100%;
}

#Home {background-color: grey;}
#Messages {background-color: grey;}


 body{
                   background-repeat:no-repeat;

                   background-size:cover;
            }
            
            hh {
  -webkit-text-stroke: 1px black;
   color: white;
   text-shadow:
       3px 3px 0 #000,
     -1px -1px 0 #000,  
      1px -1px 0 #000,
      -1px 1px 0 #000,
       1px 1px 0 #000;
}

	  </style>
</head>
<body background="../images/wb.png">
<div class="container1">
  <img src="../images/wb.png"  style="width:100%;height:23%;">
  <div class="text-block" style="color:black"> 
    <b></b><h4 class="hh">S .O .M</h4>
    <p class="hh">Admin Panel</p></b>
  </div>
</div>
<div class="col l6 s6"><a href="logout.php" class="btn grey right">Logout</a><br></div>
<br><br>
<button class="tablink" onclick="openPage('home', this, 'black')" style="padding-right:10px;width:100%">BLOCKED STUDENTS</button><br><br><br>

<button class="tablink" onclick="openPage('Messages', this, 'black')" style="padding-right:10px;width:100%">STUDENTS MARKS</button>
<div class="tabcontent wrapper" id="home" style="width:100%;height:800px">
   <div class="row"><div class="col s6 l6 " > <h3 class="flow-text">Blocked Students</h3></div></div>
     <?php
	  $result=mysqli_query($con,"SELECT * FROM users where `status`=2");
	  while($row = mysqli_fetch_array($result))
	  {
		  if(!($row['name'])){
			  
			  break;
		  }
		?><div class="z-depth-5 " style="border:solid;border-width:2px;border-radius:2%;border-color:black;background-color:red;color:white"><?php
		 echo "<b>";
		 echo "NAME:         ";
		 echo "</b>"; 
		 echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";
         echo $row['name'];
		 echo "</br>";
		 echo "<b>";
		 echo "EMAIL:         ";
		 echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";
		 echo "</b>";
         echo $row['email'];
		 echo "</br>";
		 echo "<b>";
		 echo "MARKS:           		";
		 echo "</b>";
		 echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";
		 echo $row['marks'];
		 echo "</br>";
		 
		?>
		<form method="post" action="unblock.php">
	<input type="hidden" name="email" value="<?php echo $row['email']; ?>">
    <input type="hidden" name="pass"   value="<?php echo $row['password']; ?>">
    <input class="btn waves-effect right red white-text " type="submit" value="Unblock" style="padding-top:10px">
</form>
</div>
		<?php  
		echo "</br>";
		
	  }
    ?>
</div>


<div id="Messages" class="tabcontent grey lighten-3">
 <div class="row"><div class="col s6 l6 " > <h3 class="flow-text">Students</h3></div>		<form method="post" action="reset.php">
    <input class="btn waves-effect right grey white-text " type="submit" value="Reset Marks" style="padding-top:10px">
</form></div>
     <?php
	   $result=mysqli_query($con,"SELECT * FROM users");
	  while($row = mysqli_fetch_array($result))
	  {
		  if(!($row['name'])){
			  
			  break;
		  }
		?><div class="z-depth-5 " style="border:solid;border-width:2px;border-radius:2%;border-color:black;background-color:grey;color:white"><?php
		 echo "<b>";
		 echo "NAME:         ";
		 echo "</b>"; 
		 echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";
         echo $row['name'];
		 echo "</br>";
		 echo "<b>";
		 echo "EMAIL:         ";
		 echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";
		 echo "</b>";
         echo $row['email'];
		 echo "</br>";
		 echo "<b>";
		 echo "MARKS:           		";
		 echo "</b>";
		 echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";
		 echo $row['marks'];
		 echo "</br>";
		 
		?></div>  
		
		<?php  
		echo "</br>";
		
	  }
    ?>
    
    
</div>




 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>

<script>
function openPage(pageName, elmnt, color) {
    // Hide all elements with class="tabcontent" by default */
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove the background color of all tablinks/buttons
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }

    // Show the specific tab content
    document.getElementById(pageName).style.display = "block";

    // Add the specific color to the button used to open the tab content
    elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


  $('#textarea1').val('New Text');
  M.textareaAutoResize($('#textarea1'));
  
    $(document).ready(function() {
    $('input#input_text, textarea#textarea2').characterCounter();
  });
      
        
</script>
</body>
</html>

<?php } 
?>