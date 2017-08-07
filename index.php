<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Creative One Page Parallax Template">
	<meta name="keywords" content="Creative, Onepage, Parallax, HTML5, Bootstrap, Popular, custom, personal, portfolio" /> 
	<meta name="author" content=""> 
	
	<jdoc:include type="head">
	<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/prettyPhoto.css" rel="stylesheet"> 
	<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/font-awesome.min.css" rel="stylesheet"> 
	<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/animate.css" rel="stylesheet"> 
	<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/main.css" rel="stylesheet">
	<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/responsive.css" rel="stylesheet"> 
	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script> 
	<script src="js/respond.min.js"></script> <![endif]--> 
	<link rel="shortcut icon" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/ico/favicon.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/ico/apple-touch-icon-144-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/ico/apple-touch-icon-114-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/ico/apple-touch-icon-72-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
	<div class="preloader">
		<div class="preloder-wrap">
			<div class="preloder-inner"> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div>
			</div>
		</div>
	</div><!--/.preloader-->
	<header id="navigation"> 
		<div class="navbar navbar-inverse navbar-fixed-top" role="banner"> 
			<div class="container"> 
				<div class="navbar-header"> 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
						<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
					</button> 
					<a class="navbar-brand" href="<?php echo $this->baseurl;?>"><h1><img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/summit_logo.png" alt="logo"></h1></a> 
				</div> 
				<div class="collapse navbar-collapse"> 
					<ul class="nav navbar-nav navbar-right"> 
						<li class="scroll active"><a href="#navigation">Home</a></li> 
						<li class="scroll"><a href="#about-us">About Us</a></li> 
						<li class="scroll"><a href="#portfolio">Services</a></li> 
						<li class="scroll"><a href="#contact">Contact</a></li>
						<li><a>中文网页</a></li>
					</ul> 
				</div> 
			</div> 
		</div><!--/navbar--> 
	</header> <!--/#navigation--> 

	<section id="home">
		<div class="home-pattern"></div>
		<div id="main-carousel" class="carousel slide" data-ride="carousel"> 
			<ol class="carousel-indicators">
				<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#main-carousel" data-slide-to="1"></li>
				<li data-target="#main-carousel" data-slide-to="2"></li>
			</ol><!--/.carousel-indicators--> 
			<div class="carousel-inner">
				<div class="item active" style="background-image: url(<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/slider/slide3.jpg)"> 
					<div class="carousel-caption"> 
						<div> 
							<h2 class="heading animated bounceInDown">Bussines 1 or announcement</h2> 
							<p class="animated bounceInUp">Sample1</p> 
							<a class="btn btn-default slider-btn animated fadeIn" href="#">Details</a> 
						</div> 
					</div> 
				</div>
				<div class="item" style="background-image: url(<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/slider/slide2.jpg)"> 
					<div class="carousel-caption"> <div> 
						<h2 class="heading animated bounceInDown">Bussines 2 or announcement</h2> 
						<p class="animated bounceInUp">Sample2 </p> <a class="btn btn-default slider-btn animated fadeIn" href="#">Details</a> 
					</div> 
				</div> 
			</div> 
			<div class="item" style="background-image: url(<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/slider/slide1.jpg)"> 
				<div class="carousel-caption"> 
					<div> 
						<h2 class="heading animated bounceInRight">Bussines 3 or announcement</h2> 
						<p class="animated bounceInLeft">Sample3</p> 
						<a class="btn btn-default slider-btn animated bounceInUp" href="#">Details</a> 
					</div> 
				</div> 
			</div>
		</div><!--/.carousel-inner-->

		<a class="carousel-left member-carousel-control hidden-xs" href="#main-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
		<a class="carousel-right member-carousel-control hidden-xs" href="#main-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
	</div> 

</section><!--/#home-->

	<section id="about-us">
		<div class="container">
		<div class="text-center">
			<div class="col-sm-8 col-sm-offset-2">
				<h2 class="title-one">About Us</h2>
				<p>Custom Content</p>
			</div>
		</div>
		<div class="about-us">
			<div class="row">
				<div class="col-sm-6">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#news" data-toggle="tab"><i class="fa fa-chain-broken"></i>News</a></li>
						<li><a href="#research" data-toggle="tab"><i class="fa fa-th-large"></i>Research</a></li>
						<li><a href="#achievement" data-toggle="tab"><i class="fa fa-users"></i>Achievement</a></li>
						<li><a href="#payment" data-toggle="tab"><i class="fa fa-wechat"></i>Payment</a></li>
						<li><a href="#question" data-toggle="tab"><i class="fa fa-quora"></i>Question & Answer</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="news">
							<div class="media">
								<img class="pull-left media-object" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/about-us/about.jpg" alt="about us"> 
								<div class="media-body">
									<p>2017 Summit Law Firm Success</p>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="research">
							<div class="media">
								<img class="pull-left media-object" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/about-us/mission.jpg" alt="research"> 
								<div class="media-body">
									<p>Research context or arctile</p>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="achievement">
							<div class="media">
								<img class="pull-left media-object" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/about-us/community.jpg" alt="Achievement"> 
								<div class="media-body">
									<p>achievement content </p>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="payment">
							<div class="media">
								<img class="pull-left media-object" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/about-us/payment.jpg" alt="Payment"> 
								<div class="media-body">
									<p></p>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="question">
							<div class="media">
								<div class="media-body">
									<p>question1: how to sue? </p>
									<p>answer: I don't know.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#about-us--><div class="copyrights">copyrights</div>
	
	<section id="portfolio">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-8 col-sm-offset-2">
						<h2 class="title-one">Services</h2>
						<p>Service Introduce Context</p>
					</div>
				</div>
				<ul class="portfolio-filter text-center">
					<li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".general">General Law</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".financial">Financial Law</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".property">Property</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".others">Others</a></li>
				</ul><!--/#portfolio-filter-->
				<div class="portfolio-items">
					<div class="col-sm-3 col-xs-12 portfolio-item general">
						<div class="view efffect">
							<div class="portfolio-image">
								<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/portfolio/legal-counsel.jpg" alt=""></div> 
								<div class="mask text-center">
									<h3>Legal Counsel</h3>
									<h4>常年法律顾问</h4>
									<a href="#"><i class="fa fa-link"></i></a>
									<a href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/portfolio/legal-counsel.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
								</div>
							</div>
						</div>
						<div class="col-sm-3 col-xs-12 portfolio-item financial">
							<div class="view efffect" >
								<div class="portfolio-image">
									<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/portfolio/securites.jpg" alt="">
								</div> 
								<div class="mask text-center">
									<h3>Securities Law Affair</h3>
									<h4>证券法律事务</h4>
									<a href="#"><i class="fa fa-link"></i></a>
									<a href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/portfolio/securites.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
								</div>
							</div>
						</div>
						<div class="col-sm-3 col-xs-12 portfolio-item financial">
							<div class="view efffect">
								<div class="portfolio-image">
									<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/portfolio/fund.jpg" alt="">
								</div> 
								<div class="mask text-center">
								<h3>Fund Law Affair</h3>
								<h4>基金法律事务</h4>
								<a href="#"><i class="fa fa-link"></i></a>
								<a href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/portfolio/fund.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-xs-12 portfolio-item financial">
						<div class="view efffect">
							<div class="portfolio-image">
								<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/portfolio/bank.jpg" alt="">
							</div> 
							<div class="mask text-center">
								<h3>Bank Law Affair</h3>
								<h4>银行法律事务</h4>
								<a href="#"><i class="fa fa-link"></i></a>
								<a href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/portfolio/bank.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-xs-12 portfolio-item financial">
						<div class="view efffect">
							<div class="portfolio-image">
								<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/portfolio/insurance.jpg" alt="">
							</div> <div class="mask text-center">
							<h3>Insurance Law Affair</h3>
							<h4>保险法律事务</h4>
							<a href="#"><i class="fa fa-link"></i></a>
							<a href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/portfolio/insurance.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-12 portfolio-item financial">
					<div class="view efffect">
						<div class="portfolio-image">
							<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/portfolio/overseas-investment.jpg" alt="">
						</div> 
						<div class="mask text-center">
							<h3>Overseas Investment</h3>
							<h4>海外投资移民</h4>
							<a href="#"><i class="fa fa-link"></i></a>
							<a href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/portfolio/overseas-investment.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-12 portfolio-item financial">
					<div class="view efffect">
						<div class="portfolio-image">
							<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/portfolio/bankruptcy-reorganization.jpg" alt="">
						</div> 
						<div class="mask text-center">
							<h3>Bankruptcy & Reorganization</h3>
							<h4>破产清算和重组</h4>
							<a href="#"><i class="fa fa-link"></i></a>
							<a href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/portfolio/bankruptcy-reorganization.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-12 portfolio-item property">
					<div class="view efffect">
						<div class="portfolio-image">
							<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/portfolio/real-estate.jpg" alt=""></div> 
							<div class="mask text-center">
								<h3>Real Estate Law Affair</h3>
								<h4>房地产法律事务</h4>
								<a href="#"><i class="fa fa-link"></i></a>
								<a href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/portfolio/real-estate.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-xs-12 portfolio-item property">
						<div class="view efffect">
							<div class="portfolio-image">
								<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/portfolio/intellectual-property.jpg" alt="">
							</div> 
							<div class="mask text-center">
								<h3>Intellectual Property Law Affair</h3>
								<h4>知识产权法律事务</h4>
								<a href="#"><i class="fa fa-link"></i></a>
								<a href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/portfolio/intellectual-property.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-xs-12 portfolio-item others">
						<div class="view efffect">
							<div class="portfolio-image">
								<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/portfolio/civil.jpg" alt=""></div> 
								<div class="mask text-center">
									<h3>Civil Litigation/Arbitration</h3>
									<h4>民商事诉讼/仲裁</h4>
									<a href="#"><i class="fa fa-link"></i></a>
									<a href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/portfolio/civil.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
								</div>
							</div>
						</div>
						<div class="col-sm-3 col-xs-12 portfolio-item others">
							<div class="view efffect">
								<div class="portfolio-image">
									<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/portfolio/administrative.jpg" alt=""></div> 
									<div class="mask text-center">
										<h3>Administrative Litigation</h3>
										<h4>行政诉讼</h4>
										<a href="#"><i class="fa fa-link"></i></a>
										<a href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/portfolio/administrative.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-sm-3 col-xs-12 portfolio-item general">
								<div class="view efffect">
									<div class="portfolio-image">
										<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/portfolio/legal-aid.jpg" alt=""></div> 
										<div class="mask text-center">
											<h3>Legal Aid</h3>
											<h4>法律援助</h4>
											<a href="#"><i class="fa fa-link"></i></a>
											<a href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/portfolio/legal-aid.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div> 

					</section> <!--/#portfolio-->
	
		<section id="contact">
							<div class="container">
								<div class="row text-center clearfix">
									<div class="col-sm-8 col-sm-offset-2">
										<div class="contact-heading">
											<h2 class="title-one">Contact With Us</h2>
											<p>Career</p>
										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="contact-details">
									<div class="pattern"></div>
									<div class="row text-center clearfix">
										<div class="col-sm-6">
											<div class="contact-address"><address><p><span>Sumit</span>Law Firm</p><strong>Shanghai<br>China</strong><br><small>Please input address</small></address>
												<div class="social-icons">
													<a href="#"><i class="fa fa-wechat"></i></a>
													<a href="#"><i class="fa fa-envelope"></i></a>
													<a href="#"><i class="fa fa-weibo"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div> 
							</section> <!--/#contact--> 

	<footer id="footer"> 
		<div class="container"> 
			<div class="text-center"> 
				<p>Copyright &copy; 2017 -  All Rights Reserved.</p> </div> 
		</div> 
	</footer> <!--/#footer--> 

	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.js"></script> 
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/smoothscroll.js"></script> 
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.prettyPhoto.js"></script> 
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.parallax.js"></script> 
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/main.js"></script> 
</body>
</html>