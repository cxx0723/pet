<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" href="/pet/Public/css/style.css">
		<!-- responsive style sheet -->
<link rel="stylesheet" href="/pet/Public/css/responsive.css">
<div class="main-page-wrapper">
<section class="header-section">
				<div class="top-header">
					<div class="container">
						
					</div>
				</div>
				
				<!-- Theme Main Menu ____________________________ -->
				<div class="theme-main-menu">
					<div class="container">
						<div class="main-menu clear-fix">

							<div class="search-button-content float-right">
								<button class="cart tran3s"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <span>2</span></button>
					   			<button class="search b-p-bg-color" id="search-button"><i class="fa fa-search" aria-hidden="true"></i></button>
					   			<div class="search-box tran5s" id="searchWrapper">
					   				<button id="close-button" class="p-color"><i class="fa fa-times" aria-hidden="true"></i></button>
					   				<div class="container">
					   					<img src="/pet/Public/images/them-logo/them-main-logo-1.png" alt="Logo">
					   					<form action="#">
					   						<input type="text" placeholder="Search....">
					   						<button class="p-bg-color"><i class="fa fa-search" aria-hidden="true"></i></button>
					   					</form>
					   				</div>
					   			</div> <!-- /.search-box -->
					   		</div> <!-- /.right-content -->
					   		<div class="them-logo float-left"><a href="#"><img src="/pet/Public/images/them-logo/them-main-logo-1.jpg" alt="logo"></a></div>

							<!-- Menu -->
							<nav class="navbar">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed tran3s" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
										<span class="sr-only tran3s">Toggle navigation</span>
										<span class="icon-bar tran3s"></span>
										<span class="icon-bar tran3s"></span>
										<span class="icon-bar tran3s"></span>
									</button>
								</div>
								
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="navbar-collapse-1">
									<ul class="nav navbar-nav">
										<li><a href="<?php echo U('Index/index');?>">首页</a></li>
										<li><a href="<?php echo U('Pet/index');?>">宠物</a></li>
									    <li><a href="<?php echo U('About/index');?>">关于</a></li>
										<li><a href="<?php echo U('Team/index');?>">团队</a></li>
										<li><a href="<?php echo U('Shop/index');?>">商店</a></li>
										<li><a href="<?php echo U('Shoper/index');?>">商家</a></li>
                                        
                                        <?php if(empty(Cookie('uname'))): ?><li><a href="<?php echo U('Login/index');?>">登录</a></li>
                                        <?php else: ?><li><a href="<?php echo U('Cart/index');?>">购物车</a></li> 
                                          <font color="red"><?=Cookie('uname')?></font>
                                          <a href="<?php echo U('Login/out');?>">退出</a><?php endif; ?>

										


										
									</ul>
								</div><!-- /.navbar-collapse -->
							</nav>
						</div> <!-- / menu-skew-div -->
					</div> <!-- /.container main-menu -->
				</div> <!-- /.main-menu -->
</section>


<section class="">
				<div class="them-inner-banner">
					<div class="inner-banner-opact">
						<div class="container">
							<div class="inner-banner-title">
								<div class="row">
									<div class="col-sm-8 col-xs-12">
										<div class="">
											<h1>关于我们</h1>
											<p>我们专业的团队是宠物爱好者们可依赖的宠物护理.</p>
										</div>
									</div>
									<div class="col-sm-4 col-xs-12">
										<div class="">
											<a href="#" class="hvr-float-shadow">询价</a>
										</div>
									</div>
								</div>
								<img src="/pet/Public/images/about/dog-1.png" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="inner-banner-bottom">
					<div class="container">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><span>-</span></li>
							<li><a href="index.html">Page</a></li>
							<li><span>-</span></li>
							<li><a href="#">About us</a></li>
						</ul>
					</div>
				</div>
			</section>
 
			

			<!-- We are myPet ____________________________ -->
			<section class="we-are-my-pet-section">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-xs-12">
							<div class="we-are-my-pet-text">
								<span></span>
								<h2>我们是<span>宠物<span>之家</span></span></h2>
								<p>欢迎！我们很高兴您想为您的毛茸茸的朋友探索一种不同类型的宠物护理。自1995年以来，我们一直在利特尔顿社区提供一流的宠物照顾和宠物照顾，并且作为宠物寄宿的替代选择

                                  你的宠物住在自己的家里有很多好处。他们之中有一些是; 没有接触到犬舍咳嗽，犬流感和寄生虫等疾病。.</p>
								<a href="#" class="hvr-float-shadow">了解更多</a>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<div class="we-are-my-pet-img">
								<img src="/pet/Public/images/home/img-1.jpg" alt="image">
								<div></div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Company History _________________________________ -->
			<section class="company-history-section">
				<div class="company-history-shape-img-top"><img src="/pet/Public/images/shape-1.png" alt="shape-img"></div>
				<div class="company-history-containt-opact">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-xs-6 history-item-weight">
								<div class="clear-fix">
									<div class="history-item item-one">
										<div>
											<i class="flaticon-handshake"></i>
											<p>用户成交量</p>
											<h2><span class="timer" data-from="0" data-to="210" data-speed="2000" data-refresh-interval="5">0</span></h2>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-xs-6 history-item-weight">
								<div class="clear-fix">
									<div class="history-item item-two">
										<div>
											<i class="flaticon-satisfaction"></i>
											<p>客户满意度</p>
											<h2><span class="timer" data-from="0" data-to="100" data-speed="2000" data-refresh-interval="5">0</span>%</h2>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-xs-6 history-item-weight col-item-three">
								<div class="clear-fix">
									<div class="history-item item-three">
										<div>
											<i class="flaticon-construction"></i>
											<p>宠物托管</p>
											<h2><span class="timer" data-from="0" data-to="95" data-speed="2000" data-refresh-interval="5">0</span></h2>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-xs-6 history-item-weight">
								<div class="clear-fix">
									<div class="history-item item-four">
										<div>
											<i class="flaticon-medal"></i>
											<p>获奖</p>
											<h2><span class="timer" data-from="0" data-to="234" data-speed="2000" data-refresh-interval="5">0</span></h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Our pet health ____________________________ -->
			<section class="our-pet-health-section">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-xs-12">
							<div class="our-work-process">
								<h4>我们的宠物医疗保健系统</h4>
								<p>宠物护理兽医院的医生和工作人员具有多年的治疗各种爬行动物的经验，包括胡子龙，壁虎，蛇和龟。我们的医院为您的宠物雪貂提供身体检查，疫苗接种，营养，行为和环境丰富信息</p>
								<div class="row">
									<div class="col-xs-6">
										<div class="">
											<i class="flaticon-dog-training"></i>
											<h6><a href="#">送货上门</a></h6>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="">
											<i class="flaticon-snowshoe-cat"></i>
											<h6><a href="#">宠物品质</a></h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<div class="doing-the-right-thing">
								<h5>做正确的事情，发现我们的产品</h5>
								<p>我们的兽医和工作人员了解您与宠物分享的特殊纽带的重要性，致力于为现代兽医护理提供最好的服务</p>
								<div class="inspiration-tab">
									<div class="inspiration-panel">
										<div class="panel-group theme-accordion" id="accordion">
										  <div class="panel">
										    <div class="panel-heading active-panel">
										      <h6 class="panel-title">
										        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
										        全国值得信赖的宠物保姆</a>
										      </h6>
										    </div>
										    <div id="collapse1" class="panel-collapse collapse in">
										      <div class="panel-body">
										      	<p>创新与创意的完美结合，我们的浴室瓷砖符合国际标准。高质量的20mm厚的瓷砖，可以放置在基座上,</p>
										      </div>
										    </div>
										  </div> <!-- /panel 1 -->
										  <div class="panel">
										    <div class="panel-heading">
										      <h6 class="panel-title">
										        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
										        

我能给我的鸟什么作为款待？ </a>
										      </h6>
										    </div>
										    <div id="collapse2" class="panel-collapse collapse">
										      <div class="panel-body">
										      	<p>创新与创意的完美结合，我们的浴室瓷砖符合国际标准。高质量的20mm厚的瓷砖，可以放置在基座上,</p>
										      </div>
										    </div>
										  </div> <!-- /panel 2 -->
										  <div class="panel">
										    <div class="panel-heading">
										      <h6 class="panel-title">
										        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
										        当你的兔子停止饮食</a>
										      </h6>
										    </div>
										    <div id="collapse3" class="panel-collapse collapse">
										      <div class="panel-body">
										      	<p>创新与创意的完美结合，我们的浴室瓷砖符合国际标准。高质量的20mm厚的瓷砖，可以放置在基座上,</p>
										      </div>
										    </div>
										  </div> <!-- /panel 3 -->
										</div> <!-- end #accordion -->
									</div> <!-- End of .inspiration-panel -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Client Review ____________________________ -->
			<div class="client-slider">
				<div class="opacity">
					<div class="container">
						<div class="them-title text-center">
							<span></span>
							<h2>客户评论</h2>
						</div> <!-- /.theme-title -->

						<div class="testimonial-slider">
							<div id="client-review-slider" class="owl-carousel owl-theme">
								<div class="item">
									<div class="clearfix">
										<img src="/pet/Public/images/home/img-8.jpg" alt="" class="float-left">
										<div class="name float-left">
											<h6>Mahfuz Riad</h6>
											<p>CEO, Company</p>
										</div> <!-- /.name -->
									</div> <!-- /.clearfix -->
									<div class="text">
										<p>I’ve been happy with the services provided by Finazi LLC. Felix has been wonderful! He has returned my calls quick-ly, and he answered all my questions.</p>
									</div>
								</div> <!-- /.item -->
								<div class="item">
									<div class="clearfix">
										<img src="/pet/Public/images/home/img-9.jpg" alt="" class="float-left">
										<div class="name float-left">
											<h6>Abdur Rob</h6>
											<p>CEO, Developer</p>
										</div> <!-- /.name -->
									</div> <!-- /.clearfix -->
									<div class="text">
										<p>I’ve been happy with the services provided by Finazi LLC. Felix has been wonderful! He has returned my calls quick-ly, and he answered all my questions.</p>
									</div>
								</div> <!-- /.item -->
								<div class="item">
									<div class="clearfix">
										<img src="/pet/Public/images/home/img-8.jpg" alt="" class="float-left">
										<div class="name float-left">
											<h6>Mahfuz Riad</h6>
											<p>CEO, Company</p>
										</div> <!-- /.name -->
									</div> <!-- /.clearfix -->
									<div class="text">
										<p>I’ve been happy with the services provided by Finazi LLC. Felix has been wonderful! He has returned my calls quick-ly, and he answered all my questions.</p>
									</div>
								</div> <!-- /.item -->
							</div> <!-- /.col- -->
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.client-slider -->

			 <!-- /.our-blog -->

			<!-- Partner Logo ____________________________ -->
	        <div class="partners-section">
				<div class="container">
					<div class="">
						<div id="partner-logo" class="owl-carousel owl-theme">
							<div class="item"><div><img src="/pet/Public/images/home/slide-logo-1.png" alt="logo"></div></div>
							<div class="item"><div><img src="/pet/Public/images/home/slide-logo-2.png" alt="logo"></div></div>
							<div class="item"><div><img src="/pet/Public/images/home/slide-logo-3.png" alt="logo"></div></div>
							<div class="item"><div><img src="/pet/Public/images/home/slide-logo-4.png" alt="logo"></div></div>
							<div class="item"><div><img src="/pet/Public/images/home/slide-logo-2.png" alt="logo"></div></div>
						</div> <!-- End .partner_logo -->
					</div>
				</div>
			</div>
</div>
<footer>
				<div class="container">
					<div class="top-footer row">
						<div class="col-md-5 col-sm-7 col-xs-12 footer-logo">
							<a href="#"><img src="/pet/Public/images/them-logo/them-main-logo-2.jpg" alt="Logo"></a>
							<p><span class="p-color">myPet</span> was established in 2017 by Pet business veterans, Rod Davies and Matthew Levington, the journey began when founders Matthew Levington and Rod Davies, met up in 2017 over a beer</p>
							<ul class="icon">
								<li><a href="" class="tran3s"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="" class="tran3s"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="" class="tran3s"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="" class="tran3s"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>

							<ul class="policy">
								<li><a href="" class="tran3s">Privacy Policy </a></li>
								<li><a>|</a></li>
								<li><a href="" class="tran3s">Legal Policy</a></li>
							</ul>
						</div> <!-- /.footer-logo -->

						<div class="col-md-4 col-sm-5 col-xs-12 footer-list">
							<h5>Important Links</h5>

							<ul>
								<li><a href="#" class="tran3s">Support</a></li>
								<li><a href="#" class="tran3s">About us </a></li>
								<li><a href="#" class="tran3s">Project</a></li>
								<li><a href="shop.html" class="tran3s">Shop</a></li>
								<li><a href="#" class="tran3s">Performance</a></li>
								<li><a href="#" class="tran3s">News</a></li>
								<li><a href="#" class="tran3s">Pet Health Food</a></li>
							</ul>
							<ul>
								<li><a href="#" class="tran3s">Pet</a></li>
								<li><a href="#" class="tran3s">Our History</a></li>
								<li><a href="#" class="tran3s">What We Do</a></li>
								<li><a href="#" class="tran3s">Living Areas</a></li>
								<li><a href="#" class="tran3s">Pet Product</a></li>
								<li><a href="contact-us.html" class="tran3s">Contact us</a></li>
							</ul>
						</div> <!-- /.footer-list -->

						<div class="col-md-3 col-xs-12 footer-news">
							<h5>News Update</h5>

							<ul>
								<li>
									<h6><a href="#" class="tran3s">Prefinished Solid Hardwood Flooring</a></h6>
									<span>january 02,2017</span>
								</li>
								<li>
									<h6><a href="#" class="tran3s">Latst pet care in summer 12 care them well</a></h6>
									<span>january 02,2017</span>
								</li>
							</ul>
						</div> <!-- /.footer-news -->
					</div> <!-- /.top-footer -->
				</div> <!-- /.container -->

			</footer>
			
        <script src="/pet/Public/vendor/jquery-2.2.3.min.js"></script>
		<!-- bootstrap-select.min.js -->
		<script src="/pet/Public/vendor/bootstrap-select-1.10.0/dist/js/bootstrap-select.min.js"></script>
		<!-- bootstrap js -->
		<script src="/pet/Public/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!-- camera js -->
		<script src="/pet/Public/vendor/Camera-master/scripts/camera.min.js"></script>
		<script src="/pet/Public/vendor/Camera-master/scripts/jquery.easing.1.3.js"></script>
		<!-- Owl carousel -->
		<script src="/pet/Public/vendor/OwlCarousel2/dist/owl.carousel.min.js"></script>
		<!-- appear & countTo -->
		<script src="/pet/Public/vendor/jquery.appear.js"></script>
		<script src="/pet/Public/vendor/jquery.countTo.js"></script>
		<!-- fancybox -->
		<script src="/pet/Public/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
		<!-- Gallery - isotop -->
		<script type="text/javascript" src="/pet/Public/vendor/isotope.pkgd.min.js"></script>
		<!-- WOW js -->
		<script type="text/javascript" src="/pet/Public/vendor/WOW-master/dist/wow.min.js"></script>
		<!-- Circle Progress -->
		<script type="text/javascript" src="/pet/Public/vendor/circle-progress.js"></script>
		<!-- Style js -->
		<script src="/pet/Public/js/custom.js"></script>