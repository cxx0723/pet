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


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>商品详情页</title>
		
		<!-- Main style sheet -->
		<link rel="stylesheet" href="/pet/Public/css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" href="/pet/Public/css/responsive.css">

		
	</head>
	
	<body>
	
		<div class="main-page-wrapper">


			<!-- shop-page-details ____________________________ -->
			<section class="shop-page-details">
				<div class="container">
					<div class="single-product-details">
						<div class="row">
							<div class="col-sm-6 col-xs-12 product-order-img">
								<div class="vig-img"><img src="/pet/Public/images/shop/img-20.jpg" alt="image"></div>
								<div class="row">
									<div class="col-xs-4">
										<div><img src="/pet/Public/images/shop/img-21.jpg" alt="image"></div>
									</div>
									<div class="col-xs-4">
										<div><img src="/pet/Public/images/shop/img-22.jpg" alt="image"></div>
									</div>
									<div class="col-xs-4">
										<div><img src="/pet/Public/images/shop/img-23.jpg" alt="image"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-xs-12">
								<div class="product-order-details">
									<h5><?=$res['name']?></h5>
									<ul class="price">
										<li>$<?=$res['price']?></li>
										<li><del>$<?=($res['price']*1.2)?></del></li>
										<li>In stock</li>
									</ul>
									<div class="rating-and-tag">
										<ul class="rating">
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
										</ul>
										<ul class="tag">
											<li>分类:  <span class="p-color"><?=$res['tname']?></span></li>
										</ul>
									</div>
									<p><?=$res['describe']?></p>
									<div class="value-decrease-and-button">
										<!-- <div class="content-and-select">
											<span>Content</span>
											<ul class="select-section">
												<li>
													<select class="selectpicker">
														<option>Choose on option</option>
														<option>By Price</option>
														<option>By Category</option>
														<option>By Date</option>
													</select>
												</li>
											</ul> <!-- /.top-select-section -->
										</div> -->
										<ul class="value-section">
											<li><button class="tran3s" id="value-decrease"><i class="fa fa-minus" aria-hidden="true"></i></button> </li>
											<li id="product-value">1</li>
											<li><button class="tran3s" id="value-increase"><i class="fa fa-plus" aria-hidden="true"></i></button> </li>
										</ul>
										<a href="#" class="hvr-float-shadow">Add To Cart</a>
									</div>
								</div> <!-- /.product-order-details -->
							</div> <!-- /.single-product-details -->
						</div>

						<div class="row">
							<div class="col-md-9 col-xs-12">
								<div class="review-tab">
									<ul class="nav nav-tabs">
										<li class="active"><a data-toggle="tab" href="#home">Product Description</a></li>
										<li><a data-toggle="tab" href="#menu1">Additional information</a></li>
										<li><a data-toggle="tab" href="#menu2">Reviews (1)</a></li>
									</ul>
									<div class="tab-content">
										<div id="home" class="tab-pane fade in active">
									    	<p>Complete feed for dogs - For adult and mature large breed dogs (from 26 to 44 kg). Over 15 months old. Digestive sensitivity</p>
									    	<h6>Digestive Health</h6>
									    	<p>Reinforced digestive tolerance thanks to very high quality protein sources and MOS which promote a balance in the intestinal flora and improve stool quality.</p>
										</div>
									  	<div id="menu1" class="tab-pane fade">
									    	<h4>Ten steps to making </h4>
									    	<ul>
									    		<li>1. Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
									    		<li>2. Suspendisse accumsan nunc velit, vel ullamcorper</li>
									    		<li>3. Quisque mollis tellus diam, non blandit magna accumsan quis.</li>
									    		<li>4. Sed ultricies eleifend felis pretium cursus.</li>
									    		<li>5. Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
									    		<li>6. Suspendisse accumsan nunc velit, vel ullamcorper</li>
									    		<li>7. Quisque mollis tellus diam, non blandit magna accumsan quis.</li>
									    		<li>8. Sed ultricies eleifend felis pretium cursus.</li>
									    	</ul>
									  	</div>
									  	<div id="menu2" class="tab-pane fade">
									    	<div id="review">
												<div class="single-review clearfix">
													<img src="/pet/Public/images/home/img-5.jpg" alt="" class="float-left">
													<div class="text float-left">
														<div class="clearfix">
															<div class="float-left">
																<span>March 14, 2017</span>
																<span>10 days ago</span>
																<h6>Lindsay Lohan</h6>
															</div>
															<ul class="float-right">
																<li><i class="fa fa-star" aria-hidden="true"></i></li>
																<li><i class="fa fa-star" aria-hidden="true"></i></li>
																<li><i class="fa fa-star" aria-hidden="true"></i></li>
																<li><i class="fa fa-star" aria-hidden="true"></i></li>
																<li><i class="fa fa-star" aria-hidden="true"></i></li>
															</ul>
														</div> <!-- /.clearfix -->
														<p>I am glad that I have taken the PHP Framework course here at Scholar. The teacher has been amazing throughtout the course. They have outstanding resources to  help you. In addition.</p>
													</div> <!-- /.text -->
												</div> <!-- /.single-review -->
											</div> <!-- /.review -->
									  	</div>
									</div>
								</div> <!-- /.review-tab -->
								<div class="pluses-item-and-progress">
									<h6>PLUSES ITEM</h6>
									<div class="progress">
									  <div class="progress-bar progress-bar-striped active" role="progressbar"
									  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
									    90%
									  </div>
									</div>
									<p>Composition: dehydrated poultry protein, rice, wheat flour, animal fats, vegetable protein isolate*, wheat, barley, maize gluten, hydrolysed animal proteins, vegetable fibres, beet pulp, fish oil, soya oil, minerals, psyllium husks and seeds, borage oil, hydrolysed crustaceans (source of glucosamine), hydrolysed cartilage (source of chondroitin).</p>
								</div>
								<div class="delivery">
									<h6>Delivery to UK</h6>
									<p>To the UK Orders of £30 or more are delivered FREE to the UK. Orders below this amount will have a delivery charge of $4.95.</p>
									<p>Additives (per kg):Nutritional additives: Vitamin A: 19000 IU, Vitamin D3: 800 IU, E1 (Iron): 41 mg, E2 (Iodine): 4.1 mg, E4 (Copper): 8 mg, E5 (Manganese): 53 mg, E6 (Zinc): 159 mg, E8 (Selenium): 0.07 mg -Preservatives - Antioxidants.</p>
									<p>Analytical Constituents: Protein: 28% - Fat content: 18% - Crude ash: 5.9% - Crude fibres: 2.9% - Per kg: Manno-oligo-saccharides: 0.5 g - Omega 6 fatty acids:35.2 g. *L.I.P.: protein selected for its very high assimilation.</p>
								</div>
								<div class="related-product">
									<h5>Related product</h5>
									<div class="row">
										<div class="col-sm-3 col-xs-6">
											<div class="related-product-item text-center">
												<div><img src="/pet/Public/images/shop/img-23.jpg" alt="image"></div>
												<a href="#">Smart Dog</a>
												<span>$ 43</span>
											</div>
										</div>
										<div class="col-sm-3 col-xs-6">
											<div class="related-product-item text-center">
												<div><img src="/pet/Public/images/shop/img-24.jpg" alt="image"></div>
												<a href="#">Smart Cat</a>
												<span>$ 34</span>
											</div>
										</div>
										<div class="col-sm-3 col-xs-6">
											<div class="related-product-item text-center">
												<div><img src="/pet/Public/images/shop/img-25.jpg" alt="image"></div>
												<a href="#">Dry Tech Pads</a>
												<span>$ 13</span>
											</div>
										</div>
										<div class="col-sm-3 col-xs-6">
											<div class="related-product-item text-center">
												<div><img src="/pet/Public/images/shop/img-26.jpg" alt="image"></div>
												<a href="#">Cucumber</a>
												<span>$ 24</span>
											</div>
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</section> <!-- / .shop-page-details -->

			<!-- Footer ____________________________ -->
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

				<div class="bottom-footer">
					<div class="container">
						<p class="float-left">Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
						<form action="#" class="float-right">
							<input type="text" placeholder="Your Email">
							<button class="tran3s p-bg-color">Subscribe</button>
						</form>
					</div> <!-- /.container -->
				</div> <!-- /.bottom-footer -->
			</footer>
			
		</div> <!-- /.main-page-wrapper -->
		

		<!-- Scroll Top Button -->
		<button class="scroll-top tran7s p-color-bg">
			<i class="fa fa-angle-up" aria-hidden="true"></i>
		</button>

		<!-- pre loader  -->
	 	<div id="loader-wrapper">
			<div id="loader"></div>
		</div>
	


		<!-- js file -->
		<!-- Main js file/jquery -->
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
		<script src="js/custom.js"></script>

	</body>
</html>

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