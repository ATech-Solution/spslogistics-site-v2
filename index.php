<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<!-- Document Meta
    ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--IE Compatibility Meta-->
	<meta name="author" content="zytheme"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Multi-purpose Business html5 landing page">
	<link href="assets/img/favicon/faveicon.png" rel="icon">

	<!-- Fonts
    ============================================= -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMerriweather:300,300i,400,400i,700,700i,900,900i' rel='stylesheet' type='text/css'>

	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<!-- Stylesheets
    ============================================= -->
	<link href="assets/css/external.css" rel="stylesheet">
	<link href="assets/css/bootstrap.min_.css" rel="stylesheet">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">	 -->
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/custom-css.css" rel="stylesheet">
	<!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
	<script>
		// security     
	// disable copy paste html
	window.onload = () => {
	  const myInput = document.getElementsByClassName("inputClass");
	  myInput.onpaste = e => e.preventDefault();
	}

	// // google recaptcha
	// function onSubmit(token) {
	//   // alert('thanks ' + document.getElementById('field').value);
	//   // alert('grecaptcha')
	//   document.getElementById("signUpForm").submit();
	// }
	// // google recaptcha
	// function onSubmitContact(token) {
	//   document.getElementById("contactForm").submit();
	// }
	// function validate(event) {
	//   event.preventDefault();
	//   // if (!document.getElementById('field').value) {
	//   //   alert("You must add text to the required field");
	//   // } else {
	//     grecaptcha.execute();
	//   // }
	// }
	// function onloads() {
	//   var element = document.getElementById('submit');
	//   element.onclick = validate;
	// }
	// function onloadsContact() {
	//   var element = document.getElementById('submit');
	//   element.onclick = validate;
	// }
	
	</script>
	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/6549e70ba84dd54dc48944ae/1hekat293';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
	</script>
	<!--End of Tawk.to Script-->
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

	<!-- Document Title
    ============================================= -->
	<title>SPS | End To End Supply Chain & Logistics Solution</title>

	<!-- Google tag (gtag.js) -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11209400994"></script> -->
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'AW-11209400994');
	</script>
</head>

<body class="body-scroll home">
<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="wrapper clearfix">	<!-- Header
        ============================================= -->
	<?php if(isset($_GET['message'])){ ?>    
	    	<div class="top-notification" style="background-color: #06fb21;"><?php echo $_GET['message'];?></div>
	<?php } else { ?>
		<div class="top-notification"><a data-scroll="scrollTo" href="#sign-up-today"><strong>Click here</strong></a>  to SIGN UP TODAY to receive a <strong>free sourcing consultation</strong> & <strong>2 months free-storage</strong> with us!</div>
	<?php } ?>    

	<header id="navbar-spy" class="header header-1 header-transparent header-fixed">
		<nav id="primary-menu" class="navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				
				<a class="logo" href="index.php">
					<img class="logo-dark" src="assets/img/logo-sps.png" alt="Spslogistics Logo">
					<img class="logo-light" src="assets/img/logo-sps.png" alt="Spslogistics Logo">
				</a>
				</div>
				<div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
					<ul class="nav navbar-nav nav-pos-right navbar-right nav-split">
						<li class="active slider-active"><a data-scroll="scrollTo" href="#slider">Home</a></li>
						<li class="how-sps-works-active"><a data-scroll="scrollTo" href="#how-sps-works">How SPS works</a></li>
						<li class="pricing-active"><a data-scroll="scrollTo" href="#pricing">Pricing</a></li>
						<li class="about-active"><a data-scroll="scrollTo" href="#about">About us</a>
						<li class="footer-active"><a data-scroll="scrollTo" href="#footer">Contact us</a></li>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>
	</header>

	<!-- Slider #1
	=== === === === === === === === === === === === === === -->
	<!-- Streamline Your Sourcing and Logistics Today!
	Maximize cost efficiency with our Hong Kong headquarters, ensuring seamless operations and reduced lead times. -->
	<section id="slider" class="section slider">
		<div class="slide--item bg-overlay bg-overlay-darks">
			<div class="bg-section">
				<img src="assets/img/top-banner-background-with-shadow.png" class="desktopView" alt="top banner">
				<img src="assets/img/top-banner-background-with-shadow-mobile.png" class="mobileView" alt="top banner m">
			</div>
			<div class="container pb-50">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-sm-offset-3s col-md-6 col-md-offset-3s pl-30 text-center wow fadeInUp" data-wow-duration="1s">
						<div class="slide--headline text-left pr-50">Streamline Your <br>Sourcing and <br>Logistics Today!</div>
						<div class="slide--bio text-left desktopView pr-60">Maximize cost efficiency with our Hong Kong headquarters, ensuring seamless operations and reduced lead times.</div>	
						<div class="slide--bio text-left mobileView">Maximize cost efficiency with our <br>Hong Kong headquarters, ensuring <br>seamless operations and reduced <br>lead times.</div>	
					</div>	
					<div class="col-xs-12 col-sm-6 col-md-6 wow fadeInUp" data-wow-duration="1s">
						<img src="assets/img/testimonial-img.png" class="desktopView slideDesktopImg" alt="top banner">
						<img src="assets/img/testimonial-img-mobile.png" class="mobileView slideMobileImg" alt="top banner m">
					</div>
				</div>
				<!-- .row end -->
			</div>
			<!-- .container end -->
		</div>
		<!-- .slide-item end -->
	</section>
	<!-- #slider end -->

	<!-- Counter #1
	=== === === === === === === === === === === === === === -->
	<section id="counter1" class="counter ">
		<div class="container">
			<div class="counter-container">
				<div class="row">
					<!-- count #1 -->
					<div class="col-xs-6 col-sm-6 col-md-3">
						<div class="count-box">
							<!-- <div class="count-icon">
								<i class="icon icon-noun_740327_cc"></i>
							</div> -->
							<div class="count-content">
								<div class="upperCount">
									<div class="cross"><strong>+</strong></div>
									<div class="counting">20</div>
									<div class="percent">%</div>
								</div>	
								<div class="count-title">Sourcing Cost<br>Saved</div>
							</div>
						</div>
					</div>
					<!-- .col-md-3 end -->
					<!-- count #2 -->
					<div class="col-xs-6 col-sm-6 col-md-3">
						<div class="count-box">
							<!-- <div class="count-icon">
								<i class="icon icon-noun_740337_cc"></i>
							</div> -->
							<div class="count-content">
								<div class="upperCount">
									<div class="cross"><strong>+</strong></div>
									<div class="counting">80</div>
									<div class="percent">%</div>
								</div>	
								<div class="count-title">Saving for warehousing</div>
							</div>
						</div>
					</div>
					<!-- .col-md-3 end -->

					<!-- count #3 -->
					<div class="col-xs-6 col-sm-6 col-md-3">
						<div class="count-box">
							<!-- <div class="count-icon">
								<i class="icon icon-noun_740291_cc"></i>
							</div> -->
							<div class="count-content">
								<div class="upperCount">
									<div class="counting">40</div>
									<div class="percent">%</div>
								</div>
								<div class="count-title">Worldwide Shipping Cost Savings</div>
							</div>
						</div>
					</div>
					<!-- .col-md-3 end -->

					<!-- count #4 -->
					<div class="col-xs-6 col-sm-6 col-md-3">
						<div class="count-box">
							<!-- <div class="count-icon">
								<i class="icon icon-noun_740322_cc"></i>
							</div> -->
							<div class="count-content">
								<div class="upperCount">
									<div class="counting">98</div>
									<div class="percent">%</div>
								</div>
								<div class="count-title">Accuracy Rate in fulfilling orders</div>
							</div>
						</div>
					</div>
					<!-- .col-md-3 end -->
				</div>
				<!-- .row end -->
			</div>
		</div>
		<!-- .container end -->
	</section>
	<!-- #counter1 end -->

	<!-- Feature #2 > How SPS works
	=== === === === === === === === === === === === === === -->
	<section id="how-sps-works" class="section feature feature-2 feature-left pb-100">
		<div class="container">
			<div class="row clearfix">
				<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
					<div class="heading heading-1 text--center wow fadeInUp" data-wow-duration="1s">
						<h2 class="heading--title pb-80">How SPS Works</h2>
						<!-- <p class="heading--desc">Lorem ipsum dolor amet, consectetur adipisice elitesede eiusmod tempor incidide labeore dolore magna.</p> -->
						<!-- <div class="heading--divider mb-80 heading--center"></div> -->
					</div>
				</div>
				<!-- .col-md-6 end -->
			</div>
			<!-- .row end -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 ml-150 desktopView">
					<img class="mainImg" src="assets/img/how-sps-works-content.svg" alt="top banner">
				</div>
				<!-- Panel #1 -->
				<div class="col-xs-12 col-sm-12 col-md-4 mobileView">
					<div class="feature-panel wow fadeInUp" data-wow-duration="1s">
						<div class="feature--icon pb-30">
							<img src="assets/img/icon-sps-works1.png" alt="icon 1 how sps works">			
							<!-- <img src="assets/images/step1.png" alt="icon"> -->
							<!-- <i class="icon icon-noun_740303_cc"></i> -->
						</div>
						<div class="feature--content pr-50 pl-50">
							<h3 class="yellow-heading">Product Sourcing</h3>
							<p>Share product details and we'll find suitable factories in China, leveraging our network and expertise.</p>
						</div>
					</div>
					<!-- .feature-panel end -->
				</div>
				<!-- .col-md-4 end -->

				<!-- Panel #2 -->
				<div class="col-xs-12 col-sm-12 col-md-4 mobileView">
					<div class="feature-panel wow fadeInUp" data-wow-duration="1s">
						<div class="feature--icon pb-30">
							<img src="assets/img/icon-sps-works2.png" alt="icon 2 how sps works">						
						</div>
						<div class="feature--content pr-50 pl-50">
							<h3 class="blue-light-heading">Effective Negotiations</h3>
							<p>Compare quotes, select a factory, and secure better prices with our assistance.</p>
						</div>
					</div>
					<!-- .feature-panel end -->
				</div>
				<!-- .col-md-4 end -->

				<!-- Panel #3 -->
				<div class="col-xs-12 col-sm-12 col-md-4 mobileView">
					<div class="feature-panel wow fadeInUp" data-wow-duration="1s">
						<div class="feature--icon pb-30">
							<img src="assets/img/icon-sps-works3.png" alt="icon 3 how sps works">
						</div>
						<div class="feature--content pr-50 pl-50">
							<h3 class="blue-heading">Quality Warehousing</h3>
							<p>Inspect your products at our warehouse to ensure top-notch quality.</p>
						</div>
					</div>
					<!-- .feature-panel end -->
				</div>
				<!-- .col-md-4 end -->
			
				<!-- Panel #4 -->
				<div class="col-xs-12 col-sm-12 col-md-4 mobileView">
					<div class="feature-panel wow fadeInUp" data-wow-duration="1s">
						<div class="feature--icon pb-30">
							<img src="assets/img/icon-sps-works4.png" alt="icon 4 how sps works">
						</div>
						<div class="feature--content pr-50 pl-50">
							<h3 class="black-heading">Efficient Order Fulfillment</h3>
							<p>We handle pick, pack, and shipping for your orders from eCommerce platforms like Amazon, Shopify, and eBay.</p>
						</div>
					</div>
					<!-- .feature-panel end -->
				</div>
				<!-- .col-md-4 end -->

				<!-- Panel #5 -->
				<!-- <div class="col-xs-12 col-sm-12 col-md-4"> -->
					<!-- div class="feature-panel wow fadeInUp" data-wow-duration="1s">
						<div class="feature--icon">
							<i class="icon icon-noun_741291_cc"></i>
						</div>
						<div class="feature--content">
							<h3>Financial Law</h3>
							<p>Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
						</div>
					</div> -->
					<!-- .feature-panel end -->
				<!-- </div> -->
				<!-- .col-md-4 end -->

				<!-- Panel #6 -->
				<!-- <div class="col-xs-12 col-sm-12 col-md-4"> -->
					<!-- <div class="feature-panel wow fadeInUp" data-wow-duration="1s">
						<div class="feature--icon">
							<i class="icon icon-noun_740314_cc"></i>
						</div>
						<div class="feature--content">
							<h3>Technology Law</h3>
							<p>Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
						</div>
					</div> -->
					<!-- .feature-panel end -->
				<!-- </div> -->
				<!-- .col-md-4 end -->
			</div>
			<div class="row partner-list pt-30 desktopView">
				<div class="col-xs-12 col-sm-12 col-md-2">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-8">	
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4 pt-20">
							<img src="assets/img/iconpartner1.png" style="width:167px;height: 50px;" alt="icon 1 partner">
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<img src="assets/img/iconpartner2.png" style="width:219px;height: 63px;" alt="icon 2 partner">
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<img src="assets/img/iconpartner3.png" style="width:143px;height: 57px;" alt="icon 3 partner">
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-2">
				</div>	
			</div>
			<div class="row partner-list pt-30 desktopView">
					<div class="col-xs-4 col-sm-2 col-md-3">
					</div>
					<div class="col-xs-4 col-sm-8 col-md-6">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6 p-xs">
								<img src="assets/img/iconpartner4.png" style="width:228px;height: 49px;" alt="icon 4 partner">
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<img src="assets/img/iconpartner5.png" style="width:185px;height: 59px;" alt="icon 5 partner">
							</div>
						</div>	
					</div>	
					<div class="col-xs-4 col-sm-2 col-md-3">
					</div>	
			</div>	
			<div class="row partner-list pt-30 mobileView  pr-30 pl-30">
				<div class="col-xs-12 col-sm-12 pt-20 pb-20">
					<img src="assets/img/iconpartner1.png" style="width:94px;height: 28px;" alt="icon 1 partner">
				</div>
				<div class="col-xs-6 col-sm-6">
					<img src="assets/img/iconpartner2.png" style="width:123px;height: 35px;" alt="icon 2 partner">
				</div>
				<div class="col-xs-6 col-sm-6">
					<img src="assets/img/iconpartner3.png" style="width:80px;height: 32px;" alt="icon 3 partner">
				</div>
			</div>
			<div class="row partner-list pt-30 mobileView pr-30 pl-30">
				<div class="col-xs-6 col-sm-6">
					<img src="assets/img/iconpartner4.png" style="width:128px;height: 28px;" alt="icon 4 partner">
				</div>
				<div class="col-xs-6 col-sm-6">
					<img src="assets/img/iconpartner5.png" style="width:103.53px;height: 33.02px;" alt="icon 5 partner">
				</div>
			</div>		
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>
	<!-- #feature2 end -->

	<!-- Feature #2 > Signup Today -->
	<section id="sign-up-today" class="section feature feature-2 feature-left bg-white">
		<div class="container">
			<div class="row clearfix">
				<div class="col-xs-12 col-sm-12 col-md-2">
				</div>	
				<div class="col-xs-12 col-sm-12 col-md-8">	
					<div class="row clearfix">
						<div class="col-xs-12 col-sm-12 col-md-12 col-md-offset-3s">
							<div class="heading heading-1 text--center wow fadeInUp" data-wow-duration="1s">
								<div class="signup--icon pb-30">
									<img src="assets/img/logo-sign-up.png" alt="icon signup">
								</div>
								<h2 class="heading--title blue-heading">Sign Up Today</h2>
								<p class="heading--desc mb-30">to receive a free sourcing consultation and 2 months free-storage with us!</p>
							</div>
						</div>
						<!-- .col-md-6 end -->
					</div>
					<!-- .row end -->
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12"><!-- mail_handler.php -->
							<!-- <form action="#" method="post" class="wow fadeInUp" data-wow-duration="1s"> -->
							<form id="signUpForm" action="smtpmail/mail_send.php" method="post" class="wow fadeInUp" data-wow-duration="1s">	
							<!-- <form action="mail_handler.php" method="post" class="wow fadeInUp" data-wow-duration="1s"> -->	
								<!-- First Name: <input type="text" name="first_name"> -->
								<!-- Last Name: <input type="text" name="last_name"> -->
								<!-- Email:  --><input class="mb-20 inputClass" type="email" name="your-email" id="" placeholder="Enter your email address here" required>
								<!-- Message:<br><textarea rows="5" name="message" cols="30"></textarea> -->
								<!-- <div id="recaptcha" class="g-recaptcha"
							          data-sitekey="6LeeoBIpAAAAAPIeXetei03AESYpk_xDSgqrIXYD"
							          data-callback="onSubmit"
							          data-size="invisible">			
							  	</div> -->
							  	<input type="checkbox" name="contact_me_by_fax_only" value="1" id="checkFax" autocomplete="off">
							  	<input type="hidden" name="formtype" value="signup">
							  	<input id="submit" class="button" type="submit" name="submit" value="Submit">
								<!-- <script>onloads();</script> -->
							</form>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-2">
				</div>
			</div>
		</div>
	</section>

	<!-- Feature #2 > Pricing plan
	=== === === === === === === === === === === === === === -->		
	<section id="pricing" class="section feature feature-2 bg-white sliders">
		<div class="slide--items bg-overlay bg-overlay-darks pt-60 pb-50">
			<div class="bg-section">
				<img src="assets/img/pricing-bg.jpg" class="desktopView" alt="pricing bg">
				<img src="assets/img/pricing-bg-mobile.png" class="mobileView" alt="pricing bg mobile">
			</div>	
		<div class="container">
			<div class="row clearfix">
				<div class="col-xs-12 col-sm-12 col-md-12 col-md-offset-3s text-center">
					<div class="heading heading-1 text--center wow fadeInUp" data-wow-duration="1s">
						<h2 class="heading--title yellow-light-heading">Pricing</h2>
						<p class="heading--desc white mb-40">Shipping costs are determined by the dimensions and weight of the product.</p>
					</div>
				</div>
				<!-- .col-md-6 end -->
			</div>
			<!-- .row end -->
			<div class="row">
				<!-- Panel #1 -->
				<div class="col-xs-12 col-sm-12 col-md-2">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-8">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 p-0">
							<div class="feature-panel wow fadeInUp bg-white mr-20" data-wow-duration="1s">
								<div class="feature--content pt-60 pt-sm-3">
									<div class="popular-label"><img src="assets/img/popular.png" alt="popular label"></div>
									<h3 class="blue-heading text-center pb-15">SPS end-to-end <br>solution</h3>
									<ul class="list-unstyled mb-0">
										<li><span>Free Sourcing</span></li> 
										<li><span>Free Storage*</span></li> 
										<li><span>Pick & Pack USD$1/parcel</span></li> 
										<li><span>Free Packaging</span><br><span style="font-style: italic;font-size:13px; padding-top:5px;">*2 months only</span></li>	
									</ul>
								</div>
							</div>
							<!-- .feature-panel end -->
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 p-0">
							<div class="feature-panel wow fadeInUp bg-white ml-20" data-wow-duration="1s">
								<div class="feature--content pt-60">
									<h3 class="blue-heading text-center pb-15">Sourcing only<br><br></h3>
									<ul class="list-unstyled mb-0 listSecond">
										<li><span>10% of your supplier quotation</span></li>	 
										<li><span>Monthly storage USD$10/CBM</span></li>	 
										<li><span>Outbound (B2B) USD$5/CBM</span></li>								
									</ul>
								</div>
							</div>
							<!-- .feature-panel end -->
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-2">
				</div>
				<!-- .col-md-4 end -->

				<!-- Panel #3 -->
				<!-- <div class="col-xs-12 col-sm-12 col-md-4">
					<div class="feature-panel wow fadeInUp" data-wow-duration="1s">
						<div class="feature--icon">
							<img src="assets/images/pricing3.png" alt="icon">
							<i class="icon icon-noun_741284_cc"></i>
						</div>
						<div class="feature--content">
							<h3>Pick & Pack from $3.5 for 1st item and $0.5 per item thereafter</h3>
							<p>Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
						</div>
					</div>
					.feature-panel end
				</div> -->
				<!-- .col-md-4 end -->
			
				<!-- Panel #4 -->
				<!-- <div class="col-xs-12 col-sm-12 col-md-4"> -->
					<!-- <div class="feature-panel wow fadeInUp" data-wow-duration="1s">
						<div class="feature--icon">
							<i class="icon icon-noun_741298_cc"></i>
						</div>
						<div class="feature--content">
							<h3>International Law</h3>
							<p>Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
						</div>
					</div> -->
					<!-- .feature-panel end -->
				<!-- </div> -->
				<!-- .col-md-4 end -->

				<!-- Panel #5 -->
				<!-- <div class="col-xs-12 col-sm-12 col-md-4"> -->
					<!-- div class="feature-panel wow fadeInUp" data-wow-duration="1s">
						<div class="feature--icon">
							<i class="icon icon-noun_741291_cc"></i>
						</div>
						<div class="feature--content">
							<h3>Financial Law</h3>
							<p>Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
						</div>
					</div> -->
					<!-- .feature-panel end -->
				<!-- </div> -->
				<!-- .col-md-4 end -->

				<!-- Panel #6 -->
				<!-- <div class="col-xs-12 col-sm-12 col-md-4"> -->
					<!-- <div class="feature-panel wow fadeInUp" data-wow-duration="1s">
						<div class="feature--icon">
							<i class="icon icon-noun_740314_cc"></i>
						</div>
						<div class="feature--content">
							<h3>Technology Law</h3>
							<p>Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
						</div>
					</div> -->
					<!-- .feature-panel end -->
				<!-- </div> -->
				<!-- .col-md-4 end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
		</div>
		<!-- div end -->
	</section>
	<!-- #feature2 end -->

	<!-- About
	=== === === === === === === === === === === === === === -->
	<section id="about" class="section about pb-0">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-5 wow fadeInUp ml-60 mb-80">
					<img class="img-responsive desktopView center-block" src="assets/img/aboutus.png" alt="about us"/>
					<img class="img-responsive mobileView center-block" src="assets/img/aboutus-mobile.png" alt="about-us m"/>
				</div>
				<!-- .col-md-6 end -->
				<div class="col-xs-12 col-sm-12 col-md-6 pl-50">
					<div class="heading heading-1 mt-70 pb-50 wow fadeInUp" data-wow-duration="1s">
						<h2 class="heading--title blue-heading">About Us</h2>
					</div>
					<div class="about-content wow fadeInUp" data-wow-duration="1s">
			    	    <p>Headquartered in Hong Kong, SPS brings together a diverse team from the Greater Bay Area, including Guangzhou, Shenzhen, Macao, and Hong Kong.</p> 

						<p>With our profound knowledge of the supply chain and logistics industry, we are dedicated to streamlining processes, reducing costs, and simplifying operations.</p> 

						<p>Our mission is to empower entrepreneurs worldwide, eliminating barriers in the supply chain and logistics landscape so they can focus on inspiring and selling their products globally, making a valuable contribution to the global economy.</p>
						<!-- <img class="signture" src="assets/images/background/signture.png" alt="signture"> -->
					</div>
				</div>
				<!-- .col-md-6 end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>
	<!-- #feature2 end -->

	<!-- Footer #5
	============================================= -->
	<footer id="footer" class="footer section">
			<!-- Widget Section
		============================================= -->
		<div class="footer-widget cta">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-7 pr-60 pl-60 mr-60 connectSection">
						<div class="heading heading-1 wow fadeInUp" data-wow-duration="1s">
							<h2 class="heading--title yellow-light-heading-footer mb-60">Connect with our expert</h2>
						</div>
						<div class="form-request">
							<div class="row"><!-- mail_handler_contact.php -->
								<!-- <form action="#" method="post" class="wow fadeInUp mb-0" data-wow-duration="1s">	 -->
								<form id="contactForm" action="smtpmail/mail_send_contact.php" method="post" class="wow fadeInUp mb-0" data-wow-duration="1s">	
								<!-- <form action="mail_handler_contact.php" method="post" class="wow fadeInUp mb-0" data-wow-duration="1s"> -->
									<div class="col-xs-12 col-sm-12 col-md-5 mr-30">
										<label class="form-label">Name*</label>
										<input type="text" class="form-control inputClass" name="your-name" placeholder="Your Name" required>
									</div>
									<!-- .col-md-6 end -->
									<div class="col-xs-12 col-sm-12 col-md-5 ml-50">
										<label class="form-label">Email*</label>
										<input type="email" class="form-control inputClass" name="your-email" placeholder="Your Email" required>
									</div>
									<!-- .col-md-6 end -->
									<div class="col-xs-12 col-sm-12 col-md-5 mr-30">
										<label class="form-label">Phone</label>
										<input type="number" class="form-control inputClass" name="your-number" placeholder="Your Phone number" maxlength="9">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-5 ml-50">
										<label class="form-label">Company</label>
										<input type="text" class="form-control" inputClass name="your-company" placeholder="Your Company name">
									</div>
									<!-- .col-md-6 end -->
									<div class="col-xs-12 col-sm-12 col-md-12 checkboxCollumn">
										<!-- <select class="form-control">
											<option>Practice Area</option>
											<option>Criminal Law</option>
											<option>International Law</option>
											<option>Financial Law</option>
										</select> -->
										<div class="form-check form-check-inline">
											<label class="form-label">Interested in</label>		
										</div>
										<div class="form-check form-check-inline"><!-- checked -->
										  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="interested[]" value="Product Sourcing">
										  <!-- <span class="checkmark"></span> -->
										  <label class="form-check-label" for="inlineCheckbox1">Product Sourcing</label>
										</div>
										<div class="form-check form-check-inline">
										  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="interested[]" value="China Fulfilment">
										  <!-- <span class="checkmark"></span> -->
										  <label class="form-check-label" for="inlineCheckbox2">China Fulfilment</label>
										</div>
									</div>
									<!-- .col-md-12 end -->
									<div class="col-xs-12 col-sm-12 col-md-12">
										<label class="form-label">Message</label>
										<textarea class="form-control inputClass" name="your-message" rows="3" placeholder="Enter your message here"></textarea>
										<div class="requiredMsg">*Please fill in the required field</div>
									</div>
									<!-- .col-md-12 end -->
									<!-- <div id="recaptcha" class="g-recaptcha"
								          data-sitekey="6LeeoBIpAAAAAPIeXetei03AESYpk_xDSgqrIXYD"
								          data-callback="onSubmitContact"
								          data-size="invisible">			
								  	</div> -->
									<div class="col-xs-12 col-sm-12 col-md-6">
										<input type="checkbox" name="contact_me_by_fax_only" value="1" id="checkFax" autocomplete="off">
										<input type="hidden" name="formtype" value="contact">
										<input  id="submit" class="button" name="submit" type="submit" value="Submit">
									</div>
									<!-- <script>onloadsContact();</script> -->
									<!-- .col-md-6 end -->
								</form>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 pr-0 pl-0 pr-20 pl-60 contactSection">
						<div class="heading heading-1 wow fadeInUp" data-wow-duration="1s">
							<h2 class="heading--title white-light-heading-footer mb-60">Contact Information</h2>
						</div>
						<div class="contact-content">
							<div class="contact--icon pb-50">
								<img src="assets/img/logo-contact-information.png" alt="icon contact information">
							</div>
							<ul>
								<li>
									<div class="head">Hong Kong Headquarter</div>
									<p class="pb-10">Room 602-3, 6/F Hua Qin International Building, 
									350 Queen’s Road Central, Sheung Wan, Hong Kong</p> 
									
									<div class="head">China Warehouse</div>
									<p class="pb-0 mb-15">Building 3, No. 5, Second Ring Road, Gaozan 
									Industrial Zone, Gaozan Village, Xingtan Town, 
									Shunde District, Foshan City, Guangdong Province</p>
								</li>
								<li>
									<div class="head">Business Inquiry</div>  
									<p class="pb-0 mb-30">+852 2186 7961 <br>
										<a href="https://wa.me/8617725603096" target="_blank">
										+86 177 2560 3096 (WhatsApp)</a><br>
										<a href="mailto:info@spslogistics.io" target="_blank">info@spslogistics.io</a>
									</p>
								</li>
								<li>
									<div class="head">Service Hours</div> 
									<p class="pb-0 mb-10">Monday – Sunday 9am to 6pm</p>
								</li>
								<li>
									<div class="head">Find Us on Social Media</div>
									<div class="shareSMDesktop desktopView">
										<a href="https://instagram.com/spslogistics.io?igshid=YmMyMTA2M2Y=">
										<img src="assets/img/icon-s1.png" alt="icon social media 1">
										</a>
										<a href="https://www.facebook.com/SPS.Logistics.hongkong">
										<img src="assets/img/icon-s2.png" alt="icon social media 2">
										</a>
										<a href="https://www.tiktok.com/@spslogistics">
										<img src="assets/img/icon-s3.png" alt="icon social media 3">
										</a>
									</div>
									<div class="shareSMMobile mobileView">
										<a href="https://instagram.com/spslogistics.io?igshid=YmMyMTA2M2Y=">
										<img src="assets/img/icon-s1-mobile.png" alt="icon social media 1">
										</a>
										<a href="https://www.facebook.com/SPS.Logistics.hongkong">
										<img src="assets/img/icon-s2-mobile.png" alt="icon social media 2">
										</a>
										<a href="https://www.tiktok.com/@spslogistics">
										<img src="assets/img/icon-s3-mobile.png" alt="icon social media 3">
										</a>
									</div>
								</li>
							</ul>
							<div class="addInfo">
								<a href="terms-and-condition.php">Terms and Condition</a>   |   <a href="privacy-policy.php">Privacy Policy</a>
							</div>
						</div>
					</div>
					<!-- .col-md-6 end-->
				</div>
				<!-- .row end -->
			</div>
			<!-- .container end -->
		</div><!-- .footer-widget end -->
		<!-- Copyrights
		============================================= -->
		<div class="footer--copyright">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 text--center">
						<span>&copy; SPS Logistics 2023, All Rights Reserved.</span>
					</div>
				</div>
			</div>
			<!-- .container end -->
		</div>
	</footer>
</div>
<!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/functions.js"></script>

</body>
</html>