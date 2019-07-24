<html>
<head><title>resistration form</title>
  <style>
    table{
     font-size:20px; 
     padding:50px;
   }
  </style>
</head>
<body>
  <form action="reg.php" method="post">
     <?php
      if(isset($_GET['resister'])){
                 echo '<h1 style="color:green">thank you for resitration <h1>';
                 echo '<h1 style="color:green">please login <h1>';
                    header("refresh:2; url=login.php");             
                } 
      ?>
    <table>
     <tr >
       <td colspan="2"><h1> Resistration Form</h1></td>
            
     </tr>
     <tr >
       <td colspan="2">

            <?php 
              if(isset($_GET['error'])){
                 echo '<b style="color:red">user name or email already exist<b>';             
                }
              

            ?>
       </td>
            
     </tr>
	 <tr>
		<td>  name</td>
	    <td><input type="text" name="uname" placeholder="enter the username" required></td>
	 </tr>
	 <tr>
		<td>  email</td>
	    <td><input type="email" name="uemail" placeholder="enter the username" required></td>
      </tr>
	  <tr>
		<td> password </td>
	    <td><input type="password" name="upass" required></td>
      </tr>
	  <tr>
		<td>confirm </td>
	    <td><input type="password" name="upass" required></td>
      </tr>
	  <tr>
		<td> </td>
	    <td><input type="reset"><input type="submit"></td>
      </tr>
	</table>
   
  </form>
</body>

</html>