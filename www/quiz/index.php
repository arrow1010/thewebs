<?php 
require_once('conn.php');
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Safe Exam</title>
	
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="icon" href="images/logo2.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
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

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
	<style>
	.select-style {
    border: 1px solid #ccc;
    width: 240px;
    border-radius: 3px;
    overflow: hidden;
    background: #fafafa url("img/icon-select.png") no-repeat 90% 50%;
	margin-left:20px;
}

.select-style select {
    padding: 5px 8px;
    width: 130%;
    border: none;
    box-shadow: none;
    background: transparent;
    background-image: none;
    -webkit-appearance: none;
}

.select-style select:focus {
    outline: none;
}
	</style>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader"></div>

	

	
    <!-- Slider area -->
    <section class="slider_area row m0">
        <div class="slider_inner">
            <div data-thumb="images/slider-1.jpg" data-src="images/background1.jpg">
                <div class="camera_caption">
                   <div class="container">
                        <h2 class=" wow fadeInUp animated"><b>EDUCATION IS</b></h2>
                        <h1 class=" wow fadeInUp animated" data-wow-delay="0.5s"> THE KEY TO YOUR SUCCESS</h1>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.8s">Smart OLT Module Provides You Right Environment To Get The Guidance You Want. The Attention You Deserve</p>
						
                         <?php

try{
	

}catch(Exception $e){}
if(isset($_SESSION['NAME'])){
  echo '<h4 style="color:#ffab00">welcome <br>'.$_SESSION['NAME'].'</h4><br>';
  ?>
  
<a class=" wow fadeInUp animated" data-wow-delay="1s" href="logout.php" style="float:center;font-size:px;">logout</a>
<?php
}
else{
?>
<a class=" wow fadeInUp animated" data-wow-delay="1s" href="login.php" style="float:center;font-size:px;">login</a>
<?php

}

?>
                   </div>
                </div>
            </div>
            <div data-thumb="images/slider-2.jpg" data-src="images/background1.jpg">
                <div class="camera_caption">
                   <div class="container">
                        <h2 class=" wow fadeInUp animated"><b>Start Learn Test</b></h2>
                        <h1 class=" wow fadeInUp animated" data-wow-delay="0.5s">Brush up your knowledge by taking online test</h1>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.8s">Try Our Smart AI invigilator</p>
                                                <?php

try{
	

}catch(Exception $e){}
if(isset($_SESSION['NAME'])){
  echo '<h4 style="color:#ffab00">welcome <br>'.$_SESSION['NAME'].'</h4><br>';
  ?>
  
<a class=" wow fadeInUp animated" data-wow-delay="1s" href="logout.php" style="float:center;font-size:px;">logout</a>
<?php
}
else{
?>
<a class=" wow fadeInUp animated" data-wow-delay="1s" href="login.php" style="float:center;font-size:px;">login</a>
<?php

}

?>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Slider area -->

    <!-- Professional Builde -->
    <section class="professional_builder row">
        <div class="container">
           <div class="row builder_all">
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fas fa-user" aria-hidden="true"></i>
                    <h4>Professional Mentors</h4>
                    <p>To guide you from there experience and help you out in your way to success </p>
                </div>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <h4>Shape Your Dream</h4>
                    <p>We are here to shape your dreams and make them true</p>
                </div>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <h4>Utilize Your Time</h4>
                    <p>Its time to be serious and utilize your time to build your future </p>
                </div>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    <h4>We Are Pasionate</h4>
                    <p>We are pasionate and we want you to be pasionate as well </p>
                </div>
           </div>
        </div>
    </section>
    <!-- End Professional Builde -->

    <!-- About Us Area -->
    <section class="about_us_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>ABOUT US</h2>
                <h4>We create an environment where you can learn , enhance and test your knowledge</h4>
            </div>
		
            <div class="row about_row">
                <div class="who_we_area col-md-7 col-sm-6">
                    <div class="subtittle">
                        <h2>WHO WE ARE</h2>
                    </div>
                    <p>We are here to shape your skills, enhance your talent, test your knowledge. By providing you the proper guidance that you need , the environment of your interest that you need, the tools you require. we are here for you. Our group of mentors are here to provide you right sky and correct thrust to fly towards your goals.</p>
                    <a href="#" class="button_all">Join Now</a>
                </div>
                <div class="col-md-5 col-sm-6 about_client">
                    <img src="images/about.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Area -->
	
	
	 <!-- Our Achievments Area -->
    <section class="our_achievments_area" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Choose a Subject</h2>
                <h4>select a subject and start your exam</h4>
            </div>
            <form method="post" action="quiz.php" >
			<br><br>
<div class="input-field" style="">
<select name="sub" style="font-size:30px;" class="center"  required>
  <option value="DAA">DAA</option>
  <option value="DBMS">DBMS</option>
</select>
</div>
<div class=" ">
<div class=" ">
<br><br>
<a><input type="submit" style="font-size:30px;background-color:#ffab00" class="btn waves-effect"></a>
</div>
</div>
</form>
        </div>
    </section>
    <!-- End Our Achievments Area -->


    <!-- What ew offer Area -->
    <section class="what_we_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>CHOOSE YOUR AREA OF INTEREST</h2>
                <h4>select your area of interest and know about the mentors</h4>
            </div>
            <div class="row construction_iner">
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="images/cns-1.jpg" alt="">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-keyboard-o" aria-hidden="true"></i>
                        <a href="#">CODING</a>
                        <p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                   </div>
                </div>
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="images/cns-2.jpg" alt="" style="height:180px;width:100%">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-gavel" aria-hidden="true"></i>
                        <a href="#">GAME DEVELOPMENT</a>
                        <p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                   </div>
                </div>
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="images/cns-3.jpg" alt="" style="height:180px;width:100%">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        <a href="#">WEB DESIGNING</a>
                        <p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End What ew offer Area -->

    
   
    <!-- Our Mentor Area -->
    <section class="our_team_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Mentors</h2>
                <h4>To Provide you guidance and thurst towards your goals</h4>
            </div>
            <div class="row team_row">
                <div class="col-md-3 col-sm-6 wow fadeInUp">
                   <div class="team_membar">
                        <img src="images/team/tm-1.jpg" alt="">
                        <div class="team_content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                            <a href="#" class="name">Abhishek Singh</a>
                            <h6>html css php</h6>
                        </div>
                   </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                   <div class="team_membar">
                        <img src="images/team/tm-1.jpg" alt="">
                        <div class="team_content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                            <a href="#" class="name">Abhishek Singh</a>
                            <h6>html css php</h6>
                        </div>
                   </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                   <div class="team_membar">
                        <img src="images/team/tm-1.jpg" alt="">
                        <div class="team_content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                            <a href="#" class="name">Abhishek Singh</a>
                            <h6>html css php</h6>
                        </div>
                   </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                   <div class="team_membar">
                        <img src="images/team/tm-1.jpg" alt="">
                        <div class="team_content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                             <a href="#" class="name">Abhishek Singh</a>
                            <h6>html css php</h6>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Team Area -->

    <!-- Our Achievments Area -->
    <section class="our_achievments_area" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Achievments</h2>
                
            </div>
            <div class="achievments_row row">
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-connectdevelop" aria-hidden="true"></i>
                    <span class="counter">800</span>
                    <h6>EXAM CONDUCTED</h6>
                </div>
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span class="counter">230</span>
                    <h6>SUBJECTS</h6>
                </div>
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-child" aria-hidden="true"></i>
                    <span class="counter">1390</span>
                    <h6>STUDENTS</h6>
                </div>
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-trophy" aria-hidden="true"></i>
                    <span class="counter">125</span>
                    <h6>AWARDS WON</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Achievments Area -->

   

    <!-- Our Partners Area -->
    <section class="our_partners_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Partners</h2>
                <h4>Thewebs , PSIT-COE  </h4>
				<div>
				<br>
				</div>
            </div>
        
        </div>
        
    </section>
    <!-- End Our Partners Area -->

    <!-- Footer Area -->
    <footer class="footer_area">
        <div class="container">

        </div>
        <div class="copyright_area">
            Copyright 2017 All rights reserved. Designed by <a href="https://thewebs.in">Thewebs</a>
        </div>
    </footer>
    <!-- End Footer Area -->
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!-- jQuery JS -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
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
	<script>
	 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
        
	</script>
</body>
</html>
