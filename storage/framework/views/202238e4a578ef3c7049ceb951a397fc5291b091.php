<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Tutor </title>


    <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/meanmenu.css">
		<link rel="stylesheet" href="css/default.css">
		<link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
       
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- Font Icon -->
    <link rel="stylesheet" href="pub2/fonts/material-icon/css/material-design-iconic-font.min.css">




    <!-- Main css -->
    <link rel="stylesheet" href="pub2/css/style.css">



  
</head>
<body>
<header>
			
			
			<div class="header-area">
				<div class="container">
					
					
								 <div class="row align-items-center">
							
								<div class="col-xl-2 col-lg-2 col-md-2"> 

							<div class="logo">
								<a href="/">  <h3 style="color:tomato" > <b> TuitionMaster </b></h3> &nbsp  <img src="<?php echo e(URL::to('/img/owlteacher.jpg')); ?>"  height="100px;" width="70px;"> </a>
							</div>
						</div>

						<div class="col-xl-9 col-lg-9 col-md-10">
							<div class="main-menu text-right d-none d-md-block">
								<nav>
									<ul>
										<li><a href="/">Home</a> 
										
										</li>

										<li><a href="#"> Tutors </a>
											
										</li>
										<li><a href="#"> Jobs </a>
											
												
												
											
										</li>
										<li><a href="help"> Help </a>
											
												
										</li>
										<li><a href="contact"> Contact Us </a>
											
												
										</li>	
										<li><a href="#"> Login </a>
											
												
										</li>
										<li><a href="" class="selected"> Sign Up </a>
                                        <ul class="submenu">
													<li><a href="joinTutor" class="selected"> Sign Up as Tutor</a></li>
													<li><a href="joinParent" > Sign Up as Parent</a></li>
											
												</ul>
												
										</li>
                                        <li>

										<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    My Account
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#" >Posts</a>
    <a class="dropdown-item" href="#"> Tags</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#"> Log Out</a>
  </div>
</div>
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
                                        <li><a href="contact" > Contact Us </a>
											
												
										</li>	
										<li>
											<a href="login"> Login </a>
											
												
												
										</li>
										
										<li><a href="" class="selected"> Sign Up </a>
                                        <ul class="submenu">
													<li><a href="joinTutor" class="selected"> Sign Up as Tutor</a></li>
													<li><a href="joinParent"> Sign Up as Parent</a></li>
											
												</ul>
												
										
										</li>
                                        <li>

										<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    My Account
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#" >Posts</a>
    <a class="dropdown-item" href="#"> Tags</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#"> Log Out</a>
  </div>
</div>
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
<div class="avoid">
    <div class="main">
    
   
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="img/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <h2> Tutor Registration Form</h2>
                        <hr>
                        <br>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="display_name">Name :</label>
                                <input type="text" name="display_name" id="display_name" required/>
                            </div>
                            <div class="form-group">
                                <label for="user_name"> User name :</label>
                                <input type="text" name="user_name" id="user_name" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="address" id="address" required/>
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male" checked>
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        
                           
                        <div class="form-group">
                            <label for="area">I am available in areas:</label>
                            <input type="text" name="area" id="area">
                        </div>
                       
                        <div class="form-group">
                            <label for="Medium">Medium :</label>
                            <div class="form-select">
                                <select name="medium" id="medium">
                                    <option value=""></option>
                                    <option value="Bangla"> Bangla</option>
                                    <option value="English"> English</option>
                                    <option value="Arabic"> Arabic</option>
                                    <option value="Both"> Both</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                                <label for="class"> Class range:</label>
                                <div class="form-select">
                                    <select name="class" id="class">
                                        <option value=""></option>
                                        <option value="0-5"> 0-5 </option>
                                        <option value="5-8">5-8</option>
                                        <option value="washington">5-10</option>
                                        <option value="washington">5-12</option>
                                        <option value="washington">9-10</option>
                                        <option value="washington">9-12</option>
                                        <option value="washington">11-12</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        
                            
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="number" name="phone" id="phone" placeholder="+880"  required pattern="[0-9]{11} " required/ >
                        </div>
                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="email" id="email" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password" name="password" id="password"  minlength="8" required/>
                        </div>
                       
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
    </div>

</div>


    <!-- JS -->
    <script src="pub2/vendor/jquery/jquery.min.js"></script>
    <script src="pub2/js/main.js"></script>
</body>
</html>