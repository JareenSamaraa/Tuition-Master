
@extends('layouts.app')

@section('title', 'Contact Us')


      
				@section('content')   
		<div class="bg">
		<div class="avoid">
		<div class="container">	
	

		<div class="row">
		<div class="col-sm-6 offset-sm-3">
			<h1  style="color: white" font-family=" Century Gothic;"> Contact Us </h1>
			<hr>
			<form action="{{ route('contact.send') }}" method="POST">
				@csrf
				<label for="name" style="color: white"><i>Name </i></label>
				<input type="text" name="name" class="form-control">

				<label for="email" class="mt-3" style="color:white"> <i> eMail </i></label>
				<input type="email" name="email" class="form-control">

				<label for="message" class="mt-3" style="color:white"> <i>Message</i></label>
				<textarea name="message" cols="30" rows="10" class="form-control"></textarea>

				<button type="submit" class="btn btn-success btn-block my-3">Send Email</button> 	<br>
			<br>
			<br>
			</form>
			<br>
			<br>
			<br>
		</div>
	</div>
    <br>
		<br>
		

</div>

</div>

</div>

</div>




	



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
    	
 