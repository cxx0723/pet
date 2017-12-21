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
   .fa{
      cursor: pointer;
   }
</style>
<link rel="stylesheet" href="/pet/Public/assetss/css/bootstrap.min.css" type="text/css">
   <!-- Dropdownhover CSS -->
   <link rel="stylesheet" href="/pet/Public/assetss/css/bootstrap-dropdownhover.min.css" type="text/css">
   <!-- latest fonts awesome -->
   <link rel="stylesheet" href="/pet/Public/assetss/font/css/font-awesome.min.css" type="text/css">
   <!-- simple line fonts awesome -->
   <link rel="stylesheet" href="/pet/Public/assetss/simple-line-icon/css/simple-line-icons.css" type="text/css">
   <!-- stroke-gap-icons -->
   <link rel="stylesheet" href="/pet/Public/assetss/stroke-gap-icons/stroke-gap-icons.css" type="text/css">
   <!-- Animate CSS -->
   <link rel="stylesheet" href="/pet/Public/assetss/css/animate.min.css" type="text/css">
   <!-- Style CSS -->
   <link rel="stylesheet" href="/pet/Public/assetss/css/style.css" type="text/css">
   <!-- Style CSS -->
   <link rel="stylesheet" href="/pet/Public/assetss/css/slider.css" type="text/css">
   <!--  baguetteBox -->
   <link rel="stylesheet" href="/pet/Public/assetss/css/baguetteBox.css">
   <!-- Owl Carousel Assets -->
   <link href="/pet/Public/assetss/owl-carousel/owl.carousel.css" rel="stylesheet">
   <link href="/pet/Public/assetss/owl-carousel/owl.theme.css" rel="stylesheet">
<section class="shopping-cart">
            <!-- .shopping-cart -->
            <div class="container">
				<div class="row">
				
				<div class="col-md-12">
                  <h2>You cart items</h2>
                  <table>
                     <tr>
                        <th>商品图片</th>
                        <th>产品名称</th>
                        <th>描述</th>
                        <th>价钱</th>
                        <th>数量</th>
                        <th>总价格</th>
                        <th></th>
                     </tr>
                   <?php if(is_array($cart)): $i = 0; $__LIST__ = $cart;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr gid="<?php echo ($v["cid"]); ?>">
                        <td><img src="/pet/uploads/<?php echo ($v["img"]); ?>" alt="13"></td>
                        <td><?php echo ($v["gname"]); ?></td>
                        <td><?php echo ($v["describe"]); ?></td>
                        <td><strong>￥<?php echo ($v["price"]); ?></strong></td>
                        <td><input type="number" name="quantity" id="num" min="1" max="500" value="<?php echo ($v["gnum"]); ?>"></td>
                        <td><strong>￥<?=$v['gnum']*$v['price']?></strong></td>
                        <td><span class="red"><i class="fa fa-times" aria-hidden="true"></i></span></td>
                     </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                  </table>
                  <div class="col-sm-6 col-md-6">
                     <a href="#" class="button red">继续购物</a>
                  </div>
                  <div class="col-sm-6 col-md-6 text-right">
                     <a href="#" class="button">更新购物车</a>
                     <a href="#" class="button">清空购物车</a>
                  </div>
                  <div class="col-sm-4 col-md-4">
                     <div class="shipping-outer">
                        <h2>运费</h2>
                        <div class="row">
                           <div class="col-md-12 counttry">
                              <div class="lable">收货人姓名:</div>
                              <input name="counttry" type="text">
                           </div>
                           <div class="col-sm-6 col-md-6">
                              <div class="lable">选择你的收货地址:</div>
                              <div class="size State">
                                 <div class="select-option">
                                   <select id="s_province" name="s_province"></select>  

                                   <select id="s_city" name="s_city" ></select>  

                                    <select id="s_county" name="s_county"></select>
                                 </div>
                              </div>
                           </div>
                           <!-- <div class="col-sm-6 col-md-6">
                              <div class="lable">邮政编码:</div>
                              <input name="counttry" placeholder="Zip Code" type="text">
                           </div> -->
                        </div>
                        <a href="#" class="button2">更新送货</a>
                     </div>
                  </div>
                  <div class="col-sm-4 col-md-4">
                     <div class="shipping-outer">
                        <h2>优惠券</h2>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="lable">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                              <input name="counttry" type="text">
                           </div>
                           <div class="col-md-12">
                              <div class="lable">Coupon Code:</div>
                              <input name="Coupon Code" placeholder="Coupon Code" type="text">
                           </div>
                        </div>
                        <a href="#" class="button2">REdeem code</a>        		
                     </div>
                  </div>
                  <div class="col-sm-4 col-md-4">
                     <div class="shipping-outer">
                        <h2>购物车总数</h2>
                        <ul>
                           <li>购物车小计: <strong>￥640.00</strong></li>
                           <li>运费: <strong>￥10.00</strong></li>
                           <li>总额: <strong>￥650.00</strong></li>
                           <li class="text-center">
                              <a href="#" class="redbutton">支付</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
				</div>
               
            </div>
            <!-- /.shopping-cart -->
         </section>
    <script class="resources library" src="/pet/Public/js/area.js" type="text/javascript"></script>
   <script type="text/javascript">_init_area();</script>
   <script src="/pet/Public/js/jquery-1.7.2.min.js"></script>
   <!-- Bootstrap Core JavaScript -->
   <script src="/pet/Public/assetss/js/bootstrap-dropdownhover.min.js"></script>
   <!-- Plugin JavaScript -->
   <script src="/pet/Public/assetss/js/jquery.easing.min.js"></script>
   <script src="/pet/Public/assetss/js/wow.min.js"></script>
   <!-- owl carousel -->
   <script src="/pet/Public/assetss/owl-carousel/owl.carousel.js"></script>
   <!--  Custom Theme JavaScript  -->
   <script type="text/javascript">
    
var Gid  = document.getElementById ;

var showArea = function(){

   Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +    

   Gid('s_city').value + " - 县/区" + 

   Gid('s_county').value + "</h3>"

                     }

Gid('s_county').setAttribute('onchange','showArea()');
  
   
</script>
<script type="text/javascript">
   $(document).on('change','#num',function(){
      var num=$(this).val();
      var p = $(this).parent().prev().text();
      var m =p.substring(1);
      var money = m*num;
      $(this).parent().next().text("￥"+money)

   })

   $(document).on('click','.fa',function(){
      _this=$(this);
       var gid=$(this).parents('tr').attr('gid');
       if(window.confirm('你确定要删除这件商品吗？')){
          $.ajax({
            type :"post",
            url  :"/pet/index.php/Home/Cart/del",
            data :"gid="+gid,
            success:function(){
               _this.parents('tr').remove();
            }
          })
       }
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