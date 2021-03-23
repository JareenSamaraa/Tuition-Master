<?php include('pserver.blade.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body style ="background-image: url(http://miriadna.com/desctopwalls/images/max/Grass-ear.jpg);">


</br>
</br>
<div class="logo" style="position:absolute; left: 50px; top:50px;  height:50px ;width: 100px;"> 
							 <h3 style="	color: white; 
	margin-top: 0px;
	font-style: normal;
	font-weight: 400;
  text-transform: normal;
	font-size: 28px;
	font-family: 'Lato', sans-serif;
	font-weight: normal; "> <b> TuitionMaster </b> </h3> <img src="img/owlteacher.jpg" alt="image not found"> 
							</div>
  <div class="header">
  	<h2>Login</h2>
	</div>
	
	
	 
  <form method="post" action="login.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
		</div>
		
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="subscribe.php">Sign up</a>
  	</p>
  </form>
</body>
</html>