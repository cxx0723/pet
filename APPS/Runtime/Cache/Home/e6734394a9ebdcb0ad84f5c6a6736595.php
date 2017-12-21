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


<style type="text/css">

</style>
<section class="">
				<div class="them-inner-banner">
					<div class="inner-banner-opact">
						<div class="container">
							<div class="inner-banner-title">
								<div class="row">
									<div class="col-sm-8 col-xs-12">
										<div class="">
											<h1>商店</h1>
											<p>宠物爱好者依赖贝基的宠物照顾，专业遛狗和宠物坐。.</p>
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
							<li><a href="index.html">主页</a></li>
							<li><span>-</span></li>
							<li><a href="index.html">Page</a></li>
							<li><span>-</span></li>
							<li><a href="#">商店</a></li>
						</ul>
					</div>
				</div>
			</section>

			<!-- Shop ____________________________ -->
			<section class="shop-page">
				<div class="container">
					<div class="shop-item-wrapper">
						<div class="row top-select-and-form-section">
							<div class="col-lg-3  col-sm-4 col-xs-12">
								<div class="">
									<form action="#">
										<input type="text" placeholder="Search Product ...">
										<button><i class="fa fa-search" aria-hidden="true"></i></button>
									</form>
								</div>
							</div>
							<div class="col-lg-6  col-sm-4  col-xs-12">
								<div class="text-center">
									<p>显示12个结果中的1 - 12</p>
								</div>
							</div>
							<div class="col-lg-3 col-sm-4  col-xs-12">
								<ul class="select-section">
									<li>
										<select class="selectpicker">
											<option>默认</option>
											<option>按价格</option>
											<option>按类别</option>
											<option>按日期</option>
										</select>
									</li>
								</ul> <!-- /.top-select-section -->
							</div>
						</div>
                     
						<div class="row">
							<?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="col-md-4 col-xs-6 product-item-width" gid="<?php echo ($v["id"]); ?>" id="parent">
								<div class="shop-item-product-wrapper">
									<div class="shop-item-product">
										<div class="clear-fix">
                                       <?php if($v['coll']==1): else: ?><a href="javascript::" id="collect" class="float-left"><i class="fa fa-heart-o" aria-hidden="true"></i></a><?php endif; ?>
  
											<a href="javascript::" id="cart" class="float-right"><i class="flaticon-shopping-bag"></i></a>
										</div>
										<div class="product">
											<img src="/pet/uploads/<?php echo ($v["img"]); ?>" alt="image">
										</div>
										<div class="price-and-taitle">
											<h5><a href="<?php echo U('Cart/detail',['gid'=>$v['id']]);?>"><?php echo ($v["name"]); ?></a></h5>
											<span>$<?php echo ($v["price"]); ?></span>
										</div>
									</div>
								</div>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<ul class="shop-page-prev-next-button text-center">
							
						<?=$page?>
						 
						</ul>
					</div>	<!-- / .shop-item-wrapper -->
				</div>
			</section>
<script type="text/javascript" src="/pet/Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
	//添加购物车
	$(document).on('click','#cart',function(){
		 var gid=$(this).parents('#parent').attr('gid');
		 $.ajax({
		 	 type : "post",
		 	 url  : "/pet/index.php/Home/shop/add_cart",
		 	 data : 'gid='+gid,
		 	 success:function(e){
		 	 	if(e == 1)
		 	 	{

		 	 		alert('请先登录');
		 	 		
		 	 		window.location.href="/pet/index.php/admin/Login/index"
		 	 	}else{
		 	 		alert('添加购物车成功')
		 	 	}
		 	 	
		 	 }
		 })
	})
    
    //收藏
	$(document).on('click','#coll',function(){
		 var gid=$(this).parents('#parent').attr('gid');
		 $.ajax({
		 	 type : "post",
		 	 url  : "/pet/index.php/Home/shop/add_collect",
		 	 data : 'gid='+gid,
		 	 success:function(e){
		 	 	if(e == 1)
		 	 	{

		 	 		alert('请先登录');
		 	 		
		 	 		window.location.href="/pet/index.php/admin/Login/index"
		 	 	}else{
		 	 		alert('收藏成功')
		 	 	}
		 	 }
		 })
		 $(this).remove()
	})
</script>
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