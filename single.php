<?php the_post(); ?>
<!DOCTYPE html>
<html lang="zh_CN">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php the_title(); ?> - <?php bloginfo(); ?></title>
	<link href="<?=get_stylesheet_directory_uri()?>/images/favicon.png" rel="icon">
	<link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/css/plugins.css">
	<link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/css/style.css">
</head>
<body>

<!--PreLoader-->
<div class="loader">
	<div class="loader-inner">
		<div class="loader-blocks">
			<span class="block-1"></span>
			<span class="block-2"></span>
			<span class="block-3"></span>
			<span class="block-4"></span>
			<span class="block-5"></span>
			<span class="block-6"></span>
			<span class="block-7"></span>
			<span class="block-8"></span>
			<span class="block-9"></span>
			<span class="block-10"></span>
			<span class="block-11"></span>
			<span class="block-12"></span>
			<span class="block-13"></span>
			<span class="block-14"></span>
			<span class="block-15"></span>
			<span class="block-16"></span>
		</div>
	</div>
</div>
<!--PreLoader Ends-->


<!-- header -->
<header class="site-header">
	<nav class="navbar navbar-expand-lg transparent-bg static-nav">
		<div class="container">
			<a class="navbar-brand" href="<?= site_url() ?>">
				<img src="<?= get_stylesheet_directory_uri() ?>/images/logo.png" alt="logo">
			</a>

			<button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#xenav">
				<span> </span>
				<span> </span>
				<span> </span>
			</button>
			<div class="collapse navbar-collapse" id="xenav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="<?=get_stylesheet_directory_uri()?>/<?=site_url()?>/#ourhome">首页</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=get_stylesheet_directory_uri()?>/<?=site_url()?>/#aboutus">服务项目</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=get_stylesheet_directory_uri()?>/<?=site_url()?>/#facilities">设施介绍</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=get_stylesheet_directory_uri()?>/<?=site_url()?>/#portfolio-xe">活动影集</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=get_stylesheet_directory_uri()?>/<?=site_url()?>/#our-pricings">价格与优惠</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=get_stylesheet_directory_uri()?>/<?=site_url()?>/#our-testimonial">评价</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=get_stylesheet_directory_uri()?>/<?=site_url()?>/#our-blog">新闻</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=get_stylesheet_directory_uri()?>/<?=site_url()?>/#contactus">预约和联系</a>
					</li>
				</ul>
			</div>
		</div>

		<!--side menu open button-->
		<a href="javascript:void(0)" class="d-none d-lg-inline-block sidemenu_btn" id="sidemenu_toggle">
			<span></span> <span></span> <span></span>
		</a>
	</nav>

	<!-- side menu -->
	<div class="side-menu">
		<div class="inner-wrapper">
			<span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
			<nav class="side-nav">
				<ul class="navbar-nav w-100">
					<li class="nav-item active">
						<a class="nav-link" href="<?=get_stylesheet_directory_uri()?>/<?=site_url()?>/#ourhome">首页</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=get_stylesheet_directory_uri()?>/<?=site_url()?>/#aboutus">服务项目</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=get_stylesheet_directory_uri()?>/<?=site_url()?>/#facilities">设施介绍</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=get_stylesheet_directory_uri()?>/<?=site_url()?>/#portfolio-xe">活动影集</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=get_stylesheet_directory_uri()?>/<?=site_url()?>/#our-pricings">价格与优惠</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=get_stylesheet_directory_uri()?>/<?=site_url()?>/#our-testimonial">评价</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=get_stylesheet_directory_uri()?>/<?=site_url()?>/#our-blog">新闻</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=get_stylesheet_directory_uri()?>/<?=site_url()?>/#contactus">预约和联系</a>
					</li>
				</ul>
			</nav>

			<div class="side-footer w-100">
				<ul class="social-icons-simple white top40">
					<li><a href="javascript:void(0)"><i class="fa fa-facebook"></i> </a> </li>
					<li><a href="javascript:void(0)"><i class="fa fa-instagram"></i> </a> </li>
					<li><a href="javascript:void(0)"><i class="fa fa-twitter"></i> </a> </li>
				</ul>
				<p class="whitecolor">&copy; 2018 XeOne. Made With Love by themesindustry</p>
			</div>
		</div>
	</div>
	<a id="close_side_menu" href="javascript:void(0);"></a>
	<!-- End side menu -->
</header>
<!-- header -->

<!--page Header-->
<section class="page-header parallaxie padding_top">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-titles text-center">
					<h2 class="whitecolor font-light bottom30"><?php the_title(); ?></h2>
					<ul class="breadcrumb justify-content-center">
						<li class="breadcrumb-item"><a href="<?=site_url()?>">首页</a></li>
						<li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--page Header ends-->

<!-- Our Blogs -->
<section id="our-blog" class="padding bglight">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<div class="news_item shadow">
					<div class="image">
						<?php the_post_thumbnail('', array('class' => 'img-responsive')); ?>
					</div>
					<div class="news_desc text-left entry-content">
						<h3 class="text-capitalize font-light darkcolor"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<ul class="meta-tags top20 bottom20">
<!--							<li><a href="--><?//=get_stylesheet_directory_uri()?><!--/#."><i class="fa fa-calendar"></i>Feb 14, 2018</a></li>-->
<!--							<li><a href="--><?//=get_stylesheet_directory_uri()?><!--/#."> <i class="fa fa-user-o"></i> peter warren</a></li>-->
<!--							<li><a href="--><?//=get_stylesheet_directory_uri()?><!--/#."><i class="icon-comment"></i>5</a></li>-->
						</ul>
						<?php the_content(); ?>
						<!-- <div class="profile-authors heading_space">
							<h4 class="text-capitalize darkcolor bottom40">Comments</h4>
							<div class="eny_profile bottom30">
								<div class="profile_photo"><img src="<?=get_stylesheet_directory_uri()?>/images/testimonial-1.jpg" alt="Comments"> </div>
								<div class="profile_text">
									<h6 class="darkcolor"><a href="<?=get_stylesheet_directory_uri()?>/#.">Jenifer Lawrence</a></h6>
									<p class="top10">Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise.</p>
								</div>
							</div>
							<div class="eny_profile">
								<div class="profile_photo"><img src="<?=get_stylesheet_directory_uri()?>/images/testimonial-2.jpg" alt="Comments"> </div>
								<div class="profile_text">
									<h6 class="darkcolor"><a href="<?=get_stylesheet_directory_uri()?>/#.">Jkristen Smith</a></h6>
									<p class="top10">Keeping your eye on the ball while performing. Podcasting operational change management inside of workflows to establish a framework. </p>
								</div>
							</div>
						</div>
						<div class="post-comment">
							<h4 class="text-capitalize darkcolor">Add Comment</h4>
							<p class="bottom40">Your Email address will not be published</p>
							<form class="getin_form" id="post-a-comment">
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="form-group bottom35">
											<input class="form-control" type="text" placeholder="First Name:" required>
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="form-group bottom35">
											<input class="form-control" type="email" placeholder="Email:" required>
										</div>
									</div>
									<div class="col-md-12 col-sm-12">
										<div class="form-group bottom35">
											<textarea class="form-control" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="col-sm-12">
										<button type="submit" class="button btnprimary">submit request</button>
									</div>
								</div>
							</form>
						</div> -->
					</div>
				</div>
			</div>
			<!-- <div class="col-md-4">
				<aside class="sidebar whitebox">
					<div class="widget heading_space">
						<h4 class="text-capitalize darkcolor bottom20">Recent Posts</h4>
						<div class="single_post bottom15">
							<a href="<?=get_stylesheet_directory_uri()?>/#." class="post"><img src="<?=get_stylesheet_directory_uri()?>/images/team-3.jpg" alt="post image"></a>
							<div class="text">
								<a href="<?=get_stylesheet_directory_uri()?>/#.">About Invesment Management</a>
								<span>September 22,2018</span>
							</div>
						</div>
						<div class="single_post bottom15">
							<a href="<?=get_stylesheet_directory_uri()?>/#." class="post"><img src="<?=get_stylesheet_directory_uri()?>/images/team-3.jpg" alt="post image"></a>
							<div class="text">
								<a href="<?=get_stylesheet_directory_uri()?>/#.">We Conduct Share Holders Meet</a>
								<span>September 22,2018</span>
							</div>
						</div>
					</div>
					<div class="widget heading_space">
						<h4 class="text-capitalize darkcolor bottom20">Categories</h4>
						<ul class="webcats">
							<li><a href="<?=get_stylesheet_directory_uri()?>/#.">web design <span>(20)</span></a></li>
							<li><a href="<?=get_stylesheet_directory_uri()?>/#.">network <span>(05)</span></a></li>
							<li><a href="<?=get_stylesheet_directory_uri()?>/#.">marketing <span>(11)</span></a></li>
							<li><a href="<?=get_stylesheet_directory_uri()?>/#.">event (<span>(20)</span></a></li>
							<li><a href="<?=get_stylesheet_directory_uri()?>/#.">website <span>(07)</span></a></li>
							<li><a href="<?=get_stylesheet_directory_uri()?>/#.">themeforest<span>(19)</span></a></li>
						</ul>
					</div>
					<div class="widget heading_space">
						<h4 class="text-capitalize darkcolor bottom20">Tags</h4>
						<ul class="webtags">
							<li><a href="<?=get_stylesheet_directory_uri()?>/#.">web design</a></li>
							<li><a href="<?=get_stylesheet_directory_uri()?>/#.">network</a></li>
							<li><a href="<?=get_stylesheet_directory_uri()?>/#.">marketing</a></li>
							<li><a href="<?=get_stylesheet_directory_uri()?>/#.">posts</a></li>
							<li><a href="<?=get_stylesheet_directory_uri()?>/#.">event</a></li>
							<li><a href="<?=get_stylesheet_directory_uri()?>/#.">website</a></li>
							<li><a href="<?=get_stylesheet_directory_uri()?>/#.">social</a></li>
							<li><a href="<?=get_stylesheet_directory_uri()?>/#.">themeforest</a></li>
							<li><a href="<?=get_stylesheet_directory_uri()?>/#.">creative</a></li>
							<li><a href="<?=get_stylesheet_directory_uri()?>/#.">best solutions</a></li>
						</ul>
					</div>
					<div class="widget heading_space">
						<h4 class="text-capitalize darkcolor bottom20">search</h4>
						<form class="widget_search">
							<div class="input-group">
								<input type="search" class="form-control" placeholder="search..." required>
								<button type="submit" class="input-group-addon"><i class="fa fa-search"></i> </button>
							</div>
						</form>
					</div>
				</aside>
			</div> -->
		</div>
	</div>
</section>
<!--Our Blogs Ends-->


<!--Site Footer Here-->
<footer id="site-footer" class="padding_half">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<ul class="social-icons bottom25">
					<li><a href="javascript:void(0)"><i class="fa fa-facebook"></i> </a> </li>
					<li><a href="javascript:void(0)"><i class="fa fa-twitter"></i> </a> </li>
					<li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i> </a> </li>
					<li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i> </a> </li>
					<li><a href="javascript:void(0)"><i class="fa fa-instagram"></i> </a> </li>
					<li><a href="javascript:void(0)"><i class="fa fa-envelope-o"></i> </a> </li>
				</ul>
				<p class="copyrights"> &copy; 2019 XeOne. made with love by <a href="<?=get_stylesheet_directory_uri()?>/http://www.themesindustry.com/" target="_blank">themesindustry</a> </p>
			</div>
		</div>
	</div>
</footer>
<!--Footer ends-->



<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?=get_stylesheet_directory_uri()?>/js/jquery-3.1.1.min.js"></script>

<!--Bootstrap Core-->
<script src="<?=get_stylesheet_directory_uri()?>/js/popper.min.js"></script>
<script src="<?=get_stylesheet_directory_uri()?>/js/bootstrap.min.js"></script>

<!--to view items on reach-->
<script src="<?=get_stylesheet_directory_uri()?>/js/jquery.appear.js"></script>

<!--Equal-Heights-->
<script src="<?=get_stylesheet_directory_uri()?>/js/jquery.matchHeight-min.js"></script>

<!--Owl Slider-->
<script src="<?=get_stylesheet_directory_uri()?>/js/owl.carousel.min.js"></script>

<!--number counters-->
<script src="<?=get_stylesheet_directory_uri()?>/js/jquery-countTo.js"></script>

<!--Parallax Background-->
<script src="<?=get_stylesheet_directory_uri()?>/js/parallaxie.js"></script>

<!--Cubefolio Gallery-->
<script src="<?=get_stylesheet_directory_uri()?>/js/jquery.cubeportfolio.min.js"></script>

<!--FancyBox popup-->
<script src="<?=get_stylesheet_directory_uri()?>/js/jquery.fancybox.min.js"></script>

<!-- Video Background-->
<script src="<?=get_stylesheet_directory_uri()?>/js/jquery.background-video.js"></script>

<!--TypeWriter-->
<script src="<?=get_stylesheet_directory_uri()?>/js/typewriter.js"></script>

<!--Particles-->
<script src="<?=get_stylesheet_directory_uri()?>/js/particles.min.js"></script>

<!--WOw animations-->
<script src="<?=get_stylesheet_directory_uri()?>/js/wow.min.js"></script>

<!--Revolution SLider-->
<script src="<?=get_stylesheet_directory_uri()?>/js/revolution/jquery.themepunch.tools.min.js"></script>
<script src="<?=get_stylesheet_directory_uri()?>/js/revolution/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="<?=get_stylesheet_directory_uri()?>/js/revolution/extensions/revolution.extension.actions.min.js"></script>
<script src="<?=get_stylesheet_directory_uri()?>/js/revolution/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?=get_stylesheet_directory_uri()?>/js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?=get_stylesheet_directory_uri()?>/js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?=get_stylesheet_directory_uri()?>/js/revolution/extensions/revolution.extension.migration.min.js"></script>
<script src="<?=get_stylesheet_directory_uri()?>/js/revolution/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?=get_stylesheet_directory_uri()?>/js/revolution/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?=get_stylesheet_directory_uri()?>/js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?=get_stylesheet_directory_uri()?>/js/revolution/extensions/revolution.extension.video.min.js"></script>

<script src="<?=get_stylesheet_directory_uri()?>/js/functions.js"></script>
</body>
</html>