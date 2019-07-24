<?php
$con = mysqli_connect("ftp.thewebs.in","thewebsi_admin","adi0618337@","thewebsi_thewebs");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>