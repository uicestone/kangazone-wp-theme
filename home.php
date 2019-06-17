<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Kanga Zone</title>
	<link href="images/favicon.png" rel="icon">
	<link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/css/plugins.css">
	<link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/css/style.css">

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="90">

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
	<nav class="navbar navbar-expand-lg fixed-bottom gradient_bg">
		<div class="container">
			<a class="navbar-brand" href="<?= site_url() ?>"> <img
						src="<?= get_stylesheet_directory_uri() ?>/images/logo.png" alt="logo"> </a>
			<button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse"
					data-target="#xenav">
				<span> </span>
				<span> </span>
				<span> </span>
			</button>
			<div class="collapse navbar-collapse" id="xenav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link pagescroll" href="#ourhome">首页</a>
					</li>
					<li class="nav-item">
						<a class="nav-link pagescroll" href="#aboutus">服务项目</a>
					</li>
					<li class="nav-item">
						<a class="nav-link pagescroll" href="#facilities">设施介绍</a>
					</li>
					<li class="nav-item">
						<a class="nav-link pagescroll" href="#portfolio-xe">活动影集</a>
					</li>
					<li class="nav-item">
						<a class="nav-link pagescroll" href="#our-pricings">价格与优惠</a>
					</li>
					<li class="nav-item">
						<a class="nav-link pagescroll" href="#our-testimonial">评价</a>
					</li>
					<li class="nav-item">
						<a class="nav-link pagescroll" href="#our-blog">新闻</a>
					</li>
					<li class="nav-item">
						<a class="nav-link pagescroll" href="#contactus">预约和联系</a>
					</li>
				</ul>
			</div>
		</div>

		<!--side menu open button
		<a href="javascript:void(0)" class="d-none d-lg-inline-block sidemenu_btn" id="sidemenu_toggle">
			<span></span> <span></span> <span></span>
		 </a>-->
	</nav>

	<!-- side menu -->
	<div class="side-menu">
		<div class="inner-wrapper">
			<span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
			<nav class="side-nav">
				<ul class="navbar-nav w-100">
					<li class="nav-item active">
						<a class="nav-link pagescroll" href="#ourhome">首页</a>
					</li>
					<li class="nav-item">
						<a class="nav-link pagescroll" href="#facilities">设施介绍</a>
					</li>
					<li class="nav-item">
						<a class="nav-link pagescroll" href="#aboutus">服务项目</a>
					</li>
					<li class="nav-item">
						<a class="nav-link pagescroll" href="#portfolio-xe">活动影集</a>
					</li>
					<li class="nav-item">
						<a class="nav-link pagescroll" href="#our-pricings">价格与优惠</a>
					</li>
					<li class="nav-item">
						<a class="nav-link pagescroll" href="#our-testimonial">评价</a>
					</li>
					<li class="nav-item">
						<a class="nav-link pagescroll" href="#our-blog">新闻</a>
					</li>
					<li class="nav-item">
						<a class="nav-link pagescroll" href="#contactus">联系我们</a>
					</li>
				</ul>
			</nav>

			<ul class="social-icons-simple white top50 w-100">
				<li><a href="javascript:void(0)"><i class="fa fa-facebook"></i> </a></li>
				<li><a href="javascript:void(0)"><i class="fa fa-instagram"></i> </a></li>
				<li><a href="javascript:void(0)"><i class="fa fa-twitter"></i> </a></li>
			</ul>
			<p class="whitecolor">&copy; 2019 诗序软件</p>
		</div>
	</div>
	<a id="close_side_menu" href="javascript:void(0);"></a>
	<!-- End side menu -->
</header>
<!-- header -->

<!--Main Slider-->
<section class="full-screen gradient_bg_alt particles_bg d-flex flex-column justify-content-center">
	<div id="particles-js"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-1"></div>
			<div class="col-md-8 col-sm-10">
				<div class="text-center banner-center-content padding_half">
					<img src="<?=get_stylesheet_directory_uri()?>/images/logo.svg" style="width:50%;">
					<h2 class="text-capitalize whitecolor font-light top50 bottom35">
						来自<span class="fontbold">澳洲</span>的蹦床娱乐体验
					</h2>
					<!--<a href="#contactus" class="button btnwhite pagescroll">Let's Talk</a>
					<a href="#our-apps" class="button btnsecondary pagescroll">Read More</a>-->
				</div>
			</div>
			<div class="col-md-2 col-sm-1"></div>
		</div>
	</div>
</section>
<!--Main Slider ends -->

<!-- Background Parallax -->
<?php $page_video = get_page_by_path('video'); ?>
<section id="video-parallax" class="video-parallax padding parallaxie" style="background-image: url('<?=get_the_post_thumbnail_url($page_video->ID, 'full')?>')">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-7">
				<div class="heading-title whitecolor text-md-left text-center wow fadeIn" data-wow-delay="500ms">
					<span><?=get_the_subtitle($page_video->ID)?></span>
					<h2 class="fontregular"><?=get_the_title($page_video->ID)?></h2>
					<a data-fancybox
					   href="#intro-video"
					   class="button btnprimary fontmedium top20"><i class="fa fa-play"></i> &nbsp;播放</a>
					<video width="640" height="320" controls id="intro-video" autoplay style="display:none;padding:0;background:black;height:320px;width:100%">
						<source src="<?=get_field('video', $page_video->ID)?>" type="video/mp4">
					</video>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Background Parallax-->

<?php foreach (get_posts('category_name=service&order=asc') as $index => $service_post): ?>
<!--half img section-->
<section class="half-section" id="aboutus">
	<div class="container-fluid">
		<div class="row">
			<?php if ($index % 2 === 0): ?>
			<div class="col-lg-6 nopadding">
				<div class="image img-container">
					<?=get_the_post_thumbnail($service_post, 'post-thumbnail', array('class' => 'equalheight'))?>
				</div>
			</div>
			<?php endif; ?>
			<div class="col-lg-6 nopadding">
				<div class="split-box text-center center-block container-padding equalheight" id="btn-feature">
					<div class="heading-title padding">
						<span class=" wow fadeIn" data-wow-delay="300ms"><?=get_the_subtitle($service_post)?></span>
						<h2 class="darkcolor bottom20 wow fadeIn" data-wow-delay="350ms"><?=get_the_title($service_post)?></h2>
						<p class="heading_space wow fadeIn" data-wow-delay="400ms"><?=get_the_excerpt($service_post)?></p>
						<a href="#portfolio-xe" class="button btnprimary pagescroll wow fadeInUp"
						   data-wow-delay="500ms">立即预约</a>
					</div>
				</div>
			</div>
			<?php if ($index % 2 === 1): ?>
				<div class="col-lg-6 nopadding">
					<div class="image img-container">
						<?=get_the_post_thumbnail($service_post, 'post-thumbnail', array('class' => 'equalheight'))?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php endforeach; ?>
<!--half img section ends-->

<!-- Our Team-->
<section id="facilities" class="padding bglight">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2 col-sm-12 text-center">
				<div class="heading-title wow fadeInUp" data-wow-delay="300ms">
					<span>来自澳大利亚，专业、安全、丰富多彩</span>
					<h2 class="darkcolor bottom20">蹦床和其他娱乐设施</h2>
					<!--<p class="bottom10">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit.
						Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales
						lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>-->
				</div>
			</div>
		</div>
		<div class="row">
			<?php foreach (get_posts(array('category_name' => 'facility', 'order' => 'asc', 'posts_per_page' => -1)) as $facility): ?>
			<div class="col-md-4 col-xs-12">
				<div class="team-box top60 wow fadeIn" data-wow-delay="350ms">
					<div class="image">
						<?=get_the_post_thumbnail($facility->ID, 'medium')?>
					</div>
					<div class="team-content gradient_bg whitecolor">
						<h3><?=get_the_title($facility->ID)?></h3>
						<p class="bottom40"><?=get_the_subtitle($facility->ID)?></p>
						<div class="progress-bars">
							<div class="progress">
								<p>难度</p>
								<div class="progress-bar" data-value="<?=get_field('difficulty', $facility->ID)?>"><span><?=get_field('difficulty', $facility->ID)?>%</span></div>
							</div>
							<div class="progress">
								<p>体力</p>
								<div class="progress-bar" data-value="<?=get_field('exhausting', $facility->ID)?>"><span><?=get_field('exhausting', $facility->ID)?>%</span></div>
							</div>
							<div class="progress">
								<p>刺激</p>
								<div class="progress-bar" data-value="<?=get_field('exciting', $facility->ID)?>"><span><?=get_field('exciting', $facility->ID)?>%</span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!-- Our Team ends-->

<!--Some Feature -->
<!--section id="our-feature" class="padding single-feature">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-7 text-md-left text-center wow fadeInLeft" data-wow-delay="300ms">
				<div class="heading-title heading_space">
					<span>Service We Offer</span>
					<h2 class="darkcolor bottom30">Awesome Features</h2>
				</div>
				<p class="bottom35">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum
					auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam
					porttitor justo sed mi finibus, vel tristique risus faucibus. </p>
				<a href="#our-blog" class="button btnsecondary pagescroll">Our blog</a>
			</div>
			<div class="col-md-6 col-sm-5 wow fadeInRight" data-wow-delay="350ms">
				<div class="image top50"><img alt="SEO"
											  src="<?= get_stylesheet_directory_uri() ?>/images/awesome--feature.png">
				</div>
			</div>
		</div>
	</div>
</section>-->
<!--Some Feature ends-->

<!--Gallery-->
<section id="portfolio-xe" class="bglight padding">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2 col-sm-12 text-center">
				<div class="heading-title wow fadeInUp" data-wow-delay="300ms">
					<span>捕捉健康和欢乐的每一个瞬间</span>
					<h2 class="darkcolor bottom10">活动影集</h2>
					<p class="heading_space"></p>
				</div>
			</div>
		</div>
		<div id="flat-gallery" class="cbp">
			<?php foreach(get_posts('post_type=attachment&posts_per_page=6&category_name=album') as $image_post): ?>
			<div class="cbp-item itemshadow">
				<img src="<?=wp_get_attachment_url($image_post->ID)?>" alt="">
				<div class="overlay center-block whitecolor">
					<a class="plus" data-fancybox="gallery" href="images/portfolio-5.jpg"></a>
					<h4 class="top30"><?=get_the_title($image_post->ID)?></h4>
					<p><?=get_the_excerpt($image_post->ID)?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!--Gallery ends -->

<!-- Mobile Apps -->
<section id="our-apps" class="padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="heading-title wow fadeInUp" data-wow-delay="300ms">
					<span>来自澳大利亚的专业运动设施供应商</span>
					<h2 class="darkcolor heading_space">安全与舒适的蹦床</h2>
				</div>
			</div>
		</div>
		<div class="row" id="app-feature">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="content-left clearfix">
					<div class="feature-item left top30 bottom30 wow fadeInUp" data-wow-delay="300ms">
						<span class="icon"><i class="fa fa-mobile-phone"></i></span>
						<div class="text">
							<h4>回弹力度</h4>
							<p>Lorem Ipsum. Proin gravida nibh vel velit auctor
								aliquet</p>
						</div>
					</div>
					<div class="feature-item left top30 bottom30 wow fadeInUp" data-wow-delay="350ms">
						<span class="icon"><i class="fa fa-cog"></i></span>
						<div class="text">
							<h4>坚韧的弹力材料</h4>
							<p>Lorem Ipsum. Proin gravida nibh vel velit auctor
								aliquet</p>
						</div>
					</div>
					<div class="feature-item left top30 bottom30 wow fadeInUp" data-wow-delay="400ms">
						<span class="icon"><i class="fa fa-edit"></i></span>
						<div class="text">
							<h4>丰富的色彩</h4>
							<p>Lorem Ipsum. Proin gravida nibh vel velit auctor
								aliquet</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="image feature-item text-center wow fadeIn" data-wow-delay="500ms">
					<img src="<?= get_stylesheet_directory_uri() ?>/images/responsive.png" alt="">
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="content-right clearfix">
					<div class="feature-item right top30 bottom30 wow fadeInUp" data-wow-delay="300ms">
						<span class="icon"><i class="fa fa-code"></i></span>
						<div class="text">
							<h4>灵活的进出场时间</h4>
							<p>Lorem Ipsum. Proin gravida nibh vel velit auctor
								aliquet</p>
						</div>
					</div>
					<div class="feature-item right top30 bottom30 wow fadeInUp" data-wow-delay="350ms">
						<span class="icon"><i class="fa fa-folder-o"></i></span>
						<div class="text">
							<h4>挑高双层设计</h4>
							<p>Lorem Ipsum. Proin gravida nibh vel velit auctor
								aliquet</p>
						</div>
					</div>
					<div class="feature-item right top30 bottom30 wow fadeInUp" data-wow-delay="400ms">
						<span class="icon"><i class="fa fa-support"></i></span>
						<div class="text">
							<h4>专业的看护</h4>
							<p>Lorem Ipsum. Proin gravida nibh vel velit auctor
								aliquet</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Mobile Apps ends-->

<!-- WOrk Process-->
<section id="our-process" class="padding gradient_bg_default">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="heading-title wow fadeInUp" data-wow-delay="300ms">
					<h2 class="whitecolor"><span class="fontregular">进出场</span> 流程</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<ul class="process-wrapp">
				<li class="whitecolor wow fadeIn" data-wow-delay="350ms">
					<span class="pro-step bottom20">01</span>
					<p class="fontbold bottom25">预约</p>
					<p>提前预约以便我们更好的为您准备</p>
				</li>
				<li class="whitecolor wow fadeIn" data-wow-delay="400ms">
					<span class="pro-step bottom20">02</span>
					<p class="fontbold bottom25">前台登记</p>
					<p>前往场馆登记入场，并领取手环</p>
				</li>
				<li class="whitecolor wow fadeIn" data-wow-delay="500ms">
					<span class="pro-step bottom20">03</span>
					<p class="fontbold bottom25">准备</p>
					<p>前往准备去穿上专用袜，热身准备迎接挑战</p>
				</li>
				<li class="whitecolor wow fadeIn" data-wow-delay="600ms">
					<span class="pro-step bottom20">04</span>
					<p class="fontbold bottom25">入场</p>
					<p>选择喜欢和空闲的设施尽情玩耍吧</p>
				</li>
				<li class="whitecolor wow fadeIn" data-wow-delay="700ms">
					<span class="pro-step bottom20">05</span>
					<p class="fontbold bottom25">离场</p>
					<p>归还手环，在指定结束时间15分钟内离场</p>
				</li>
			</ul>
		</div>
	</div>
</section>
<!--WOrk Process ends-->


<!-- Counters -->
<section id="funfacts" class="padding_top fact-iconic gradient_bg">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-12 margin_bottom whitecolor text-md-left text-center wow fadeInLeft"
				 data-wow-delay="300ms">
				<h3 class="bottom25">南京首家蹦床运动娱乐体验中心</h3>
				<p class="title">更多玩法等你来开发</p>
			</div>
			<div class="col-md-7 col-sm-12 text-center">
				<div class="row">
					<div class="col-md-4 col-sm-4 icon-counters whitecolor margin_bottom  wow fadeInRight"
						 data-wow-delay="400ms">
						<div class="img-icon bottom15">
							<i class="fa fa-smile-o"></i>
						</div>
						<div class="counters">
							<span class="count_nums" data-to="3000" data-speed="2500"> </span>
							m<sup>2</sup>
							<i class="fa fa-plus"></i>
						</div>
						<p class="title">场馆面积</p>
					</div>
					<div class="col-md-4 col-sm-4 icon-counters whitecolor margin_bottom wow fadeInRight"
						 data-wow-delay="350ms">
						<div class="img-icon bottom15">
							<i class="fa fa-language"> </i>
						</div>
						<div class="counters">
							<span class="count_nums" data-to="10" data-speed="2500"> </span>
							m
							<i class="fa fa-plus"></i>
						</div>
						<p class="title">层高</p>
					</div>
					<div class="col-md-4 col-sm-4 icon-counters whitecolor margin_bottom wow fadeInRight"
						 data-wow-delay="300ms">
						<div class="img-icon bottom15">
							<i class="fa fa-desktop"></i>
						</div>
						<div class="counters">
							<span class="count_nums" data-to="300" data-speed="2500"> </span>
							人 <i class="fa fa-plus"></i>
						</div>
						<p class="title">最大同时容纳</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Counters ends-->

<!-- Pricing Tables -->
<?php $page_price = get_page_by_path('price'); ?>
<section id="our-pricings" class="padding pricing-bg" style="background-image: url('<?=get_the_post_thumbnail_url($page_price->ID, 'full')?>')">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2 col-sm-12 text-center">
				<div class="heading-title whitecolor wow fadeInUp" data-wow-delay="300ms">
					<span>多种付费方式</span>
					<h2 class="bottom30">价格和付费</h2>
					<p></p>
				</div>
			</div>
		</div>
		<div class="row centered-table">
			<div class="col-md-4 col-sm-12">
				<div class="price-table top60 wow fadeIn" data-wow-delay="300ms">
					<h3 class="bottom20 darkcolor">小时计费</h3>
					<ul class="top20">
						<li><span></span></li>
					</ul>
					<div class="clearfix"></div>
					<div class="ammount top50">
						<h2 class="defaultcolor"><i class="fa fa-cny"></i> 99 <small>/ 小时</small></h2>
					</div>
					<a href="javascript:void(0)" class="button btnprimary top50">立即购买 </a>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="price-table active top60 wow fadeIn" data-wow-delay="300ms">
					<h3 class="bottom20 darkcolor">套餐计费</h3>
					<ul class="top20">
						<li><span></span></li>
					</ul>
					<div class="clearfix"></div>
					<div class="ammount top50">
						<h2 class="defaultcolor"><i class="fa fa-cny"></i> 199 <small>/ 3小时</small></h2>
					</div>
					<a href="javascript:void(0)" class="button btnprimary top50">立即购买 </a>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="price-table top60 wow fadeIn" data-wow-delay="300ms">
					<h3 class="bottom20 darkcolor">包月计费</h3>
					<ul class="top20">
						<li><span></span></li>
					</ul>
					<div class="clearfix"></div>
					<div class="ammount top50">
						<h2 class="defaultcolor"><i class="fa fa-cny"></i> 1999 <small>/ 月</small></h2>
					</div>
					<a href="javascript:void(0)" class="button btnprimary top50">立即购买 </a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Pricing Tables ends-->


<!-- Testimonials -->
<section id="our-testimonial" class="padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="heading-title bottom30 wow fadeInUp" data-wow-delay="300ms">
					<span>听听他们的说法</span>
					<h2 class="darkcolor">游客评价</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div id="testimonial-slider" class="owl-carousel">
					<?php foreach (get_posts('category_name=testimonial&posts_per_page=-1') as $comment_post): ?>
					<div class="item">
						<div class="testimonial-wrapp">
							<span class="quoted"><i class="fa fa-quote-right"></i></span>
							<div class="testimonial-text">
								<p class="bottom40"><?=get_the_excerpt($comment_post->ID)?></p>
							</div>
							<div class="testimonial-photo">
								<?=get_the_post_thumbnail($comment_post->ID)?>
							</div>
							<h4 class="darkcolor"><?=get_the_title($comment_post->ID)?></h4>
							<small class="defaultcolor"><?=get_the_subtitle($comment_post->ID)?></small>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Testimonials Ends-->


<!-- Partners -->
<!--<section id="logos" class="padding_bottom">
	<div class="container">
		<h3 class="invisible">hidden</h3>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div id="partners-slider" class="owl-carousel">
					<div class="item">
						<div class="logo-item"><img alt=""
													src="<?= get_stylesheet_directory_uri() ?>/images/logo-1.png"></div>
					</div>
					<div class="item">
						<div class="logo-item"><img alt=""
													src="<?= get_stylesheet_directory_uri() ?>/images/logo-2.png"></div>
					</div>
					<div class="item">
						<div class="logo-item"><img alt=""
													src="<?= get_stylesheet_directory_uri() ?>/images/logo-3.png"></div>
					</div>
					<div class="item">
						<div class="logo-item"><img alt=""
													src="<?= get_stylesheet_directory_uri() ?>/images/logo-4.png"></div>
					</div>
					<div class="item">
						<div class="logo-item"><img alt=""
													src="<?= get_stylesheet_directory_uri() ?>/images/logo-5.png"></div>
					</div>
					<div class="item">
						<div class="logo-item"><img alt=""
													src="<?= get_stylesheet_directory_uri() ?>/images/logo-1.png"></div>
					</div>
					<div class="item">
						<div class="logo-item"><img alt=""
													src="<?= get_stylesheet_directory_uri() ?>/images/logo-2.png"></div>
					</div>
					<div class="item">
						<div class="logo-item"><img alt=""
													src="<?= get_stylesheet_directory_uri() ?>/images/logo-3.png"></div>
					</div>
					<div class="item">
						<div class="logo-item"><img alt=""
													src="<?= get_stylesheet_directory_uri() ?>/images/logo-4.png"></div>
					</div>
					<div class="item">
						<div class="logo-item"><img alt=""
													src="<?= get_stylesheet_directory_uri() ?>/images/logo-5.png"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>-->
<!--Partners Ends-->


<!-- Our Blogs -->
<section id="our-blog" class="half-section bglight">
	<div class="container-fluid">
		<div class="row"><?php $news_post = get_posts('category_name=news&posts_per_page=1')[0]; ?>
			<div class="col-md-6 col-sm-6 nopadding">
				<div class="image hover-effect">
					<?=get_the_post_thumbnail($news_post->ID, 'post-thumbnail', array('class' => 'equalheight'))?>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="split-box text-center center-block equalheight container-padding">
					<div class="heading-title padding_half">
						<span class="wow fadeIn" data-wow-delay="300ms">关注我们发布的最新信息</span>
						<h2 class="darkcolor bottom25 wow fadeIn" data-wow-delay="350ms"><?=get_the_title($news_post->ID)?></h2>
						<p class="heading_space wow fadeIn" data-wow-delay="400ms"><?=get_the_excerpt($news_post->ID)?></p>
						<a href="<?=get_the_permalink($post->ID)?>" class="button btnsecondary wow fadeInUp" data-wow-delay="500ms">查看详情</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Our Blogs Ends-->


<!-- Contact US -->
<section id="contactus" class="padding_top">
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-sm-12 margin_bottom wow fadeInUp" data-wow-delay="350ms">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="heading-title heading_space wow fadeInUp" data-wow-delay="300ms">
							<span>如有任何疑问，欢迎致电联系我们</span>
							<h2 class="darkcolor">立即预约</h2>
						</div>
					</div>
				</div>
				<!--<p>West is not just about graphic design; it's more than that. We offer integral communication services,
					and we're responsible for our process and results. We thank each client and their projects.</p>-->
				<div class="row">
					<div class="col-md-6 col-sm-6 our-address top40">
						<h5 class="bottom25">地址</h5>
						<p class="bottom15">南京市鼓楼区xx路xx号
						<span class="block">商场X座0-0</span> </p>
						<a class="pickus" href="#." data-text="Get Directions">在手机上导航</a>
					</div>
					<div class="col-md-6 col-sm-6 our-address top40">
						<h5 class="bottom25">联系电话</h5>
						<p class="bottom15">咨询电话 : 025 00000000
							<span class="block">预约电话 : 025 00000000</span></p>
						<a class="pickus" href="#." data-text="致电我们">致电我们</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 margin_bottom">
				<form class="getin_form wow fadeInUp" data-wow-delay="400ms" onsubmit="return false;">
					<div class="row">
						<div class="col-sm-10 offset-sm-1">
							<div id="calendar" class="mb-3"></div>
						</div>

						<div class="col-sm-10 offset-sm-1">
							<button type="submit" class="button btnprimary" id="submit_btn">进入微信小程序预约</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!--Location Map here-->
	<!--<div id="map-container"></div>-->
</section>
<!--Contact US Ends-->

<!--Site Footer Here-->
<footer id="site-footer" class="padding_half">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<ul class="social-icons bottom25 wow fadeInUp" data-wow-delay="300ms">
					<li><a href="javascript:void(0)"><i class="fa fa-wechat"></i> </a></li>
					<li><a href="javascript:void(0)"><i class="fa fa-weibo"></i> </a></li>
				</ul>
				<p class="copyrights wow fadeInUp" data-wow-delay="350ms"> &copy; 2019 诗序软件</p>
			</div>
		</div>
	</div>
</footer>
<!--Footer ends-->


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= get_stylesheet_directory_uri() ?>/js/jquery-3.1.1.min.js"></script>

<!--Bootstrap Core-->
<script src="<?= get_stylesheet_directory_uri() ?>/js/popper.min.js"></script>
<script src="<?= get_stylesheet_directory_uri() ?>/js/bootstrap.min.js"></script>

<!--to view items on reach-->
<script src="<?= get_stylesheet_directory_uri() ?>/js/jquery.appear.js"></script>

<!--Equal-Heights-->
<script src="<?= get_stylesheet_directory_uri() ?>/js/jquery.matchHeight-min.js"></script>

<!--Owl Slider-->
<script src="<?= get_stylesheet_directory_uri() ?>/js/owl.carousel.min.js"></script>

<!--number counters-->
<script src="<?= get_stylesheet_directory_uri() ?>/js/jquery-countTo.js"></script>

<!--Parallax Background-->
<script src="<?= get_stylesheet_directory_uri() ?>/js/parallaxie.js"></script>

<!--Cubefolio Gallery-->
<script src="<?= get_stylesheet_directory_uri() ?>/js/jquery.cubeportfolio.min.js"></script>

<!--FancyBox popup-->
<script src="<?= get_stylesheet_directory_uri() ?>/js/jquery.fancybox.min.js"></script>

<!-- Video Background-->
<script src="<?= get_stylesheet_directory_uri() ?>/js/jquery.background-video.js"></script>

<!--TypeWriter-->
<script src="<?= get_stylesheet_directory_uri() ?>/js/typewriter.js"></script>

<!--Particles-->
<script src="<?= get_stylesheet_directory_uri() ?>/js/particles.min.js"></script>

<!--WOw animations-->
<script src="<?= get_stylesheet_directory_uri() ?>/js/wow.min.js"></script>

<!--moment.js-->
<script src="https://cdn.staticfile.org/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdn.staticfile.org/moment.js/2.24.0/locale/zh-cn.js"></script>

<!--jsCalendar.js-->
<script src="<?= get_stylesheet_directory_uri() ?>/js/calendar.js"></script>

<!--Revolution SLider-->
<script src="<?= get_stylesheet_directory_uri() ?>/js/revolution/jquery.themepunch.tools.min.js"></script>
<script src="<?= get_stylesheet_directory_uri() ?>/js/revolution/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="<?= get_stylesheet_directory_uri() ?>/js/revolution/extensions/revolution.extension.actions.min.js"></script>
<script src="<?= get_stylesheet_directory_uri() ?>/js/revolution/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?= get_stylesheet_directory_uri() ?>/js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?= get_stylesheet_directory_uri() ?>/js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?= get_stylesheet_directory_uri() ?>/js/revolution/extensions/revolution.extension.migration.min.js"></script>
<script src="<?= get_stylesheet_directory_uri() ?>/js/revolution/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?= get_stylesheet_directory_uri() ?>/js/revolution/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?= get_stylesheet_directory_uri() ?>/js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?= get_stylesheet_directory_uri() ?>/js/revolution/extensions/revolution.extension.video.min.js"></script>

<!--Google Map API-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJnKEvlwpyjXfS_h-J1Cne2fPMqeb44Mk"></script>
<script src="<?= get_stylesheet_directory_uri() ?>/js/functions.js"></script>
</body>
</html>