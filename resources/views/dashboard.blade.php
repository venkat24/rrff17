<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
    <title>Dashboard - Rolling Reels</title>
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
    </header> <!-- end header -->  

   <!-- styles
   ================================================== -->
    <section id="styles">

        <div class="top-bar" style="background-color:#FF5555"></div>
        <div class="row narrow add-bottom text-center">

        <div class="col-twelve tab-full">

            <h1>Dashboard</h1>

            <p class="lead">Welcome to Festember's Rolling Reels film festival! This is your login dashboard, where you can register your movie for the festival. Below you will see a record of what has been completed and what has not. Keep in mind that everything has to be completed to successfully submit your film!</p><p class="lead">Scroll down for instuctions on making your submission and paying the registration fee.</p>

        </div>

        </div>

      <div class="row add-bottom">

          <div class="col-twelve">

            <div class="table-responsive">

                <table>
                        <tbody>
                           <tr>
                              <td>Title</td>
                              <td id="title_submitted" style="font-size: 20pt"></td>			    
                           </tr>
                           <tr>
                              <td>Synopsis</td>
                              <td id="synopsis_submitted" style="font-size: 20pt"></td>			    
                           </tr>
                           <tr>
                              <td>Poster</td>
                              <td id="poster_submitted" style="font-size: 20pt"></td>					    
                           </tr>
                           <tr>
                              <td>Registration Fee</td>
                              <td id="payment_submitted" style="font-size: 20pt"></td>
                           </tr>
                           <tr>
                              <td>Movie</td>
                              <td id="movie_submitted" style="font-size: 20pt"></td>	    
                           </tr>
                        </tbody>
                   </table>

            </div>     		

          </div>

        <hr>

        <div class="col-twelve tab-full">

            <br><br>

            <h2>Submit Title</h2>

            <p class="lead">Enter your movie's title here. Limit - 10000 Characters</p>
            <form action="/api/settitle" method="POST">
                <input type=text name="title" id="title" class="full-width" placehoder="Title">
                <br>
                <input class="button-primary" type="submit" value="Set Title">
            </form>

            <hr>

            <br><br>

            <h2>Submit Synopsis</h2>

            <p class="lead">Enter your movie's synopsis here. Limit - 10000 Characters</p>
            <form action="/api/setsynopsis" method="POST">
                <textarea name="synopsis" id="synopsis" class="full-width" placehoder="Synopsis"></textarea>
                <br>
                <input class="button-primary" type="submit" value="Set Synopsis">
            </form>

            <hr>

            <br><br>

            <h2>Submit Poster</h2>

            <p class="lead">Submit your film's poster here. Ensure the filesize is less that 3Mb. JPG and PNG only.</p>
            <form action="/api/uploadposter" method="POST" enctype="multipart/form-data">
                <label for="photography-file">Upload Poster*</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="3145728">
                <input type="file" class="form-control-file" name="poster" id="poster">
                <br>
                <input class="button-primary" type="submit" value="Upload Poster">
            </form>

        </div>

        <div class="col-twelve tab-full">


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
   <script src="js/dashboard.js"></script>

</body>

</html>
