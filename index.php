
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>HospiAsset</title>
		<!-- core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/animate.min.css" rel="stylesheet"> 
		<link href="css/prettyPhoto.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet"> 
		<link href="http://cdn.jsdelivr.net/rupyainr/1.0.0/rupyaINR.min.css" rel="stylesheet">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css"> 
		<link rel="stylesheet" type="text/css" href="css/slider-style.css" />
		<link rel="stylesheet" type="text/css" href="css/slider-custom.css" />
		<!--Slider of Clients -->
		<link rel="stylesheet" type="text/css" href="css/elastislide.css" />
		<!-- Slider of Clients -->
		
		<!-- Js for Slider of Clients -->
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
		<!-- Js for Slider of Clients -->
		<script src="//cdn.jsdelivr.net/rupyainr/1.0.0/rupyaINR.min.js"></script>
		<script src="js/jquery.js"></script>
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->       
		<link rel="shortcut icon" href="images/ico/favicon.ico"> 
		<style>
			.clearable{
				  background: #fff url(./images/close.gif) no-repeat right -10px center;
				  border: 1px solid #999;
				  padding: 3px 18px 3px 4px;     /* Use the same right padding (18) in jQ! */
				  border-radius: 3px;
				  transition: background 0.4s;
			}
			.clearable.x{ 
				background-position: right 5px center; 
			} /* (jQ) Show icon */
		   .x { 
				background-position: right 5px center; 
			} /* (jQ) Show icon */
			.clearable.onX{ 
				cursor: pointer; 
			} 
			
			.about{
				margin-left:25px;
				color:#E1A629;
			}
			
			.span12{
					width:1329px;
					height: 300px;
					margin-left: 20px;
			}
			
			.image-content{
				float:left;
				width:400px;
			}
			.content{
				    margin-left: 586px;	
					height: 290px;
					border: 2px solid #1C5792;
			}
			.feature-content{
					height: 290px;
					border: 2px solid #1C5792;
					width:720px;
					float:left;
			}
			.feature-image{
				margin-left: 800px;
			}
			ul{
				list-style: none;
	        }
			.span12 ul li:before {
					content: "\2192 \0020";
					color:#18C0DF;
					font-size: 1.4em;
					font-weight: bold;
			}
			
		    #main-nav.navbar-default .navbar-nav > li.active > a, #main-nav.navbar-default .navbar-nav > li:hover > a {
				 background: #3AB1F2;!important;
				 border-top: 4px solid #3AB1F2;!important;
			} 
		</style>
		<script>
		function setTextVal(prc)
		{
			document.getElementById('price_type').value=prc;
			document.getElementById('price_type').className="form-control clearable x onX";
		}
		</script>
		<script>
			jQuery(function($) {
			  function tog(v){return v?'addClass':'removeClass';} 
			  
			  $(document).on('input', '.clearable', function(){
				$(this)[tog(this.value)]('x');
			  }).on('mousemove', '.x', function( e ){
				$(this)[tog(this.offsetWidth-18 < e.clientX-this.getBoundingClientRect().left)]('onX');   
			  }).on('touchstart click', '.onX', function( ev ){
				ev.preventDefault();
				$(this).removeClass('x onX').val('').change();
			  });  
			});
		</script> 
	</head> 
	<body id="home">
		<header id="header">
			<nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php"><img src="images/logo1.png"  alt="logo" width="100" height="65"></a>
					</div>
					<div class="collapse navbar-collapse navbar-right">
						<ul class="nav navbar-nav">
							<li class="scroll active"><a href="#home">Home</a></li>  
							<li class="scroll"><a href="#aboutus">About US</a></li> 
							<li class="scroll"><a href="#features">Features</a></li>
							<li class="scroll"><a href="./hospiasset">Play</a></li>
							<!--<li class="scroll"><a href="#clients">Clients</a></li>--->
							<li class="scroll"><a href="#contact-us">Contact</a></li>                        
						</ul>
					</div>
				</div><!--/.container-->
			</nav><!--/nav-->
		</header><!--/header-->
		<section class="demo-2">
			<img src="images/slider2.jpg" style="width:1349px;" data-src-600px="image-600px.jpg" data-src-800px="image-800px.jpg">
		</section><!--/#main-slider-->
		<section id="aboutus" style="padding-top: 29px;">
			<div>
				<h3 class="about">About Us</h3>
				<p class="wow fadeInDown" style="margin-left:35px;">
				Renown Analytics IT Solutions is keen into project development and implementations with expertise in Statistical Analysis, Advanced Analytics, Business Intelligence, Application Development, Application Maintenance Service, Web Development, Infrastructure, Engineering, Bio-Informatics, and Logistics & Health Care based applications and other IT enables services.

				Renown Analytics is pleased to propose a solution which is a Decentralized, Real Time Tracking & Monitoring System, a simple solution for biomedical department. It would help to manage important operations, like Asset Management (Indents, Adverse Incidents, contracts, condemnation), Call Management, Reports, Rounds, Trainings.

				The proposed solution connects all the stakeholders (Doctors/Nurses – End Users, BME department and support engineers) to work and deliver desired outcomes in a cooperative fashion. It enables business process re-engineering by eliminating the manual approach and making the process automated. The solutions help intended to update and access the information by eligible user’s on-the-go anytime anywhere hence, evidencing quick decision making. This results in decreased equipment downtime in turn saving on Effort, Time and Economy.</p>
			</div>
			<div>
				<h3 class="about">Solution Benefits</h3>
				<div class="span12">
					<div class="image-content">
						<img src="images/hospital-management-softwar.jpg">
					</div>
					<div class="content">
						<ul>
							<li>Anytime Anywhere Data access and update: On the go information access, view and update</li>
							<li>Cross Platform: Web and mobile app operability - Simple User Interface</li>
							<li>Savings: Saving on Effort, Time and Economy</li>
							<li>Free from garbage and repeated Data: No redundancy of equipment of data</li>
							<li>Custom Reports: Report generation is simple from the data of database. Reports like Call Management System, MPR, Quarterly, Annually, and Asset Summary List. can be created quickly</li>
							<li>In built call management process: No need to inform any one for Pending Calls. Solution supports the Call Management Features like Calls, Rounds, and Training Events etc</li>
							<li>Easy Training: Training Events can be conducted within quick intervals with one notification and all receive it those who are eligible for attending the training</li>
						</ul>
					</div>
				</div>
			</div>
			<div>
				<h3 class="about">Solution Features</h3>
				<div class="span12">
					<div class="feature-content">
						<ul>
							<li>Central Data Repository</li>
							<li>In Built - Call management System</li>
							<li>In Built - Resource/ Effort efficient monitoring and tracking system</li>
							<li>Collaborative planning & action system</li>
							<li>Custom Reports and Dashboards generating System</li>
							<li>Security – Data cannot be downloaded on any device until allowed by the higher authority or management</li>
							<li>Simultaneous Mobile and Desktop Operability</li>
							<li>Interoperability: Platform API to integrate with other applications to allow hybrid functionality </li>
						</ul>
					</div>
					<div class="feature-image">
						<img src="images/5123.jpg">
					</div>
				</div>
			</div>
			<!-- <div>
				<h3 class="about">Solution Benefits</h3>
				<div class="span12">
					<div class="image-content">
						<img src="images/hospital-management-softwar.jpg">
					</div>
				</div>
			</div>-->
		</section><!--/#services-->
	    <section class="testimonial-area" id="features">
			<div class="container">
				<div class="col-md-12">
					<div class="section-header">
						<h2 class="section-title wow fadeInDown">Features</h2>
						<p class="wow fadeInDown"></p>
					</div>
					<div id="myCarousel" class="carousel slide">
								<!-- Carousel items -->
						<div class="carousel-inner">
							<div class="item active">
								<div class="row">
									<div class="col-md-3">
										<div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
											<div class="row">
												<center>
													<div class="service-item">
														<h4>Escalations</h4>
														<i class="service-icon fa fa-tasks"></i>
													</div>
													<div class="col-xs-9 half-gutter">
													</div>
												</center>
											</div>
											<div class="row">
												<div class="col-xs-12">
													<blockquote>
													Admin can create escalation levels for all type of calls like emergency,scheduled, contracts etc.
													</blockquote>
												</div>
											</div>
										
										</div>
									</div>
									
									<div class="col-md-3">
										<div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
											<div class="row">
												<center>
													<div class="service-item">
														<h4>Scheduled Reporting</h4>
													<i class="service-icon fa fa-list-alt"></i>
													</div>
													<div class="col-xs-9 half-gutter">
													</div>
												</center>
											</div>
											<div class="row">
												<div class="col-xs-12">
													<blockquote>
														Create, schedule, run and share reports to fit your needs
													</blockquote>
												</div>
											</div>
										
										</div>
									</div>
									
									<div class="col-md-3">
										<div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
											<div class="row">
												<center>
													<div class="service-item">
														<h4>Call Management System</h4>
														<i class="service-icon fa fa-phone-square"></i>
													</div>
													<div class="col-xs-9 half-gutter">
													</div>
												</center>
											</div>
											<div class="row">
												<div class="col-xs-12">
													<blockquote>
													Call Management System is designed for businesses with complex contact-center operations and high call volume, Call Management System is a database, administration, and reporting application to help businesses identify operational issues and take immediate action to solve them
													</blockquote>
												</div>
											</div>
										
										</div>
									</div>
									<div class="col-md-3">
										<div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
											<div class="row">
												<center>
													<div class="service-item">
														<h4>Contracts</h4>
														<i class="service-icon fa fa-pencil-square-o"></i>
													</div>
													<div class="col-xs-9 half-gutter">
													</div>
												</center>
											</div>
											<div class="row">
												<div class="col-xs-12">
													<blockquote>
													 free alerts for contracts renewals and contracts comparism between the vendors
													</blockquote>
												</div>
											</div>
										
										</div>
									</div>
								</div>
										<!--/row-->
							</div>
							<!--/item-->
							<div class="item">
								<div class="row">
									<div class="col-md-3">
										<div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
											<div class="row">
												<center>
													<div class="service-item">
														<h4>Transfers</h4>
														<i class="service-icon fa fa-share-square-o"></i>
													</div>
													<div class="col-xs-9 half-gutter">
													</div>
												</center>
											</div>
											<div class="row">
												<div class="col-xs-12">
													<blockquote>
													Easy way to transfer asset from one location to other location & status of that equipment
													</blockquote>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
											<div class="row">
												<center>
													<div class="service-item">
														<h4>Alerts</h4>
													<i class="service-icon fa fa-exclamation-triangle"></i>
													</div>
													<div class="col-xs-9 half-gutter">
													</div>
												</center>
											</div>
											<div class="row">
												<div class="col-xs-12">
													<blockquote> 
													Alerts For Schedule calls, Contract renewals, pending calls,Low stock.
													</blockquote>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
											<div class="row">
												<center>
													<div class="service-item">
														<h4>Data Import</h4>
														<i class="service-icon fa fa-file"></i>
													</div>
													<div class="col-xs-9 half-gutter">
													</div>
												</center>
											</div>
											<div class="row">
												<div class="col-xs-12">
													<blockquote>Import your data quickly and easily from an Excel spreadsheet or text or CSV file
													</blockquote>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
											<div class="row">
												<center>
													<div class="service-item">
														<h4>Stock</h4>
														<i class="service-icon fa fa-line-chart"></i>
													</div>
													<div class="col-xs-9 half-gutter">
													</div>
												</center>
											</div>
											<div class="row">
												<div class="col-xs-12">
													<blockquote>Track quantity–based or more complex inventory such as batch-lot and serialized inventory
													</blockquote>
												</div>
											</div>
										
										</div>
									</div>
								</div>
								<!--/row-->
							</div>
							<!--/item-->
							<div class="item">
								<div class="row">
									<div class="col-md-3">
										<div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
											<div class="row">
												<center>
													<div class="service-item">
														<h4>Viability</h4>
														<i class="service-icon fa fa-check"></i>
													</div>
													<div class="col-xs-9 half-gutter">
												</div>
												</center>
											</div>
											<div class="row">
												<div class="col-xs-12">
													<blockquote>
													Calculate asset Viability over its life, book value and expenses. Use all methods of computing depreciation.
													</blockquote>
												</div>
											</div>
										</div>
									</div>
									
									<div class="col-md-3">
										<div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
											<div class="row">
												<center>
												<div class="service-item">
													<h4>Vendor Rating</h4>
													<i class="service-icon fa fa-star"></i>
												</div>
												<div class="col-xs-9 half-gutter">
												</div>
												</center>
											</div>
											<div class="row">
												<div class="col-xs-12">
													<blockquote>
													Vendor rating may take the form of a hierarchical ranking from poor to excellent and whatever rankings the firm chooses to insert in between the two. For some firms, the vendor rating may come in the form of some sort of award system or as some variation of certification
													</blockquote>
												</div>
											</div>
										
										</div>
									</div>
									
									<div class="col-md-3">
										<div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
											<div class="row">
												<center><div class="service-item">
													<h4>Employee Rating</h4>
												<i class="service-icon fa fa-star"></i>
												</div>
												<div class="col-xs-9 half-gutter">
												</div></center>
											</div>
											<div class="row">
												<div class="col-xs-12">
													<blockquote>
													Employee appraisal systems help managers evaluate employee job performance and develop a fair system of pay increases and promotions. Appraisals in turn can help staff members improve performance, and assist companies in devising or reorganizing job functions to better fit the position or the employee.
													</blockquote>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
											<div class="row">
												<center>
													<div class="service-item">
														<h4>Customized Reports</h4>
													<i class="service-icon fa fa-bar-chart"></i>
													</div>
													<div class="col-xs-9 half-gutter"></div>
												</center>
											</div>
											<div class="row">
												<div class="col-xs-12">
													<blockquote>
													A Custom Report is a report that you create. You pick the dimensions (Asset, Vendor, Manufacturer, Abuse, Contracts etc.) and metrics (Duration,price,type) and decide how they should be displayed. You must specify at least one dimension and one metric
													</blockquote>
												</div>
											</div>
										
										</div>
									</div>
								</div>
								<!--/row-->
							</div>
							<!--/item-->
						</div>
						<!--/carousel-inner--> 
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>

						<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
					</div>
								<!--/myCarousel-->
							<!--/well-->
				</div>
			</div>
		</section>
		<section id="play">
			<div class="container">
				<div class="section-header">
					<h2 class="section-title wow fadeInDown">Pricing</h2>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="wow zoomIn border-box1" data-wow-duration="400ms" data-wow-delay="0ms">
							<ul class="pricing">
								<li class="plan-header">
									<div class="plan-head1">
										<div class="plan-name" style="">
											FREE
										</div>
									</div>
									<div class="price-duration">
										<div class="price">
										  <span class="price rupyaINR"> </span> 
										</div>
										<!-- <span class="duration">
											per month
										</span> -->
										<div class="duration plan-purchase">
											<a class="btn btn-primary" href="#contact-us" onclick="setTextVal('Free')">Get It Now!</a>
										</div>
									</div>
								</li>
								<li class="pad-bot-10">Start Your Free Trial</li>
								<li class="pad-bot-10">Limited to single Dept</li>
								<li class="pad-bot-10">Limited to 3 Users</li>
								<li class="pad-bot-10">Includes 1 GB Space </li>
								<li class="pad-bot-10">Cloud Hosted SaaS or Locally Installed</li>
								<li class="pad-bot-10">Flexible, Affordable and Fast</li> 
								<li class="pad-bot-10">Free Getting started Training</li>
								<li class="pad-bot-10">Email Support</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="wow zoomIn border-box1" data-wow-duration="400ms" data-wow-delay="0ms">
							<ul class="pricing">
								<li class="plan-header">
									<div class="plan-head2">
										<div class="plan-name1">
											PREMIUM
										</div>
									</div>
									<div class="price-duration">
										<span class="price">
											&nbsp;
										</span>
										<!-- <span class="duration">
											per month
										</span> -->
										<div class="duration plan-purchase">
											<a class="btn btn-primary" href="#contact-us" onclick="setTextVal('Premium')">Get It Now!</a>
										</div>
									</div>
								</li>
								<li class="pad-bot-10">Request a Demo</li>  
								<li class="pad-bot-10">Single  Unit</li>   
								<li class="pad-bot-10">Limited to 10 users</li> 
								<li class="pad-bot-10">Includes 5 GB Space </li> 
								<li class="pad-bot-10">Cloud Hosted SaaS or Locally Installed</li> 
								<li class="pad-bot-10">Flexible, Affordable and Fast</li> 
								<li class="pad-bot-10">Free Getting started Training</li> 
								<li class="pad-bot-10">24X7 Support Via Email,Chat and Phone</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="wow zoomIn border-box1" data-wow-duration="400ms" data-wow-delay="0ms">
							<ul class="pricing">
								<li class="plan-header">
									<div class="plan-head1">
										<div class="plan-name" style="">
											ENTERPRISE
										</div>
									</div>
									<div class="price-duration">
										<span class="price">
											&nbsp;
										</span>
										<!-- <span class="duration">
											per month
										</span> -->
										<div class="duration plan-purchase">
											<a class="btn btn-primary" href="#contact-us" onclick="setTextVal('Enterprise')">Get It Now!</a>
										</div>
									</div>
								</li>
								<li class="pad-bot-10">Request a Demo</li> 
								<li class="pad-bot-10">Multiple Units</li> 
								<li class="pad-bot-10">Unlimited Users</li>
								<li class="pad-bot-10">Starts with 10 GB space</li>
								<li class="pad-bot-10">Cloud Hosted SaaS or Locally Installed</li>
								<li class="pad-bot-10">Flexible, Affordable and Fast</li>   
								<li class="pad-bot-10">Free Getting started Training</li>  
								<li class="pad-bot-10">24X7 Support Via Email,Chat and Phone</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section><!--/#pricing-->
		<!--<section style="background-color:#d5c9cf;padding: 100px 0 10px;" id="clients">
			<div class="container">
				<div class="section-header">
					<h2 class="section-title wow fadeInDown">Clients</h2>
					<p class="wow fadeInDown"></p>
				</div>
				<ul id="carousel1" class="elastislide-list">
					<?php /*<?php
						$query = "select LOGO from hsp_tbl_organizations order by ORG_AID ASC";
						$fetch = mysqli_query($db,$query);
						if (mysqli_num_rows($fetch) > 0) {
							while($row = mysqli_fetch_assoc($fetch)){
								if($row['LOGO'] != ""){
					?>
					<li><a href="#"><img src="<?php echo $row['LOGO'];?>"/></a></li>
					<?php
								}
							}
						}
					?> */ ?>
				</ul>
			</div>
		</section> -->
		<section id="contact-us">
			<div class="container">
				<div class="section-header">
					<h2 class="section-title wow fadeInDown">Contact Us</h2>
				</div>
			</div>
			<div class="container">
				<div class="container contact-info">
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<div class="contact-form">
								<h3>Contact Info</h3>
								<address>
									<ul class="contact-info" style="list-style-type:none;">
										<li><i class="fa fa-map-marker"></i>  Address</li>
										<li style="padding-left:16px;">Renown Analytics IT Solutions Pvt Ltd. #502A, Prashanthi Ram Towers, Near Sarathi Studio, Yousufguda Road, Hyderabad-500016, INDIA.</li>
										<li><i class="fa fa-phone"></i> +91 40 69998567</li>
										<li><i class="fa fa-envelope"></i> info@renownanalytics.com</li>
										<li><i class="fa fa-globe"></i> www.renownanalytics.com</li>
									</ul>
								</address>
							</div>
						</div>
						<div class="col-sm-8 col-md-8">
							<div class="contact-form">
								<form name="form" class="form-horizontal" role="form" autocomplete="off" >
									<div class="form-group">
										<label class="control-label col-sm-4" for="pricing">Plan:</label>
										<div class="col-sm-6">
										  <input type="text" class="form-control clearable" name="price_type" id="price_type" value="">
										</div>
									 </div>
									<div class="form-group">
										<label class="control-label col-sm-4" for="name">Name:</label>
										<div class="col-sm-6">
										  <input type="text" class="form-control" name="name" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-4" for="designation">Designation:</label>
										<div class="col-sm-6">
										  <input type="text" class="form-control" name="des" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-4" for="designation">Mobile Number:</label>
										<div class="col-sm-6">
										  <input type="tale" pattern="[0-9]{10}" title="please enter 10 Digit Mobile Number" class="form-control" name="mno" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-4" for="email">Email:</label>
										<div class="col-sm-6">
										  <input type="email" class="form-control"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required name="email">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-4" for="hname">Hospital Name:</label>
										<div class="col-sm-6">
										  <input type="text" class="form-control" required name="hname">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-4" for="loc">Location:</label>
										<div class="col-sm-6"> 
										  <input type="text" class="form-control" required name="loc">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-4" for="hcap">Hospital Capacity:</label>
										<div class="col-sm-6"> 
										  <input type="text" class="form-control" required name="hcap">
										</div>
									</div>
									<div class="form-group"> 
										<div class="col-sm-offset-4 col-sm-6">
										  <button type="submit" class="btn btn-success" name="ContactButton">Submit</button>
										</div>
									</div>
								</form>
								<div class="form-group"> 
									<div class="col-sm-offset-4 col-sm-6">
									<?php
									
										if(isset($_POST['ContactButton']))
										{
											$to = "info@hospiasset.com";
											$subject = "HospiAsset Client Quote";
											$message = "
											<html>
											<head>
											<style>
											table,tr,th,td
											{
												border: 1px solid black;
												border-collapse:collapse;
											}
											th, td
											{
												padding:8px;
											}
											</style>
											</head>
											<table>
											<caption>Applicant Query</caption>
											<tr><th align='left'>Plan</th><td>".$_POST['price_type']."</td></tr>
											<tr><th align='left'>Name</th><td>".$_POST['name']."</td></tr>
											<tr><th align='left'>Designation</th><td>".$_POST['des']."</td></tr>
											<tr><th align='left'>Contact Number</th><td>".$_POST['mno']."</td></tr>
											<tr><th align='left'>Email ID</th><td>".$_POST['email']."</td></tr>
											<tr><th align='left'>Hospital Name</th><td>".$_POST['hname']."</td></tr>
											<tr><th align='left'>Location</th><td>".$_POST['loc']."</td></tr>
											<tr><th align='left'>Hospital Capacity</th><td>".$_POST['hcap']."</td></tr>
											</table>
											</body></html>
											";
											$headers = "MIME-Version: 1.0" . "\r\n";
											$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
											$headers .= 'From: '.$_POST['email']. "\r\n";
											$success = mail($to, $subject, $message, $headers);
											if($success)
											{
												echo"<script>alert('Thank you for your, we will contact you soon');window.location.href='';</script>";
											}
											else
											{	
												echo"<script>alert('Unable to process your request, please try again later');window.location.href='';</script>";
											}
										}
									?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>   
			</section><!--/#bottom-->
			<footer id="footer">
				<div class="container">
					<div class="row">
					  <div class="col-sm-6 fleft">
					<!-- <ul class="list-inline" >
							<li><a href="">Home</a></li>
							<li>&sdot;</li>
							<li class="scroll"><a href="#aboutus">About</a></li>
							<li>&sdot;</li>
							<li class="scroll"><a href="#contact-us">Contact</a></li>
					</ul> -->
					</div>
						<div class="col-sm-6 fright">
			<p class="copyright text-center medium">Copyright &copy; <a target="_blank" href="http://www.renownanalytics.com">Renown Analytics Pvt Ltd.</a>  All Rights Reserved </p>
				</div>
						</div>
					  
					</div>
				</div>
			</footer><!--/#footer-->
			<script src="js/userreg.js"></script>
			<script src="js/bootstrap.min.js"></script> 
			<script src="js/mousescroll.js"></script>
			<script src="js/smoothscroll.js"></script>
			<script src="js/jquery.prettyPhoto.js"></script>
			<script src="js/jquery.isotope.min.js"></script>
			<script src="js/jquery.inview.min.js"></script>
			<script src="js/wow.min.js"></script>
			<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
			<script type="text/javascript" src="js/jquery.slitslider.js"></script>
			<script type="text/javascript" src="js/slitslider-custom.js"></script>
			<script src="js/custom-scripts.js"></script>
			<script>
				$(document).ready(function(){
					$(".1").click(function(){
						$("#fade").fadeToggle("slow");
					});
				});
			</script>
			<script type="text/javascript">
				$(document).ready(function() {
					$('#myCarousel').carousel({
						interval: 3000
					})
					$('#myCarousel').on('slid.bs.carousel', function() {
						//alert("slid");
					});
				});
			</script>
			<script type="text/javascript" src="js/jquerypp.custom.js"></script>
			<script type="text/javascript" src="js/jquery.elastislide.js"></script>
			<script type="text/javascript">
				$( '#carousel1' ).elastislide( {
					// orientation 'horizontal' || 'vertical'
					orientation : 'horizontal',

					// sliding speed
					speed : 500,

					// sliding easing
					easing : 'ease-in-out',

					// the minimum number of items to show.
					// when we resize the window, this will make sure minItems are always shown
					// (unless of course minItems is higher than the total number of elements)
					minItems : 3,

					// index of the current item (left most item of the carousel)
					start : 0,
					autoplay : true,

					// click item callback
					onClick : function( el, position, evt ) { return false; },
					onReady : function() { return true; },
					onBeforeSlide : function() { return false; },
					onAfterSlide : function() { return false; }
				} ); 
			</script>
			<script type="text/javascript">
			
				var selector, elems, makeActive;
				selector = '.nav li';

				elems = document.querySelectorAll(selector);

				makeActive = function () {
					for (var i = 0; i < elems.length; i++)
						elems[i].classList.remove('active');

					this.classList.add('active');
				};

				for (var i = 0; i < elems.length; i++)
					elems[i].addEventListener('mousedown', makeActive);
			</script>
	</body>
</html>