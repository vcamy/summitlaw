<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Creative One Page Parallax Template">
	<meta name="keywords" content="Creative, Onepage, Parallax, HTML5, Bootstrap, Popular, custom, personal, portfolio" /> 
	<meta name="author" content=""> 
	
	<jdoc:include type="head"/>
	<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/prettyPhoto.css" rel="stylesheet"> 
	<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/font-awesome.min.css" rel="stylesheet"> 
	<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/animate.css" rel="stylesheet"> 
	<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/main.css" rel="stylesheet">
	<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/responsive.css" rel="stylesheet"> 
	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script> 
	<script src="js/respond.min.js"></script> <![endif]--> 
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
					<a class="navbar-brand" href="<?php echo $this->baseurl;?>"><img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/summit_logo.png" alt="logo"/></a> 
				</div> 
					<div class="collapse navbar-collapse"> 
						<ul class="nav navbar-nav navbar-right"> 
							<li class="scroll active"><a href="#navigation">Home</a></li> 
							<li class="scroll"><a href="#services">About Us</a></li> 
							<li class="scroll"><a href="#portfolio">Services</a></li> 
							<li class="scroll"><a href="#contact">Contact</a></li>
							<li><a href="https://qiye.aliyun.com/">Email</a></li>
							<li><a>中文</a></li>
						</ul>
					</div>
				<div class="navbar-barcode">
					<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/contact/wechat.jpg"/>
					<p>微信扫一扫<br>关注金英律师事务所</p>
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
					<div class="carousel-caption"> 
					<div> 
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

	<section id="services" class="parallax-section">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="title-one">About Us</h2>
				</div>
			</div>
			<div class="row services">
				<div class="col-md-6 text-left">
					<h2>News</h2>
					<p><a href="https://mp.weixin.qq.com/s?__biz=MzI3MjE1NzI2NQ==&mid=551617963&idx=2&sn=aea98493bf83e6e82ae63acc0b50edfa&chksm=4e237a957954f3833678d805f15248a762266e0fecd39e7fc0410df003e64b6377257ed066a7&mpshare=1&scene=1&srcid=08085FiWzs3ngkGaPTLREUgt&pass_ticket=Fjp68QCChfbIM0Y1ztVb2LGzmMzRIRXb34Fi2UaC8BJ5mBBp99bIu1O%2FdX3rTl0F#rd" target="_blank">关于修改《外商投资企业设立及变更备案管理暂行办法》的决定</a></p>
					<p><a href="https://mp.weixin.qq.com/s?__biz=MzI3MjE1NzI2NQ==&mid=551617963&idx=1&sn=8e7f48f5c797840470b370e192ecbb44&chksm=4e237a957954f383cfaed361b1c8d695c7df60c73496221e264bafeafff2969c5f32f544dbf4&mpshare=1&scene=1&srcid=0808LozPiYaBHPE8RyPAQiYL&pass_ticket=Fjp68QCChfbIM0Y1ztVb2LGzmMzRIRXb34Fi2UaC8BJ5mBBp99bIu1O%2FdX3rTl0F#rd" target="_blank">征集中小投资者向虚假陈述上市公司索赔</a></p>
				</div>
				<div class="col-md-6 text-left">
					<h2>Research</h2>
					<p><a href="https://mp.weixin.qq.com/s?__biz=MzI3MjE1NzI2NQ==&mid=551617990&idx=1&sn=accbfc8531fe75e54672411c34ea5329&chksm=4e237af87954f3eed83b34d655264452d5d15267488789caf3adb340e5a1f1992dbc4057f2f1&mpshare=1&scene=1&srcid=0808SClJOzQfG2HKASHZftNJ&pass_ticket=Fjp68QCChfbIM0Y1ztVb2LGzmMzRIRXb34Fi2UaC8BJ5mBBp99bIu1O%2FdX3rTl0F#rd" target="_blank">如何设立民办学校</a></p>
					<p><a href="https://mp.weixin.qq.com/s?__biz=MzI3MjE1NzI2NQ==&mid=551617990&idx=3&sn=2ca7f93d6cd979d479863dd9ce72b538&chksm=4e237af87954f3ee06e1b7cc266ee6cea1d6295f0cdaaee63018c943ec076cdf060b93670a0b&mpshare=1&scene=1&srcid=0808OkbTYMzzOn89DlEV8hOt&pass_ticket=Fjp68QCChfbIM0Y1ztVb2LGzmMzRIRXb34Fi2UaC8BJ5mBBp99bIu1O%2FdX3rTl0F#rd" target="_blank">国家机关工作人员包庇、纵容黑社会性质组织犯罪如何确定管辖</a></p>
					<p><a href="https://mp.weixin.qq.com/s?__biz=MzI3MjE1NzI2NQ==&mid=551617990&idx=2&sn=fda7a4e3d264ab44eccd201e1f96272e&chksm=4e237af87954f3ee120b784ef20f7e97a9441477a8c96066ae2e8cb466220413930f6b3904f7&mpshare=1&scene=1&src								id=08087P1q0oXzKDGhur9LYStZ&pass_ticket=Fjp68QCChfbIM0Y1ztVb2LGzmMzRIRXb34Fi2UaC8BJ5mBBp99bIu1O%2FdX3rTl0F#rd" target="_blank">如何进行虚假陈述证券民事索赔</a></p>
				</div>						
				<div class="col-md-6 text-left">
						<h2>Achievement</h2>
						<p></p>
				</div>
				<div class="col-md-6 text-left">
					<h2>Fees</h2>
					<p><a href="https://mp.weixin.qq.com/s?__biz=MzI3MjE1NzI2NQ==&mid=551617970&idx=1&sn=5d8b59939c635a5585a8d21a12118503&chksm=4e237a8c7954f39accb8a82789b81752bc4f2abb9e4df6eb132c6863a39539d3e7fe984c61fa&mpshare=1&scene=1&srcid=08085hTNZIiOzxqnZ8hWYYs8&pass_ticket=Fjp68QCChfbIM0Y1ztVb2LGzmMzRIRXb34Fi2UaC8BJ5mBBp99bIu1O%2FdX3rTl0F#rd" target="_blank">上海金英律师事务所之律师收费标准</a></p>
				</div>
			
			</div>
		</div>
	</section><!--/#about-us--><div class="copyrights">copyrights</div>
	
	<section id="portfolio">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-8 col-sm-offset-2">
						<h2 class="title-one">Services</h2>
					</div>
				</div>
				<div class="portfolio-items">
					<div class="row portfolio-item">				
							<div class="col-sm-3">
								<h3>Permanent Legal Advisor</h3>
								<p><i class="fa fa-star"></i>专人负责、团体配合</p>
								<p><i class="fa fa-star"></i>参与谈判、个案咨询</p>
							</div>										
							<div class="col-sm-3">
								<h3>Overseas Investment</h3>
								<p><i class="fa fa-star"></i>投资移民</p>
								<p><i class="fa fa-star"></i>家族信托</p>
							</div>
							<div class="col-sm-3">
								<h3>Real Estate</h3>
								<p><i class="fa fa-star"></i>买卖与开发</p>
								<p><i class="fa fa-star"></i>建设工程施工合同纠纷</p>
							</div>
							<div class="col-sm-3">
										<h3>Bankruptcy Reorganization</h3>
										<p><i class="fa fa-star"></i>破产清算</p>
										<p><i class="fa fa-star"></i>破产重整</p>
							</div>
					</div>		
					<div class="row portfolio-item">	
							<div class="col-sm-3">
								<h3>Securities</h3>
								<p><i class="fa fa-star"></i>IPO</p>
								<p><i class="fa fa-star"></i>新三板挂牌</p>
							</div>
							<div class="col-sm-3">
								<h3>Funds</h3>
								<p><i class="fa fa-star"></i>私募基金设立、登记备案</p>
								<p><i class="fa fa-star"></i>QFII、QDII</p>
							</div>
							<div class="col-sm-3">
								<h3>Banking</h3>
								<p><i class="fa fa-star"></i>融资</p>
								<p><i class="fa fa-star"></i>合同能源贷</p>
							</div>
							<div class="col-sm-3">
								<h3>Insurance</h3>
								<p><i class="fa fa-star"></i>理赔</p>
							</div>
					</div>
				
					<div class="row portfolio-item">	
							<div class="col-sm-3">
								<h3>Civil Litigation</h3>
								<p><i class="fa fa-star"></i>证券民事赔偿、票据纠纷</p>
								<p><i class="fa fa-star"></i>劳动仲裁、婚姻家庭、继承</p>
								<p><i class="fa fa-star"></i>交通事故索赔、执行异议</p>
							</div>
							<div class="col-sm-3">
								<h3>Intellectural Property</h3>
								<p><i class="fa fa-star"></i>不正当竞争(侵犯商业秘密)</p>
								<p><i class="fa fa-star"></i>著作权、商标权、专利权</p>
							</div>
							<div class="col-sm-3">
								<h3>Administrative Action</h3>
								<p><i class="fa fa-star"></i>行政诉讼</p>
							</div>
							<div class="col-sm-3">
								<h3>Legal Aid</h3>
								<p><i class="fa fa-star"></i>法律援助</p>
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
						<p><strong>Welcome to our Summit Law Firm</strong></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 contact-details">
					<h2>Join Us</h2>
					<p>实习生计划（3+3）</p>
					<p>青年律师培养计划（1+1）</p>
					<p>招募合伙人</p>
				</div>
				<div class="col-md-6 contact-details">
					<h2>Find Us</h2>
					<p>上海总部</p>
					<p>湖南长沙</p>
					<p>广东深圳</p>
					<p>美国纽约</p>
				</div>		
				<div class="col-md-6 contact-details">
					<h2>Follow Us</h2>
					<div class="social-icons">
						<a><i class="fa fa-wechat"></i>
						<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/contact/wechat.jpg"/></a>										
						<a href="http://weibo.com/u/6140677968"><i class="fa fa-weibo"></i></a>
					</div>								
				</div>
				<div class="col-md-6 contact-details">
					<h2>Suggestions</h2>
					<div id="contact-form-section">
						<div class="status alert alert-success" style="display: none"></div>
						<form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">
							<div class="form-group">
								<input type="text" name="name" class="form-control name-field" required="required" placeholder="Your Name"></div>
							<div class="form-group">
								<input type="email" name="email" class="form-control mail-field" required="required" placeholder="Your Email">
							</div> 
							<div class="form-group">
								<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
							</div> 
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Send</button>
							</div>
						</form> 
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
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.min.js"></script>  
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/smoothscroll.js"></script> 
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.prettyPhoto.js"></script> 
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.parallax.js"></script> 
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/main.js"></script> 
</body>
</html>