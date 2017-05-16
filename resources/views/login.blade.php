<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
    <title>Login to Rolling Reels</title>
    <meta name="description" content="">  
    <meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">  
   <link rel="stylesheet" href="css/main.css"> 

   <style type="text/css" media="screen">
    #styles { 
        background: white;
        padding-top: 12rem;
        padding-bottom: 12rem;
    }      	
   </style>   

   <!-- script
   ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

   <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

    <!-- header 
   ================================================== -->
   <header> 

    <div class="header-logo">
          <a href="index.html">Infinity</a>
       </div> 

        <a id="header-menu-trigger" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a> 

		<nav id="menu-nav-wrap">

			<a href="#0" class="close-button" title="close"><span>Close</span></a>	

	   	<h3>Rolling Reels</h3>  

            @if(Session::get('user_email'))
            <h6 style="color: white">Welcome {{Session::get('user_email')}}</h6>
            @endif
			<ul class="nav-list">
				<li class="current"><a href="/">Home</a></li>
				<li><a href="/register">Register</a></li>
                @if(Session::get('user_email'))
				<li><a href="/dashboard">Dashboard</a></li>
				<li><a href="/api/logout">Logout</a></li>
                @else
                <li class="current"><a href="/login">Login</a></li>
                @endif
			</ul>	
			<ul class="header-social-list">
	         <li>
	         	<a href="https://www.facebook.com/festember/"><i class="fa fa-facebook-square"></i></a>
	         </li>
	         <li>
	         	<a href="https://twitter.com/festember"><i class="fa fa-twitter"></i></a>
	         </li>
	      </ul>		

		</nav>  <!-- end #menu-nav-wrap -->

    </header> <!-- end header -->  

   <!-- styles
   ================================================== -->
    <section id="styles">

        <div class="top-bar"></div>
        <div class="row narrow add-bottom text-center">

        <div class="col-twelve tab-full">

            <br>
            <h1>Login</h1>

        </div>

        </div>

       <div class="row">

           <div class="col-twelve tab-full">

                  <div>
                        <label for="email">Email</label>
                        <input class="full-width" type="email" id="email" name="email">
                  </div>
                  <div>
                        <label for="password">Password</label>
                        <input class="full-width" type="password" id="password" name="password">
                  </div>

                    <br>
                    <input class="button-primary" type="submit" value="Submit" onclick="login();">
           </div>

        </div> <!-- end row -->

    </section> <!-- end styles -->   

    <!-- footer
   ================================================== -->

    <footer>

    <div class="footer-bottom">

        <div class="row">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Festember 2017</span> 
                    <span>Made with ♥ by <a href="http://deltaforce.club" target="_blank">Delta Force</a></span>
                 </div>		               
            </div>

        </div>   	

      </div> <!-- end footer-bottom -->

      <div id="go-top">
           <a class="smoothscroll" title="Back to Top" href="#top">
            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
           </a>
        </div>		
   </footer>

   <div id="preloader"> 
        <div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>
   <script src="js/login.js"></script>

</body>

</html>
