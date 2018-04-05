<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<!--title-->
    <title>VMD | Vission Mobile Developer</title>
	
	<!--CSS-->
    <link href="<?=base_url()?>appsources/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>appsources/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>appsources/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?=base_url()?>appsources/css/prettyPhoto.css" rel="stylesheet">	
	<link href="<?=base_url()?>appsources/css/main.css" rel="stylesheet">
	<link href="<?=base_url()?>appsources/css/main-vmd.css" rel="stylesheet">
	<link href="<?=base_url()?>appsources/css/responsive.css" rel="stylesheet">
	
	<!--Google Font-->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600italic,600,700' rel='stylesheet' type='text/css'>	

    <!--[if lt IE 9]>
	    <script src="<?=base_url()?>appsources/js/html5shiv.js"></script>
	    <script src="<?=base_url()?>appsources/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?=base_url()?>appsources/images/ico/pp.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>appsources/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>appsources/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>appsources/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>appsources/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
	<!-- Page Loader -->
	<div class="preloader">
        <div id="loaderImage"></div>
    </div>
	
	<div id="main-carousel">
		<div id="home-carousel" class="carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item active" style="background-image: url(<?=base_url()?>appsources/images/home/new1.jpg)">
					<div class="carousel-caption">
						<h1 class="animated fadeInUpBig"><strong>Vission Mobile Developer</strong> </h1>
						<h2 class="animated zoomIn">I am <span>VMD</span></h2>
						<p class="animated fadeInDownBig">Your Technology Solution</p>
					</div>					
				</div>
				<div class="item" style="background-image: url(<?=base_url()?>appsources/images/home/new2.jpg)">
					<div class="carousel-caption">						
						<h1 class="animated fadeInUpBig">We <strong>love</strong> to <strong>learn</strong></h1>
						<h2 class="animated zoomIn">Awesome <span>Engineer </span></h2>
						<p class="animated fadeInDownBig">We are solve your problem !</p>
					</div>
				</div>
				<div class="item" style="background-image: url(<?=base_url()?>appsources/images/home/new3.jpg)">
					<div class="carousel-caption">						
						<h1 class="animated fadeInUpBig">We <strong>think</strong> to <strong>improve</strong></h1>
						<h2 class="animated zoomIn">Something <span>Special</span></h2>
						<p class="animated fadeInDownBig">Features For Your Business</p>
					</div>
				</div>
				<div class="item" style="background-image: url(<?=base_url()?>appsources/images/home/new4.jpg)">
					<div class="carousel-caption">						
						<h1 class="animated fadeInUpBig">We <strong>enjoy</strong> your <strong>Smile</strong></h1>
						<h2 class="animated zoomIn">We get<span> right on target</span></h2>
						<p class="animated fadeInDownBig">When you Encourage us</p>
					</div>
				</div>
			</div>
			<a class="main-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
			<a class="main-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
		</div> 
		<a data-scroll class="smooth-scroll" href="#navigation">
			<div class="mouse-icon">
				<div class="wheel"></div>
				<i class="fa fa-angle-down"></i>
			</div>			
		</a>
    </div><!--/#main-carousel--> 
	
	<div id="navigation">
        <div class="navbar" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#main-carousel"><h1><img class="img-responsive" width="100px" style="margin-left:120%" src="<?=base_url()?>appsources/images/vmd.png" alt="logo"></h1></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="scroll active"><a href="#main-carousel">Home</a></li> 
						<li class="scroll"><a href="#about-us">About Us</a></li>
						<li class="scroll"><a href="#our-team">Team</a></li>
						<li class="scroll"><a href="#our-team">Vission And Mission</a></li>                        
						<li class="scroll"><a href="#portfolio">Product</a></li>
						<!-- <li class="scroll"><a href="#our-team">Team</a></li>                        -->
                        <li class="scroll"><a href="#our-clients">Client</a></li> 
                        <!-- <li class="scroll"><a href="#blog">Blog</a></li> -->
                        <li class="scroll"><a href="#contact-us">Contact</a></li>                        
                    </ul>
                </div>
            </div>
        </div>
    </div><!--/#navigation--> 
	
	<section id="about-us" class="padding-top off-white">		
		<div class="container text-center">
			<div class="row section-title">
				<div class="col-sm-8 col-sm-offset-2">
					<h2>About <font color=#12bF98>Us</font></h2>
					<p>VMD (Vision Mobile Developer) is a leading company to help our customer to align Business and Information Technology, Train people and Manage the future operating strategy and model to get IT Benefit, such as leverage people, Technology and Bussiness Improvement.</p>
				</div>				
			</div>
			<div class="bout-us-image">
				<img class="img-responsive" src="<?=base_url()?>appsources/images/about-us/devices_2.png" alt="" />
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 about-content">					
					<div class="about-icon">
						<i class="fa fa-users"></i>							
					</div>
					<div class="about-text">
						<h3>Creative Team</h3>
						<!-- <p>Lorem ipsum dolor sit amet elit sed do eiusmod tempor incilabore dolore magna aliqua.</p> -->
					</div>					
				</div>
				<div class="col-md-3 col-sm-6 about-content">					
					<div class="about-icon">
						<i class="fa fa-rocket"></i>							
					</div>
					<div class="about-text">
						<h3>Unique Design</h3>
						<!-- <p>Lorem ipsum dolor sit amet elit sed do eiusmod tempor incilabore dolore magna aliqua.</p> -->
					</div>					
				</div>
				<div class="col-md-3 col-sm-6 about-content">					
					<div class="about-icon">
						<i class="fa fa-envelope"></i>							
					</div>
					<div class="about-text">
						<h3>24/7 Support</h3>
						<!-- <p>Lorem ipsum dolor sit amet elit sed do eiusmod tempor incilabore dolore magna aliqua.</p> -->
					</div>					
				</div>
				<div class="col-md-3 col-sm-6 about-content">					
					<div class="about-icon">
						<i class="fa fa-shield"></i>							
					</div>
					<div class="about-text">
						<h3>Great Security</h3>
						<!-- <p>Lorem ipsum dolor sit amet elit sed do eiusmod tempor incilabore dolore magna aliqua.</p> -->
					</div>					
				</div>
			</div>
		</div>
	</section><!--/#about us-->		
	
	<div class="parallax-section">
		<div class="parallax-content">
			<div class="color-overlay"></div>
			<div class="container text-center">
				<h2>VMD has unique and modern Products!</h2>
				<p>Develope for Creative Software</p>
				<!-- <a href="#" class="btn btn-primary">Book!</a> -->
			</div>
		</div>		
	</div><!--/parallax-section--> 
	
	<section id="why-us" class="padding-top">
		<div class="container">
			<div class="row text-center section-title">
				<div class="col-sm-8 col-sm-offset-2">
					<h2>Why Like <font color=#12bF98>Us</font></h2>
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p> -->
				</div>				
			</div>
			<div class="row text-center like-us">
				<div class="col-md-3 col-sm-6 about-content">
					<div class="about-icon">
						<i class="fa fa-bitbucket"></i>						
					</div>
					<div class="about-text">
						<h3>Fresh Design</h3>
						<!-- <p>Lorem ipsum dolor sit amet elit sed do eiusmod tempor incilabore dolore magna aliqua. </p> -->
					</div>
				</div>
				<div class="col-md-3 col-sm-6 about-content">
					<div class="about-icon">
						<i class="fa fa-cloud"></i>							
					</div>
					<div class="about-text">
						<h3>Useful features</h3>
						<!-- <p>Lorem ipsum dolor sit amet elit sed do eiusmod tempor incilabore dolore magna aliqua. </p> -->
					</div>					
				</div>
				<div class="col-md-3 col-sm-6 about-content">					
					<div class="about-icon">
						<i class="fa fa-cog"></i>							
					</div>
					<div class="about-text">
						<h3>Easy Customization</h3>
						<!-- <p>Lorem ipsum dolor sit amet elit sed do eiusmod tempor incilabore dolore magna aliqua. </p> -->
					</div>					
				</div>
				<!-- <div class="col-md-3 col-sm-6 about-content">					
					<div class="about-icon">
						<i class="fa fa-coffee"></i>							
					</div>
					<div class="about-text">
						<h3>Preset Style</h3>
						<p>Lorem ipsum dolor sit amet elit sed do eiusmod tempor incilabore dolore magna aliqua. </p>
					</div>					
				</div> -->
				<!-- <div class="col-md-3 col-sm-6 about-content">					
					<div class="about-icon">
						<i class="fa fa-laptop"></i>							
					</div>
					<div class="about-text">
						<h3>Free Updates</h3>
						<p>Lorem ipsum dolor sit amet elit sed do eiusmod tempor incilabore dolore magna aliqua. </p>
					</div>					
				</div> -->
				<div class="col-md-3 col-sm-6 about-content">					
					<div class="about-icon">
						<i class="fa fa-paper-plane"></i>							
					</div>
					<div class="about-text">
						<h3>Fully Responsive</h3>
						<!-- <p>Lorem ipsum dolor sit amet elit sed do eiusmod tempor incilabore dolore magna aliqua. </p> -->
					</div>					
				</div>
				<!-- <div class="col-md-3 col-sm-6 about-content">					
					<div class="about-icon">
						<i class="fa fa-leaf"></i>							
					</div>
					<div class="about-text">
						<h3>Dropdown Menu</h3>
						<p>Lorem ipsum dolor sit amet elit sed do eiusmod tempor incilabore dolore magna aliqua. </p>
					</div>					
				</div> -->
				<!-- <div class="col-md-3 col-sm-6 about-content">					
					<div class="about-icon">
						<i class="fa fa-group (alias)"></i>							
					</div>
					<div class="about-text">
						<h3>Typhography</h3>
						<p>Lorem ipsum dolor sit amet elit sed do eiusmod tempor incilabore dolore magna aliqua.</p>
					</div>					
				</div>				 -->
			</div>
		</div>
	</section><!--/why-us--> 
	
	<div id="promo-two" class="text-center parallax-section">
		<div class="parallax-content">
			<div class="color-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<i class="fa fa-clock-o"></i>	
						<h3 class="timer" data-to="400" data-speed="7000" data-from="0">hidden-time</h3>					
						<h4>Hours Of Work</h4>
					</div>
					<div class="col-sm-3">
						<i class="fa fa-heart"></i>	
						<h3 class="timer" data-to="14" data-speed="5000" data-from="0">hidden-time</h3>
						<h4>Clients Worked</h4>
					</div>
					<div class="col-sm-3">
						<i class="fa fa-paper-plane"></i>	
						<h3 class="timer" data-to="14" data-speed="5000" data-from="0">hidden-time</h3>
						<h4>Project Done</h4>
					</div>
					<div class="col-sm-3">
						<i class="fa fa-coffee"></i>	
						<h3 class="timer" data-to="1050" data-speed="5000" data-from="0">hidden-time</h3>
						<h4>Cups of Coffee</h4>
					</div>
				</div>			
			</div>
		</div>		
	</div><!--/parallax-section-->		
	
	<!-- <section id="why-VMD" class="padding-top padding-bottom">
		<div class="container">
			<div class="row text-center section-title">
				<div class="col-sm-8 col-sm-offset-2">
					<h2> Why <span><font color=#12bF98>VMD</font></span></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
				</div>				
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="row VMD-tab">
						<div class="col-sm-3">
							<ul class="tab-list" role="tablist">
								<li class="active"><a href="#html5" role="tab" data-toggle="tab"><i class="fa fa-html5"></i> HTML5</a></li>
								<li><a href="#css3" role="tab" data-toggle="tab"><i class="fa fa-css3"></i> CSS3</a></li>
								<li><a href="#web-design" role="tab" data-toggle="tab"><i class="fa fa-paper-plane"></i> Design</a></li>
							</ul>
						</div>
						<div class="col-sm-9">
							<div class="tab-content">
								<div class="tab-pane fade in active off-white" id="html5">
									<h2>We love to work with HTML5</h2>
									<img class="img-responsive" src="<?=base_url()?>appsources/images/accordion/accordion1.jpg" alt="accordion" />
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse </p>
								</div>
								<div class="tab-pane fade off-white" id="css3">
									<h2>We love to work with CSS3</h2>
									<img class="img-responsive" src="<?=base_url()?>appsources/images/accordion/accordion2.jpg" alt="accordion" />
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse </p>
								</div>
								<div class="tab-pane fade off-white" id="web-design">
									<h2>We love to Design</h2>
									<img class="img-responsive" src="<?=base_url()?>appsources/images/accordion/accordion3.jpg" alt="accordion" />
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse </p>
								</div>
							</div>	
						</div>
					</div>	
				</div>
				<div class="col-sm-6">
					<div class="panel-group" id="accordion-two">
						<div class="panel panel-default">
							<div class="panel-heading active">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion-two" href="#professional"><i class="fa fa-magic"></i> Professional Design</a>
								</h4>
							</div>
							<div id="professional" class="panel-collapse collapse in">
								<div class="panel-body">									
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion-two" href="#customization"><i class="fa fa-cogs"></i> Easy Customization</a>
								</h4>
							</div>
							<div id="customization" class="panel-collapse collapse">
								<div class="panel-body">									
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion-two" href="#support"> <i class="fa fa-envelope"></i> 24/7 Support</a>
								</h4>
							</div>
							<div id="support" class="panel-collapse collapse">
								<div class="panel-body">									
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion-two" href="#help-desk"><i class="fa fa-bitbucket"></i> Live Help Desk</a>
								</h4>
							</div>
							<div id="help-desk" class="panel-collapse collapse">
								<div class="panel-body">									
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
								</div>
							</div>
						</div>
					</div>				
				</div>
			</div>
		</div>
	</section>/#why-VMD -->
	
	<section id="portfolio" class="padding-top padding-bottom off-white">
		<div class="container">
			<div class="row text-center section-title">
				<div class="col-sm-8 col-sm-offset-2">
					<h2>Portfolio</h2>
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p> -->
				</div>				
			</div>			
			<div class="portfolio-wrapper">
				<ul class="portfolio-filter text-center">                                         
					<li><a class="active" href="#" data-filter="*">All</a></li>	
					<li><a href="#" data-filter=".photography">Website</a></li>
					<li><a href="#" data-filter=".video">Mobile</a></li>
				</ul><!--/#portfolio-filter-->
				
				<div class="row portfolio-items">
					<div class="col-sm-4 col-md-3 portfolio-item print-design video">
						<div class="portfolio-content">
							<source src="<?=base_url()?>appsources/images/portfolio/kocag.mp4" alt="">
							<div class="folio-overlay">
								<a class="folio-link" href="#"><i class="fa fa-link"></i></a>
								<a class="folio-detail" href="<?=base_url()?>appsources/images/kocag.mp4" data-gallery="prettyPhoto"><i class="fa fa-plus"></i></a>
							</div>
						</div>	
					</div>
					<div class="col-sm-4 col-md-3 portfolio-item print-design art">
						<div class="portfolio-content">
							<img class="img-responsive" src="<?=base_url()?>appsources/images/portfolio/3.jpg" alt="">
							<div class="folio-overlay">
								<a class="folio-link" href="#"><i class="fa fa-link"></i></a>
								<a class="folio-detail" href="<?=base_url()?>appsources/images/portfolio/port-full.jpg" data-gallery="prettyPhoto"><i class="fa fa-plus"></i></a>
							</div>
						</div>	
					</div>
					<div class="col-sm-4 col-md-3 portfolio-item video art">
						<div class="portfolio-content">
							<img class="img-responsive" src="<?=base_url()?>appsources/images/portfolio/5.jpg" alt="">
							<div class="folio-overlay">
								<a class="folio-link" href="#"><i class="fa fa-link"></i></a>
								<a class="folio-detail" href="<?=base_url()?>appsources/images/portfolio/port-full.jpg" data-gallery="prettyPhoto"><i class="fa fa-plus"></i></a>
							</div>
						</div>	
					</div>
					<div class="col-sm-4 col-md-3 portfolio-item photography graphic">
						<div class="portfolio-content">
							<img class="img-responsive" src="<?=base_url()?>appsources/images/portfolio/6.jpg" alt="">
							<div class="folio-overlay">
								<a class="folio-link" href="#"><i class="fa fa-link"></i></a>
								<a class="folio-detail" href="<?=base_url()?>appsources/images/portfolio/port-full.jpg" data-gallery="prettyPhoto"><i class="fa fa-plus"></i></a>
							</div>
						</div>	
					</div>
					<div class="col-sm-4 col-md-3 portfolio-item video art">
						<div class="portfolio-content">
							<img class="img-responsive" src="<?=base_url()?>appsources/images/portfolio/7.jpg" alt="">
							<div class="folio-overlay">
								<a class="folio-link" href="#"><i class="fa fa-link"></i></a>
								<a class="folio-detail" href="<?=base_url()?>appsources/images/portfolio/port-full.jpg" data-gallery="prettyPhoto"><i class="fa fa-plus"></i></a>
							</div>
						</div>						
					</div>
					<div class="col-sm-4 col-md-3 portfolio-item photography graphic print-design">
						<div class="portfolio-content">
							<img class="img-responsive" src="<?=base_url()?>appsources/images/portfolio/8.jpg" alt="">
							<div class="folio-overlay">
								<a class="folio-link" href="#"><i class="fa fa-link"></i></a>
								<a class="folio-detail" href="<?=base_url()?>appsources/images/portfolio/port-full.jpg" data-gallery="prettyPhoto"><i class="fa fa-plus"></i></a>
							</div>
						</div>	
					</div>					
				</div>				
			</div>
		</div>
	</section><!--/#portfolio-->	
	
	<section id="our-team" class="padding-top padding-bottom">
        <div class="container">
			<div class="row text-center section-title">
				<div class="col-sm-8 col-sm-offset-2">
					<h2>our <font color=#12bF98>happy</font> team</h2>
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p> -->
				</div>				
			</div>	
            <div class="team-members text-center">
                <div class="row">
                    <div class="col-sm-5 col-md-3 space-photo1">
						<div class="member">
							<div class="member-image">
								<img class="img-responsive" src="<?=base_url()?>appsources/images/team/rendi.jpeg" alt="">
								<div class="member-overlay">
									<a href="#"><i class="fa fa-plus"></i></a>	
								</div>
							</div>																
							<div class="member-info">
								<h4><b>Rendy Sutandy</b></h4>
								<p>Founder</p>
							</div>							
							<ul class="member-social">
								<li><a class="facebook" target="_blank" href="https://www.facebook.com/rendy14s"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" target="_blank" href="https://www.instagram.com/rendy14s"><i class="fa fa-instagram"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
                    </div>
                    <div class="col-sm-5 col-md-3 space-photo1">
						<div class="member">
							<div class="member-image">
								<img class="img-responsive" src="<?=base_url()?>appsources/images/team/fasha.jpeg">
								<div class="member-overlay">
									<a href="#"><i class="fa fa-plus"></i></a>	
								</div>
							</div>												
							<div class="member-info">
								<h4><b>Fasha Darullah</b></h4>
								<p>Co-Founder</p>
							</div>							
							<ul class="member-social">
								<li><a class="facebook" target="_blank" href="https://www.facebook.com/fashahdarullah"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" target="_blank" href="https://www.instagram.com/fashahdarullah"><i class="fa fa-instagram"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
							
							</ul>
						</div>
                    </div>
                   <div class="col-sm-5 col-md-3 space-photo1" >
						<div class="member">
							<div class="member-image">
								<img class="img-responsive" src="<?=base_url()?>appsources/images/team/aji.png">
								<div class="member-overlay">
									<a href="#"><i class="fa fa-plus"></i></a>	
								</div>
							</div>													
							<div class="member-info">
								<h4><b>Aji Tirta </b></h4>
								<p>Mobile Developer</p>
							</div>							
							<ul class="member-social">
								<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
							
							</ul>
						</div>
                    </div>
                    <div class="col-sm-5 col-md-3 space-photo1">
						<div class="member">
							<div class="member-image">
								<img class="img-responsive" src="<?=base_url()?>appsources/images/team/wira.jpeg" alt="">
								<div class="member-overlay">
									<a href="#"><i class="fa fa-plus"></i></a>	
								</div>
							</div>											
							<div class="member-info">
								<h4><b>Wira Satria</b></h4>
								<p>Mobile Developer</p>
							</div>							
							<ul class="member-social">
								<li><a class="facebook" target="_blank" href="https://www.facebook.com/satria.d.kusuma.31"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" target="_blank" href="https://www.instagram.com/s_wira"><i class="fa fa-instagram"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					
				<div class="col-sm-5 col-md-3 space-photo">
						<div class="member">
							<div class="member-image">
								<img class="img-responsive" src="<?=base_url()?>appsources/images/team/akis.jpeg" alt="">
								<div class="member-overlay">
									<a href="#"><i class="fa fa-plus"></i></a>	
								</div>
							</div>											
							<div class="member-info">
								<h4><b>Akis Latuconsina</b></h4>
								<p>Mobile Developer</p>
							</div>							
							<ul class="member-social">
								<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-5 col-md-3 space-photo">
						<div class="member">
							<div class="member-image">
								<img class="img-responsive" src="<?=base_url()?>appsources/images/team/wantek.jpeg" alt="">
								<div class="member-overlay">
									<a href="#"><i class="fa fa-plus"></i></a>	
								</div>
							</div>											
							<div class="member-info">
								<h4><b>Haryanto S</b></h4>
								<p>Mobile Developer</p>
							</div>							
							<ul class="member-social">
								<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-5 col-md-3 space-photo">
						<div class="member">
							<div class="member-image">
								<img class="img-responsive" src="<?=base_url()?>appsources/images/team/riki.jpeg" alt="">
								<div class="member-overlay">
									<a href="#"><i class="fa fa-plus"></i></a>	
								</div>
							</div>											
							<div class="member-info">
								<h4><b>Ricky Hermawan</b></h4>
								<p>Web Developer</p>
							</div>							
							<ul class="member-social">
								<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>					
					<div class="col-sm-5 col-md-3 space-photo">
						<div class="member">
							<div class="member-image">
								<img class="img-responsive" src="<?=base_url()?>appsources/images/team/contact-bg.jpg" alt="">
								<div class="member-overlay">
									<a href="#"><i class="fa fa-plus"></i></a>	
								</div>
							</div>											
							<div class="member-info">
								<h4><b>Rizki Ramadhan</b></h4>
								<p>Web Developer</p>
							</div>							
							<ul class="member-social">
								<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					
					<div class="col-sm-5 col-md-3 space-photo">
						<div class="member">
							<div class="member-image">
								<img class="img-responsive" src="<?=base_url()?>appsources/images/team/komeng.jpeg" alt="">
								<div class="member-overlay">
									<a href="#"><i class="fa fa-plus"></i></a>	
								</div>
							</div>											
							<div class="member-info">
								<h4><b>Rizky Maulana</b></h4>
								<p>Web Developer</p>
							</div>							
							<ul class="member-social">
								<li><a class="facebook" target="_blank" href="https://www.facebook.com/profile.php?id=100007477837967&ref=bookmarks"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" target="_blannk" href="https://www.instagram.com/rizky_mulder/"><i class="fa fa-instagram"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>	
					
					<div class="col-sm-5 col-md-3 space-photo">
						<div class="member">
							<div class="member-image">
								<img class="img-responsive" src="<?=base_url()?>appsources/images/team/raka.jpeg" alt="">
								<div class="member-overlay">
									<a href="#"><i class="fa fa-plus"></i></a>	
								</div>
							</div>											
							<div class="member-info">
								<h4><b>Raka Saputra</b></h4>
								<p>Web Developer</p>
							</div>							
							<ul class="member-social">
								<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>	
				
					<div class="col-sm-5 col-md-3 space-photo">
						<div class="member">
							<div class="member-image">
								<img class="img-responsive" src="<?=base_url()?>appsources/images/team/akmal.jpg" alt="">
								<div class="member-overlay">
									<a href="#"><i class="fa fa-plus"></i></a>	
								</div>
							</div>											
							<div class="member-info">
								<h4><b>Akmal Fajar </b></h4>
								<p>Tehnical Writer</p>
							</div>							
							<ul class="member-social">
								<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>							
            </div>            
        </div>
    </section><!--/#Our team-->
	
	<section id="hot-VMD" class="padding-top off-white">
		<div class="container">
			<div class="row text-center section-title">
				<div class="col-sm-8 col-sm-offset-2">
					<h2>Hot with <font color=#12bF98> VMD </font></h2>
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p> -->
				</div>
			</div>
			<div class="hot-features">				
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="hot-feature">
							<div class="icon">
								<i class="fa fa-globe"></i>
							</div>
							<div class="feature">
								<h3>Web Design</h3>
								<p>Fresh with new design from us, not duplicate with other website.</p>
							</div>
						</div>
						<div class="hot-feature">
							<div class="icon">
								<i class="fa fa-paper-plane"></i>
							</div>
							<div class="feature">
								<h3>Bootstrap</h3>
								<p>Always responsive in desktop or mobile view ord container you are.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">	
						<img class="img-responsive" src="<?=base_url()?>appsources/images/hot-features/devices_2.png" alt="" />
					</div>				
					<div class="col-sm-6 col-md-4">
						<div class="hot-feature">
							<div class="icon">
								<i class="fa fa-camera"></i>
							</div>
							<div class="feature">
								<h3>Mobile</h3>
								<p>Powerfull with new framework and be done nice see with function and engine.</p>
							</div>
						</div>
						<div class="hot-feature">
							<div class="icon">
								<i class="fa fa-cog"></i>
							</div>
							<div class="feature">
								<h3>Desktop</h3>
								<p>With framework we build, we promise powerfull application.</p>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</section><!--/#hot-VMD-->
	
		
	<section id="our-clients" class="padding-top padding-bottom">
        <div class="container">
			<div class="row text-center section-title">
				<div class="col-sm-8 col-sm-offset-2">
					<h2>our <font color=#12bF98>happy</font> clients</h2>
				</div>				
			</div>	

			<div class="center-client">
				<div class="three columns logos" style="height:120px;margin-top:10px;">
					<center>
						<a target="_blank" href="http://fwc.vmdindonesia.com/">   <img src="<?=base_url()?>appsources/images/team/logo.png" alt="okbisa" title="okbisa" width="80%">
						</a>
					</center>
				</div>

				<div class="three columns logos" style="height:120px;margin-top:10px;">
					<center>
						<img src="<?=base_url()?>appsources/images/team/tangsel.png" alt="okbisa" title="okbisa"  width="80%">
					</center>
				</div>
			</div>

		</div>
    </section><!--/#Our Client-->
		
	
	<section id="contact-us" class="parallax-section">
		<div class="parallax-content">
			<div class="color-overlay"></div>
			<div class="container">
				<div class="row text-center section-title">
					<div class="col-sm-8 col-sm-offset-2">
						<h2>Contact <font color=#12bF98>Us</font></h2>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p> -->
					</div>
				</div>
				<div class="col-sm-11 space-photo1">
				<div id="gmap"></div></div>
				<div class="col-sm-5 space-photo">

					<form id="contact-form" name="contact-form" method="post" action="#">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" name="name" class="form-control" required="required" placeholder="Name">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="email" name="email" class="form-control" required="required" placeholder="Email">
								</div>
							</div>
						</div>
						<div class="form-group">
							<input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
						</div>
						<div class="form-group">
							<textarea name="message" id="message" required="required" class="form-control" rows="4" placeholder="Message"></textarea>
						</div>                        
						<div class="form-group">
							<button type="submit" class="btn btn-submit">Send Message</button>
						</div>
					</form>
				</div>
				<div class="col-sm-6 space-photo">
					<div class="contact-info">
						<h3>Contact Info</h3>
						<ul>
							<li><i class="fa fa-phone"></i> Phone: (+62) 852 1910 0674</li>
							<li><i class="fa fa-map-marker"></i> DKI Jakarta, Jakarta Barat </li>
							<li><i class="fa fa-envelope"></i><a href="#"> vmd.idn@gmail.com</a></li>
						</ul>
						<p>Contact us for get a good deal performance, speed, quality and prices application!.</p>
						<div class="social-icons">
							<h3>Get in Touch</h3>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#contact-us-->	
		
	
	
	</div><!--/#gmap-->
	
	<footer id="footer">
		<div class="container text-center">
			<p>&copy; 2018 <a href="#">VMDTeam</a>. All rights reserved.</p>
		</div>
		<a data-scroll href="#main-carousel" class="to-top"><i class="fa fa-angle-up"></i></a>
	</footer><!--/#footer--> 
	
	<!--/#scripts--> 
    <script type="text/javascript" src="<?=base_url()?>appsources/js/jquery.js"></script>
    <script type="text/javascript" src="<?=base_url()?>appsources/js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="<?=base_url()?>appsources/js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
  	<script type="text/javascript" src="<?=base_url()?>appsources/js/jquery.parallax.js"></script>
	<script type="text/javascript" src="<?=base_url()?>appsources/js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>appsources/js/jquery.countTo.js"></script>
	<script type="text/javascript" src="<?=base_url()?>appsources/js/smooth-scroll.js"></script>
	<script type="text/javascript" src="<?=base_url()?>appsources/js/canvas.js"></script>
	<script type="text/javascript" src="<?=base_url()?>appsources/js/preloader.js"></script>
    <script type="text/javascript" src="<?=base_url()?>appsources/js/main.js"></script>	
	<script>
      function initMap() {
        var uluru = {lat: -6.184809, lng: 106.769687};
        var map = new google.maps.Map(document.getElementById('gmap'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxAi3Sea5HXwDIuyb2nk17Ew5pOANphs4&callback=initMap">
    </script>

</body>
</html>