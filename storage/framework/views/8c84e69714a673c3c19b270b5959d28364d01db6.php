<?php
	// Message Vars
	$msg = '';
	$msgClass = '';

	// Check For Submit
	if(filter_has_var(INPUT_POST, 'submit')){
		// Get Form Data
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);

		// Check Required Fields
		if(!empty($email) && !empty($name) && !empty($message)){
			// Passed
			// Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// Failed
				$msg = 'Please use a valid email';
				$msgClass = 'alert-danger';
			} else {
				// Passed
				$toEmail = 'summer.a2896@gmail.com';
				$subject = 'Contact Request From '.$name;
				$body = '<h2>Contact Request</h2>
					<h4>Name</h4><p>'.$name.'</p>
					<h4>Email</h4><p>'.$email.'</p>
					<h4>Message</h4><p>'.$message.'</p>
				';

				// Email Headers
				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: " .$name. "<".$email.">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					// Email Sent
					$msg = 'Your email has been sent';
					$msgClass = 'alert-success';
				} else {
					// Failed
					$msg = 'Your email was not sent';
					$msgClass = 'alert-danger';
				}
			}
		} else {
			// Failed
			$msg = 'Please fill in all fields';
			$msgClass = 'alert-danger';
		}
	}
?>



<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Contact Us </title>
        <meta name="description" content="Welcome to Bangladesh! this is a website you need to know every amazing fact about Bangladesh ">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="img/owlteacher.jpg">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/meanmenu.css">
		<link rel="stylesheet" href="css/default.css">
		<link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">



		<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
		

		
    <link href="fontawesome-free-5.5.0-web/css/fontawesome.min.css" rel="stylesheet">
    </head>
    <body >
      
	         		<!-- header start -->
							 <header>
			
			
			<div class="header-area">
				<div class="container">
					
					
								 <div class="row align-items-center">
							
								<div class="col-xl-2 col-lg-2 col-md-2"> 

							<div class="logo">
								<a href="index">  <h3 style="color:tomato" > <b> TuitionMaster </b></h3> &nbsp  <img src="<?php echo e(URL::to('/img/owlteacher.jpg')); ?>"  height="100px;" width="70px;"> </a>
							</div>
						</div>

						<div class="col-xl-9 col-lg-9 col-md-10">
							<div class="main-menu text-right d-none d-md-block">
								<nav>
									<ul>
										<li><a href="/">Home</a> 
										
										</li>

										<li><a href="#""> Tutors </a>
											
										</li>
										<li><a href="#"> Jobs </a>
											
												
												
											
										</li>
										<li><a href="help"> Help </a>
											
												
										</li>
										<li><a href="contact" class="selected"> Contact Us </a>
											
												
										</li>	
										<li><a href="#"> Login </a>
											
												
										</li>
										<li><a href="#join"> Sign Up </a>
											
												
										</li>
										
									</ul>
								</nav>
							</div>
							<div class="mobile-menu-active"></div>
							<div class="mobile-menu text-right d-md-none">
								<nav id="mobile-menu">
									<ul>
										<li>
											<a href="/">Home</a>
											
										</li>
										<li>
											<a href="#"> Tutors </a>
										</li>
										<li>
											<a href="#"> Jobs </a>
											
										</li>
										<li>
											<a href="help"> Help </a>
										</li>
                                        <li><a href="contact" class="selected"> Contact Us </a>
											
												
										</li>	
										<li>
											<a href="login"> Login </a>
											
												
												
										</li>
										
										<li><a href="#join"> Sign Up </a>
											
												
										
										</li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-xl-1 col-lg-1 d-none d-lg-block">
							<div class="header-search text-right">
								<i class="fas fa-search"></i>
								<div class="search-form">
									<form action="#">
										<input type="text" placeholder="Search">
										<button ><i class="fas fa-search"></i></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</header>
        <!-- header end -->
       
		<div class="bg">

		<div class="container">	
		<div class="avoid">
    	<?php if($msg != ''): ?>
    		<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    	<?php endif; ?>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	      <div class="form-group">
			  <br>
		      <label>Name</label>
		      <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
	      </div>
	      <div class="form-group">
	      	<label>Email</label>
	      	<input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
	      </div>
	      <div class="form-group">
	      	<label>Message</label>
	      	<textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
	      </div>
	      <br>
	      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
		</div>
		

</div>

</div>

</div>


        


        <footer class="footer-bg">
			<div class="footer-area pt-70 pb-40">
				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-6">
							<div class="footer-widget mb-30">
								<img src="img/owlteacher.jpg" alt="">   <h2 style="background-color: white;color: salmon"> TuitionMaster </h2> 
								<p> TuitionMaster is a website for helping you find your best tutor and best teachingship job ever!</p>
								<div class="footer-icon">
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-instagram"></i></a>
									<a href="#"><i class="fab fa-twitter-square"></i></a>
									<a href="#"> <i class="far fa-envelope-open"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6">
							<div class="footer-widget mb-30">
								<h3>Features</h3>
								<ul class="footer-link">
									<li><a href="#" data-toggle="popover" title="Designed by- JAREEN SAMARA" data-content="Web Developoer, </br> Cse 38th batch,</br> Metropolitan University,Sylhet">About Us</a></li>
									<li><a href="#"> Complain and inquiry</a></li>
									<li><a href="help"> Help </a></li>
								
								</ul>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6">
							<div class="footer-widget mb-30">
								<h3>Contact us</h3>
								<ul class="contact-list">
									<li>Address: Zindabazar, Sylhet, Bangladesh</li>
									<li>Phone: +(880) *** ****</li>
									<li>Phone: +(880) *** ****</li>
									
								</ul>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6">
							<div class="footer-widget mb-30">
								<h3>Newslleter</h3>
								<p>Subscribe to Newsletters and Stay informed about our news and events</p>
								<form action="#">
									<input type="email" placeholder="Email" >
									<button> <a href="subscribe.php">  Subscribe </a></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright-area">
				<div class="container">
					<div class="copyright text-center">
						<p>Copyright© Designed by Jareen Samara. All rights reserved for this website. </p>
					</div>
				</div>
			</div>
		</footer>



        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-3.2.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.meanmenu.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/aos.js"></script>
        <script src="js/main.js"></script>
    </body>
    <style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("https://png.pngtree.com/thumb_back/fh260/back_pic/00/02/06/18560fdccac9aa7.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</html>