<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->

<head>
   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
    <title>Register for Rolling Reels</title>
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
          <a href="index.html">Register for Rolling Reels</a>
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
				<li><a href="/">Home</a></li>
				<li class="current"><a href="/register">Register</a></li>
                @if(Session::get('user_email'))
				<li><a href="/dashboard">Dashboard</a></li>
				<li><a href="/api/logout">Logout</a></li>
                @else
                <li><a href="/login">Login</a></li>
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

            <h1>Register For Rolling Reels</h1>

            <h3>Rules and Regulations</h3>
            <p> Ensure that you read through all the rules very carefully and and see that all conditions are met before making a submisison</p>

			<div class="rules-text" style="text-align: left">
			<p >1. All entries submitted should <strong>not exceed 16 mins</strong> in duration including all titles and credits.
			<p >2. The film should be a <strong>work of fiction</strong>.
			<p >3. <strong>Minimum acceptable resolution of the submitted film is 720p.</strong>
			<p >4. Entries are open for participants from across the globe.
			<p >5. The movie should have been <strong>shot on or after 1st February 2016. Films previously entered into and <em>selected for screening</em> at previous editions of RRFF are not eligible for re-entry in subsequent years.</strong>
			<p >6. If the film is not in English, then it must have <strong>hard coded English subtitles</strong>.
			<p >7. <strong>Top 10 entries juried by our panel, will be screened during the RRFF weekend. The results of the contest will be announced during the Valediction Ceremony, on the final day of the RRFF festival. Jury decision is FINAL and BINDING.</strong>
			<p >8. RRFF will not be responsible for conflicts, disputes or disagreements of any kind, that the crew members encounter during the shooting of the film.
			<p >9. RRFF and its associated parties alone reserve the sole right to disqualify submitted films deemed to be inappropriate or otherwise non-compliant for the competition, based on their discretion.
			<p >10. The submitted films before screening will be strictly restricted to the eyes of only the Jury committee that adjudges the films.
			<p >11. Films containing prohibited, inappropriate, pejorative or unnatural content involving elements of bigotry, desecration or of the like, as determined by RRFF, are liable to be disqualified.
			<p >12. In the event of a film being withdrawn, RRFF will not be liable to reimburse the fee or return the materials entered.
			<p >13. RRFF will decide upon the date and time of the 3 day festival. RRFF will not be accountable for any unprecedented changes to the schedule after the festival line-up is announced, owing to unavoidable reasons.
			<p >14. Participation in RRFF grants us the authority to publicize the entry and film-poster on RRFF and Festember networks and websites. Screening of the film, however, will be done ONLY during the 3 day RRFF weekend, provided the film has been shortlisted for the top ten.
			<p >15.  If the BGM, soundtracks, sequences and props used in the film are not original, then prior permission from the rightful owner should be obtained and cited. The responsibility for this rests entirely with the filmmaker and his crew. Failure to obtain clearance could result in the film being withdrawn from contention. In this event, RRFF will not be liable to reimburse the fee or return the materials entered.
			<p >16. RRFF will attempt to resolve any technical matters related to submission. For more information and queries, contact the Technical Secretary (who’s contact is attached below). Only use this number when querying the technical aspects of your submission.
			<p >17. Participants must Upload their film to FilmFreeway on the day that their registration process is completed. Please include <strong>your film Poster</strong> and <strong>a 50-60 word Synopsis</strong> for your entry. We would like to ensure that the judges view your film in the highest quality possible, so the submissions should preferably be the final cuts.
			<p >18. RRFF will contact you (rollingreels16@gmail.com) if there are any problems with your film. Once downloaded by us, your entry will be uploaded to our server. <strong>A tick mark against your film entry will appear within 24hrs of film upload, indicating your film has been submitted</strong>. If you do not see such an intimation, contact us or hit us a mail at rollingreels16@gmail.com.
			<p >19. The submission of a film to RRFF will be considered to be an acknowledgement and subsequent declaration of adherence, to the festival rules and regulations.
			</div>

        </div>

        </div>

       <div class="row">

           <div class="col-twelve tab-full">

              <form action="/api/register" method="POST">
                  <h3>Member 1*</h3>
                  <div>
                        <label for="name">Name*</label>
                        <input required class="full-width" type="text" id="name" name="name">
                  </div>
                  <div>
                        <label for="email">Email*</label>
                        <input required class="full-width" type="email" id="email" name="email">
                  </div>
                  <div>
                        <label for="phone">Phone Number*</label>
                        <input required class="full-width" type="text" id="phone" name="phone">
                  </div>
                  <div>
                        <label for="password">Password*</label>
                        <input required class="full-width" type="password" id="password" name="password">
                  </div>
                  <div>
                        <label for="confirm_password">Confirm Password*</label>
                        <input required class="full-width" type="password" id="confirm_password" name="confirm_password">
                  </div>
                  <h3>Member 2</h3>
                  <div>
                        <label for="name">Name</label>
                        <input class="full-width" type="text" id="name" name="name">
                  </div>
                  <div>
                        <label for="phone">Phone Number</label>
                        <input class="full-width" type="text" id="phone" name="phone">
                  </div>
                  {!! Recaptcha::render() !!}
                  <br>
                  <input class="button-primary" type="submit" value="Submit" id="submit">

               </form>	            

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

</body>

</html>
