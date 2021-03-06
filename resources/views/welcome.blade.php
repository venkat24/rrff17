<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<!-- Venkatraman Srikanth B| -->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Festember - Rolling Reels</title>
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

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
	      <a href="https://festember.com"><img src="images/logo.png"></a>
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


   <!-- home
   ================================================== -->
   <section id="home">

   	<div class="overlay"></div>

   	<div class="home-content-table">	
		   <div class="home-content-tablecell">
		   	<div class="row" style="margin-top: 70px">
		   		<div class="col-twelve">		   			
			  		
                            <div>
                                    <!--<img class="reel" src="images/reel.png" width="200px" height="200px" id="main-reel">-->
                            </div>
                            <br>
			  				<h3 style="font-size: 22pt;" class="rolling-font animate-intro"><span class="festember-main">Festember</span>,<div style="display:inline-block">NIT Trichy</div><br /> Presents</h3>
				  			<h1 class="rolling-font animate-intro main-heading">
							Rolling Reels <br>
				  			</h1>
                            <h3 class="animate-intro" style="color:white; margin-top: -15px;font-size: 1.5em;text-shadow:2px 2px 0px red;">20th August</h3>
                            <h4 class="animate-intro" style="color:white; margin-top: -15px;text-shadow:2px 2px 0px #C451B4;">LV Prasad Film and TV Academy, Chennai</h4>
                            <h5 class="animate-intro" style="color:white; font-size: 1.0em;">Prize Money <div class="animated infinite pulse" style="text-shadow:2px 2px 0px red;">&#8377; 1,00,000/-</div></h3>
                            <h5 class="animate-intro" style="color:white; font-size: 1.0em;">Registration fee <div class="animated infinite pulse" style="text-shadow:2px 2px 0px red;">&#8377; 700/-</div></h3>

				  			<div class="more animate-intro" style="margin-top: -0.3em;">
							  <!--<div class="early-bird-prompt animated infinite tada">Early Bird Offer!</div>-->
				  				<a class="button stroke" href="/register">
                                    Submit Film
				  				</a>
								<button  class="button stroke" onclick="popup('rolling-reels-film-festival-404140');" class="tsbutton">Register for Workshop</button><noscript id="tsNoJsMsg">Javascript on your browser is not enabled.</noscript><script src="//www.townscript.com/popup-widget/townscript-widget.nocache.js" type="text/javascript"></script>
				  			</div>
				  			<!--<h3 class="animate-intro" style="color:white; font-size: 0.8em; margin-top: -0.2em">Early Bird Deadline - July 15th</h3>-->
			  		</div> <!-- end col-twelve -->
		   	</div> <!-- end row -->
		   </div> <!-- end home-content-tablecell -->
		</div> <!-- end home-content-table -->

		<ul class="home-social-list">
	         <li>
	         	<a href="https://www.facebook.com/festember/"><i class="fa fa-facebook-square"></i></a>
	         </li>
	         <li>
	         	<a href="https://twitter.com/festember"><i class="fa fa-twitter"></i></a>
	         </li>
	   </ul> <!-- end home-social-list -->	

		<div class="scrolldown">
			<a href="#about" class="scroll-icon smoothscroll">		
		   	Scroll Down		   	
		   	<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			</a>
		</div>			
   
   </section> <!-- end home -->


   <!-- about
   ================================================== -->
   <section id="about">

   	<div class="row about-wrap">
   		<div class="col-full">

   			<div class="about-profile-bg"></div>

				<div class="intro">
					<h3 class="animate-this">About</h3>
                <img src="images/rrff.png" width="300px" style="display: inline-block; margin-right: 15px;">
                <div style="display: inline-block">
                 <p style="font-size: 1.3rem;" class="lead">Digital Media Partner</p>
                 <img src="images/smile-settai.png" width="150px">
                </div>
	   			<p class="lead animate-this" style="font-size:2em">South India's largest student run short film festival is Rolling your way! Register now, and be a part of Rolling Reels Film Festival, 2017</p>
   		<h3>Event Location</h3>
   		<h1></h1>
   			
		  <iframe style="width: 80%; height: 300px" src="https://www.google.com/maps/embed/v1/place?q=13.055244,80.204562
    		      &zoom=17
    		      &key=AIzaSyCAQUr8ZIP6il4w3TdvH77a4glOpuz9r3I">
    		  </iframe>

   		</div> <!-- end col-full  -->
   	</div> <!-- end about-wrap  -->

   </section> <!-- end about -->


   <!-- about
   ================================================== -->
   <section id="services">

   	<div class="overlay"></div>
   	<div class="gradient-overlay"></div>
   	
   	<div class="row narrow section-intro with-bottom-sep animate-this">
   		<div class="col-full">
   			
   				<h3>Events</h3>
   			   <h1>Action at Rolling Reels.</h1>
   			
   			   <p class="lead">Rolling Reels Film Festival (RRFF) is an event held every year as a part of Festember, the annual cultural fest of NIT Trichy. Up until 2014, Festember did not sport any event related to movie-making. With a hefty increase in new, young film-makers taking the film industry by storm, it would only seem sensible to instate a platform which would act as a springboard for young talents. This led to the incubation of RRFF - the first edition of the short film festival was held in September 2015, and was a success through and through</p>
   			
   	   </div> <!-- end col-full -->
   	</div> <!-- end row -->
<section class="timeline">
  <ul>
    <li>
      <div>
        Inauguration
      </div>
    </li>
    <li>
      <div>
        Panel Discussion
      </div>
    </li>
    <li>
      <div>
        Workshop
      </div>
    </li>
    <li>
      <div>
        Movie Screening
      </div>
    </li>
    <li>
      <div>
        Valediction and Prize Distribution
      </div>
    </li>
  </ul>
</section>

   </section> <!-- end services -->

   <!-- Testimonials Section
   ================================================== -->
   <section id="testimonials">

   	<div class="row">
   		<div class="col-twelve">
   			<h2 class="animate-this">Our Esteemed Panel of Judges</h2>
   		</div>   		
   	</div>   	

      <div class="row flex-container">
    
         <div id="testimonial-slider" class="flex-slider animate-this">

            <ul class="slides">

               <li>
                  <div class="testimonial-author">
                    	<img src="images/avatars/user-02.jpg" alt="Author image">
                    	<div class="author-info">
                    		R Velraj
                    		<span class="position">Director</span>
							<br>
						    <p>Mr R Velraj is the blockbuster director behind Kollywood box office smashers like <em>Velai Illa Pattadhari, Thanga Magan. </em>He also worked on other Tamil, Malayalam and Hindi Films, including <em>Aadukalam, Kandahar, Polladhavan, and Engeyun Eppodhum.</em></p> 
<br>
<!-- 							<div class="content">
							  <div class="buttons">
								<div id="one" class="button button-full-width" data-num="1">Read More</div>
							  </div>
							</div> -->
                    	</div>
                  </div>

             	</li> <!-- end slide -->

               <li>
               	<div class="testimonial-author">
                    	<img src="images/avatars/user-03.jpg" alt="Author image">
                    	<div class="author-info">
                    		Sreekar Prasad
                    		<span>Film Editor</span>
							<br>
							<p>Mr Sreekar Prasad is a National Award winning editor, known for Telugu, Malayalam, and Tamil films including <em>Okkandu, Kannathil Muthamittal, Pazhassi Raja, Kaththi, Pizza, Naanum Rowdy Thaan,</em> and recently, <em>Kaatru Veliyidai.</em> Mr Prasad will be conducting a workshop on Movie Editing this Rolling Reels.</p>
                    	</div>
                  </div>                                         

               </li> <!-- end slide -->

               <li>
               	<div class="testimonial-author">
                    	<img src="images/avatars/user-04.jpg" alt="Author image">
                    	<div class="author-info">
                    		DRK Kiran
                    		<span>Actor / Art Director</span>
							<br>
							<p>Mr DRK Kiran is easily recognizable from his roles in <em>Anegan</em> and <em>Ko</em>, and he also did the Art Direction for these movies, among several other blockbusters, including <em>Kavan</em> and <em>Naanum Rowdy Thaan. </em></p>
                    	</div>
                  </div>                                         
               </li> <!-- end slide -->

               <li>
               	<div class="testimonial-author">
                    	<img src="images/avatars/user-05.jpg" alt="Author image">
                    	<div class="author-info">
                    		Ravi K Chandran
                    		<span>Cinematographer</span>
							<br>
							<p>Ravi K Chandran is an award-winning cinematographer who has worked with both the Tamil and Hindi film industries in hits like <em>Boys, Black, Kandukondain Kandukondain</em> to name a few.</p>
                    	</div>
                  </div>                                         
               </li> <!-- end slide -->


               <li>
               	<div class="testimonial-author">
                    	<img src="images/avatars/user-06.jpg" alt="Author image">
                    	<div class="author-info">
                    		Praveen Anthony
                    		<span>Film Editor</span>
							<br>
							<p>Praveen Anthony is a venerable and respected name in the film spheres, known for his exceptional editing skills in movies like <em>Kidaari</em> and <em>Rajathanthiram</em>. He has also worked as an associate editor in movies like <em>Ko</em> and <em>Vaanam.</em> </p>
                    	</div>
                  </div>                                         
               </li> <!-- end slide -->


               <li>
               	<div class="testimonial-author">
                    	<img src="images/avatars/user-07.jpg" alt="Author image">
                    	<div class="author-info">
                    		Santosh Sivan
                    		<span>Cinematographer</span>
							<br>
							<p>Santhosh Sivan, a cinematographer with experience as a producer, director and an actor, is also the recipient of eleven national awards and the highly esteemed Civilian Honour <em>Padma Shri</em>.</p>
                    	</div>
                  </div>                                         
               </li> <!-- end slide -->

               <li>
               	<div class="testimonial-author">
                    	<img src="images/avatars/user-08.jpg" alt="Author image">
                    	<div class="author-info">
                    		Vignesh Shivan
                    		<span>Director</span>
							<br>
							<p>Vignesh Shivan is a Tamil film director, actor and lyric writer. He has directed blockbuster movies like <em>Podaa Podi</em>, <em>Naanum Rowdydhaan</em>,  <em>Thaanaa Serndha Koottam</em> and has associated with many other festure films as an actor, lyricist and writer. </p>
                    	</div>
                  </div>                                         
               </li> <!-- end slide -->

               <li>
               	<div class="testimonial-author">
                    	<div class="author-info">
							<img src="images/reel.png" width="100px" class="animate-reel reel-sub">
							<p>We shall reveal more members of our panel shortly. Stay tuned!</p>
                    	</div>
                  </div>                                         
               </li> <!-- end slide -->

            </ul> <!-- end slides -->

         </div> <!-- end testimonial-slider -->         
        
      </div> <!-- end flex-container -->

   </section> <!-- end testimonials -->

   <!-- portfolio
   ================================================== -->
   <section id="portfolio">
   	
   	<div class="intro-wrap">

   		<div class="row narrow section-intro with-bottom-sep">
	   		<div class="col-twelve">
	   			<h3>Showcase</h3>
		   		<h1>Some Past Film Entries.</h1>
	   		</div>   		
	   	</div> <!-- end row section-intro -->   		

   	</div> <!-- end intro-wrap -->   	

   	<div class="row portfolio-content">
   		<div class="col-twelve">
   			<div id="folio-wrap" class="bricks-wrapper">					

   				<div class="brick folio-item">
	               <div class="item-wrap" data-src="images/portfolio/1973.jpg" data-sub-html="#01" > 	
	                  <a href="#" class="overlay">
	                  	<img src="images/portfolio/1973.jpg" alt="Skaterboy">	                     
	                     <div class="item-text">
	                     	<span class="folio-types">
		     					   </span>
		     					   <h3 class="folio-title">1973</h3>	     					   
		     					</div>                                        
	                  </a>
	                  <a href="https://www.behance.net/" class='details-link' title="details">
	                  	<i class="icon-link"></i>
	                  </a>
	               </div> <!-- end item-wrap -->
						
						<div id="01" class='hide'>
							<h4>1973</h4>
						</div>
	        		</div> <!-- end folio-item -->

	        		<div class="brick folio-item">
	               <div class="item-wrap" data-src="images/portfolio/amrita.jpg" data-sub-html="#02"> 	
	                  <a href="#" class="overlay">
	                  	<img src="images/portfolio/amrita.jpg" alt="Shutterbug">	                     
	                     <div class="item-text">
	                     	<span class="folio-types">
		     					   </span>
		     					   <h3 class="folio-title">Amrita aur Mein</h3>  	     					   
		     					</div>                                        
	                  </a>
	                  <a href="https://www.behance.net/" class='details-link' title="details">
	                  	<i class="icon-link"></i>
	                  </a>
	               </div> <!-- end item-wrap -->

	               <div id="02" class='hide'>
							<h4>Amrita aur Mein</h4>
						</div>	               
	        		</div> <!-- end folio-item -->

	        		<div class="brick folio-item">
	               <div class="item-wrap" data-src="images/portfolio/ann.jpg" data-sub-html="#03" >   	
	                  <a href="#" class="overlay">
	                  	<img src="images/portfolio/ann.jpg" alt="Explore">	                     
	                     <div class="item-text">	                     		     					    
		     					   <span class="folio-types">
		     					   </span>
		     					   <h3 class="folio-title">Antha Naal Nyaabagam</h3>
		     					</div>                                        
	                  </a>
	                  <a href="https://www.behance.net/" class='details-link' title="details">
	                  	<i class="icon-link"></i>
	                  </a>
	               </div> <!-- end item-wrap -->	

	               <div id="03" class='hide'>
							<h4>Antha Naal Nyaabagam</h4>
						</div>               
	        		</div> <!-- end folio-item -->

					<div class="brick folio-item">
	               <div class="item-wrap"  data-src="images/portfolio/Kaduthasi.jpg"  data-sub-html="#04" >
	                  <a href="#" class="overlay">
	                  	<img src="images/portfolio/Kaduthasi.jpg" alt="Minimalismo">	                     
	                     <div class="item-text">	     					    
		     					   <span class="folio-types">
		     					   </span>
		     					   <h3 class="folio-title">Kaduthasi</h3>
		     					</div>                                        
	                  </a>
	                  <a href="https://www.behance.net/" class='details-link' title="details">
	                  	<i class="icon-link"></i>
	                  </a>
	               </div> <!-- end item-wrap -->

	               <div id="04" class='hide'>
							<h4>Kaduthasi</h4>
						</div>  	               
	        		</div> <!-- end folio-item -->

					<div class="brick folio-item">
	               <div class="item-wrap" data-src="images/portfolio/SAVE.jpg" data-sub-html="#05" >  	
	                  <a href="#" class="overlay">
	                  	<img src="images/portfolio/SAVE.jpg" alt="Bicycle">	                     
	                     <div class="item-text">	     					    
		     					   <span class="folio-types">
		     					   </span>
		     					   <h3 class="folio-title">SAVE</h3>
		     					</div>                                        
	                  </a>
	                  <a href="https://www.behance.net/" class='details-link' title="details">
	                  	<i class="icon-link"></i>
	                  </a>
	               </div> <!-- end item-wrap -->

	               <div id="05" class='hide'>
							<h4>SAVE</h4>
						</div>	               
	        		</div> <!-- end folio-item -->
	           
					<div class="brick folio-item">
	               <div class="item-wrap" data-src="images/portfolio/Rishwat.jpg" data-sub-html="#06">     	
	                  <a href="#" class="overlay">
	                  	<img src="images/portfolio/Rishwat.jpg" alt="Salad">	                     
	                     <div class="item-text">	     					    
		     					   <span class="folio-types">
		     					   </span>
		     					   <h3 class="folio-title">Rishwat</h3>
		     					</div>                                        
	                  </a>
	                  <a href="https://www.behance.net/" class='details-link' title="details">
	                  	<i class="icon-link"></i>
	                  </a>
	               </div> <!-- end item-wrap -->

	               <div id="06" class='hide'>
							<h4>Rishwat</h4>
						</div>	               
	        		</div> <!-- end folio-item -->   				
	           
					<div class="brick folio-item">
	               <div class="item-wrap"  data-src="images/portfolio/Duddu.jpg"  data-sub-html="#07">
	                  <a href="#" class="overlay">
	                  	<img src="images/portfolio/Duddu.jpg" alt="Salad">	                     
	                     <div class="item-text">	     					    
		     					   <span class="folio-types">
		     					   </span>
		     					   <h3 class="folio-title">Duddu</h3>
		     					</div>                                        
	                  </a>
	                  <a href="https://www.behance.net/" class='details-link' title="details">
	                  	<i class="icon-link"></i>
	                  </a>
	               </div> <!-- end item-wrap -->

	               <div id="07" class='hide'>
							<h4>Rishwat</h4>
						</div>
	        		</div> <!-- end folio-item -->   				

   			</div> <!-- end folio-wrap -->
   		</div> <!-- end twelve -->
   	</div> <!-- end portfolio-content -->   	
<br /><br />
   </section>  <!-- end portfolio -->

   <section id="contact">

      <div class="overlay"></div>

		<div class="row narrow section-intro with-bottom-sep">
   		<div class="col-twelve">
   			<h3>Contact</h3>
   			<h1>Get In Touch.</h1>
   		</div> 
   	</div> <!-- end section-intro -->

   	<div class="row contact-content">
    
        <div class="profile-container"><img src="images/avatars/Deepan_Thiruppathy.jpg" class="profile-img">
	        <br /><strong>Deepan Thiruppathy</strong>
	        <br />Head, RRFF 2017
	        <br />for Event queries
	        <br />+91 9500141933
        </div>

        <div class="profile-container"><img src="images/avatars/Hanisha_Rajan.jpg" class="profile-img">
	        <br /><strong>Hanisha Rajan</strong>
	        <br />Head, RRFF 2017
	        <br />for Workshop queries
	        <br />+91 9940640564
        </div>

        <div class="profile-container"><img src="images/avatars/Varshini_Bhaskar.jpg" class="profile-img">
	        <br /><strong>Varshini Bhaskar</strong>
	        <br />Media Head, Festember 2017
	        <br />for Media collaborations
	        <br />+91 9043846358
        </div>

        <div class="profile-container"><img src="images/avatars/Aakash_Bhatt.jpg" class="profile-img">
	        <br /><strong>Aakash Bhatt</strong>
	        <br />Marketing Head, Festember 2017
	        <br />for Branding queries
	        <br />+91 9629414669
        </div>


   	</div> <!-- end row contact-content -->
		
	</section> <!-- end contact -->


	<!-- footer
   ================================================== -->
	<footer>
   	<div class="footer-bottom">

      	<div class="row">
      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>© Festember 2017</span> 
                    <span>Made with <a href="http://venkatraman.me">♥</a> by <a href="http://deltaforce.club" target="_blank">Delta Force</a></span>
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
   </div> 
   <div id="preloader-img-container">
      <img id="loader" class="animate-reel" src="images/reel.png">
   </div>

   <!-- Modals
   ================================================== -->

    <div id="modal-container" data-container-num="1">
      <div class="modal-background">
        <div class="modal">
          <h2>R Velraj</h2>
          <p>R.Velraj is an Indian cinematographer who was born in a village called
			 Kutthiyar Kundu near Madurai, Tamil Nadu. At his early stage, he was
			 associated with cinematographer Tirru and worked in several Tamil films
			 as assistant cinematographer, notably Aalavandhan etc., also worked
			 mainly in Tamil, Malayalam and Hindi films including Polladhavan,
			 Aadukalam, Kandahar and Engeyum Eppodhum. He shot to fame and became a
			 true professional in Kollywood industry after donning the director’s cap
			 for the super hit blockbuster project, Velai Illa Pattadhaari. He
			 carried forth the same energy and success in his next project as
			 director, Thanga Magan. Velraj is a truly an inspiration to many trying
			 to enter today’s film industry. From association with the
			 cinematography, to making it big today in the Film Industry- he is
			 exactly the kind of inspiration each one of us aspiring film makers need
			 today. We are thus, more than happy, and proud to announce that our
			 first jury member, Velraj sir has given us his full support, and looks
			 forward to watching the submitted entries and providing valuable
			 feedback.
			 </p>
          <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
                                    <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
                                </svg>
        </div>
      </div>
    </div>

    <div id="modal-container" data-container-num="2">
      <div class="modal-background">
        <div class="modal">
          <h2>Sreekar Prasad</h2>
          <p>Editing is a world of its own where a film could be reborn, it is at
the editing table where a film takes actual shape and is infused with a
comprehensive dimension.

Words that cant better describe what editing means to a film, proves
the immaculate knowledge, understanding, experience and most
importantly, the love this man has towards this sector of
production-this art. A man whose unending urge and endeavour is to share
his experiences with upcoming editors, Sreekar Prasad is a true
embodiment of experience. Starting from Telugu Films, he soon rose to
National Acclaim in both Malayalam and Tamil films. There are too many
films against his name to mention them all. But a few notable ones
include Kannathil Muthamittai, winning him the National Award for Best
Editting in 2002; the telugu hit Okkadu; Bollywood hits include Guru and
Kaminey; Malayalam hits like Kutty Srank and Pazhassi Raja; and Tamil
hits such as Aarambam, Billa, Kaththi, Pizza, Alaiypayuthe, Naanum Rowdy
Thaan, Thuppakki, and recently, Kaatru Velliyidai.

So join us for a treat this workshop at RRFF 17, for the session with
this master craftsmen is sure to set evergreen, lasting memories in your
mind, learning certain aspects that are tough to gain anywhere else.
</p>
          <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
                                    <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
                                </svg>
        </div>
      </div>
    </div>

    <div id="modal-container" data-container-num="3">
      <div class="modal-background">
        <div class="modal">
          <h2>DRK Kiran</h2>
          <p>When looking to find the people who best understand what rising
through the ranks in filn industry is, the most relatable youth in
today’s film industry in this aspect is Art Director/ supporting Actor
DRK Kiran. Kiran sir has many movies to his name as the art director,
including blockbusters like Kavan, Ko, Naanum Rowdy Thaan and Anegan. He
has also played supporting roles in Anegan and Ko. With an enthusiasm
for films and unique storylines since early ages, Kiran sir is excited
to be part of the jury for RRFF 2017. We are glad to associate with sir
this year, as we look to make RRFF 2017 a memorable experience for him
and for us!
</p>
          <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
                                    <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
                                </svg>
        </div>
      </div>
    </div>

   <!-- Java Script
   ================================================== -->
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>
</html>
