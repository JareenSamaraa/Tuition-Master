<!doctype html>
<html lang="{{ app()->getLocale() }}" >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TuitionMaster- @yield('title')</title>

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
        
        @include('partials._stylesheets')

        @yield('stylesheets')

    </head>
    <body>
           
    @include('partials._navbar')
           <div class="container">

                @include('partials._messages')

                <div class="row">
              
                    <div class="col-sm-12">
                  
                        @yield('content')
                    </div>
                </div>
                </div>
                @include('partials._footer')
               
           

        @include('partials._scripts')

        @yield('scripts')
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