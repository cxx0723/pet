<?php if (!defined('THINK_PATH')) exit();?>
<link rel="icon" type="image/png" href="/pet/Public/assets/i/favicon.png">
<link rel="apple-touch-icon-precomposed" href="/pet/Public/assets/i/app-icon72x72@2x.png">
<meta name="apple-mobile-web-app-title" content="Amaze UI" />
<link rel="stylesheet" href="/pet/Public/assets/css/amazeui.min.css"/>
<link rel="stylesheet" href="/pet/Public/assets/css/admin.css">
<script src="/pet/Public/assets/js/jquery.min.js"></script>
<script src="/pet/Public/assets/js/app.js"></script>
</head>
<body>
</head>
<body>
<header class="am-topbar admin-header">
  <div class="am-topbar-brand"><img src="/pet/Public/assets/i/logo.png"></div>
  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav admin-header-list">
   <li class="am-dropdown tognzhi" data-am-dropdown>
  <button class="am-btn am-btn-primary am-dropdown-toggle am-btn-xs am-radius am-icon-bell-o" data-am-dropdown-toggle> 消息管理<span class="am-badge am-badge-danger am-round">6</span></button>
  <ul class="am-dropdown-content">
    <li class="am-dropdown-header">所有消息都在这里</li>
    <li><a href="#">未激活会员 <span class="am-badge am-badge-danger am-round">556</span></a></li>
    <li><a href="#">未激活代理 <span class="am-badge am-badge-danger am-round">69</span></a></a></li>
    <li><a href="#">未处理汇款</a></li>
    <li><a href="#">未发放提现</a></li>
    <li><a href="#">未发货订单</a></li>
    <li><a href="#">低库存产品</a></li>
    <li><a href="#">信息反馈</a></li>
  </ul>
</li>
 <li class="kuanjie">
 	<a href="<?php echo U('member/list');?>">用户管理</a>        
 	<a href="#">奖金管理</a> 
 	<a href="<?php echo U('Order/list');?>">订单管理</a>   
 	<a href="<?php echo U('Shop/list');?>">产品管理</a> 
 	
 	 <a href="<?php echo U('system/set');?>">系统设置</a>
   <a href="<?php echo U('Login/out');?>">退出</a>
 </li>
 <li class="soso">
<p>   
	<select data-am-selected="{btnWidth: 70, btnSize: 'sm', btnStyle: 'default'}">
          <option value="b">全部</option>
          <option value="o">产品</option>
          <option value="o">会员</option>
        </select>
</p>
<p class="ycfg"><input type="text" class="am-form-field am-input-sm" placeholder="圆角表单域" /></p>
<p><button class="am-btn am-btn-xs am-btn-default am-xiao"><i class="am-icon-search"></i></button></p>
 </li>
      <li class="am-hide-sm-only" style="float: right;"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>
<div class=" admin-content">
	
		<div class="daohang">
			<ul>
				<li><button type="button" class="am-btn am-btn-default am-radius am-btn-xs"> 首页 </li>
				<li><button type="button" class="am-btn am-btn-default am-radius am-btn-xs">帮助中心<a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close="">×</a></button></li>
				<li><button type="button" class="am-btn am-btn-default am-radius am-btn-xs">奖金管理<a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close="">×</a></button></li>
				<li><button type="button" class="am-btn am-btn-default am-radius am-btn-xs">产品管理<a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close="">×</a></button></li>
				
				
			</ul>

</div>

<div class="admin-biaogelist">
	
    <div class="listbiaoti am-cf">
      <ul class="am-icon-flag on"> 栏目名称</ul>
      
      <dl class="am-icon-home" style="float: right;"> 当前位置： 首页 > <a href="<?php echo U('Shop/index');?>">商品列表</a></dl>

    </div>
	
    <div class="fbneirong">
      <form class="am-form" action="" method="post" enctype="multipart/form-data">
        <div class="am-form-group am-cf">
          <div class="zuo">标题：</div>
          <div class="you">
            <input type="" name="name" class="am-input-sm" id="doc-ipt-email-1" placeholder="请输入标题">
          </div>
        </div>
        <div class="am-form-group am-cf">
          <div class="zuo">关键词：</div>
          <div class="you">
            <input type="" name="keyword" class="am-input-sm" id="doc-ipt-pwd-1" placeholder="请输入关键词">
          </div>
        </div>

        <div class="am-form-group am-cf">
          <div class="zuo">价格：</div>
          <div class="you">
            <input type="" name="price" class="am-input-sm" id="doc-ipt-pwd-1" placeholder="请输入价格">
          </div>
        </div>
        
        <div class="am-form-group am-cf">
          <div class="zuo">分类：</div>
          <div class="you">
            <select class="am-input-sm" name="tid">
              <option value="">请选择</option>
              <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["tid"]); ?>">|<?php echo str_repeat("-",$v['level']); echo ($v["tname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
          </div>
        </div>

        <div class="am-form-group am-cf">
          <div class="zuo">描述：</div>
          <div class="you">
            <textarea class="" rows="2" id="doc-ta-1" name="describe"></textarea>
          </div>
        </div>
       
        <div class="am-form-group am-cf">
          <div class="zuo">产品图片：</div>
          <div class="you" style="height: 45px;">
            <input type="file" id="doc-ipt-file-1" name="img">
            <p class="am-form-help">请选择要上传的文件,自动生成缩略图...</p>
          </div>
        </div>
        
        <div class="am-form-group am-cf">
          <div class="zuo">其他信息：</div>
          <div class="you">
            <textarea class="" name="other" rows="2" id="doc-ta-1"></textarea>
          </div>
        </div>
        
        
        <div class="am-form-group am-cf">
        <div class="zuo">推荐：</div>
        <div class="you" style="margin-top: 5px;">
          <label class="am-checkbox-inline">
            <input type="checkbox" value="option1">
            选我 </label>
          <label class="am-checkbox-inline">
            <input type="checkbox" value="option2">
            同时可以选我 </label>
          <label class="am-checkbox-inline">
            <input type="checkbox" value="option3">
            还可以选我 </label>
            </div>
        </div>
        <div class="am-form-group am-cf">
          <div class="you" style="margin-left: 11%;">
              <!-- <button type="submit" id="close" class="am-btn am-btn-success am-radius">发布并关闭窗口</button>&nbsp;  &raquo; &nbsp; --> <button type="submit" class="am-btn am-btn-secondary am-radius">发布并继续发布</button>

          </div>
        </div>
      </form>
    </div>
</div>

</div>
</div>

</body>
</html>

<div class="am-cf admin-main">
<div class="nav-navicon admin-main admin-sidebar">
    <div class="sideMenu am-icon-dashboard" style="color:#aeb2b7; margin: 10px 0 0 0;"> 欢迎系统管理员：雪山飞狐</div>
    <div class="sideMenu">
      <h3 class="am-icon-flag"><em></em> <a href="#">商品管理</a></h3>
      <ul>
        <li><a href="<?php echo U('Shop/index');?>">商品列表</a></li>
        <li class="func" dataType='html' dataLink='msn.htm' iconImg='images/msn.gif'><a href="<?php echo U('Shop/add');?>" class="tran3s">添加新商品</a></li>
        <li><a href="<?php echo U('Shop/type');?>" class="tran3s">商品分类</a></li>
        <li><a href="<?php echo U('Shop/review');?>" class="tran3s">用户评论</a></li>
        <li><a href="<?php echo U('Shop/recycle');?>" class="tran3s">商品回收站</a></li>
        <li><a href="<?php echo U('Shop/repertory');?>" class="tran3s">库存管理 </a></li>
      </ul>
      <h3 class="am-icon-cart-plus"><em></em> <a href="#"> 订单管理</a></h3>
      <ul>
        <li><a href="<?php echo U('Order/list');?>" class="tran3s">订单列表</a></li>
        <li><a href="#" class="tran3s">合并订单</a></li>
        <li>订单打印</li>
        <li>添加订单</li>
        <li>发货单列表</li>
        <li>换货单列表</li>
      </ul>
      <h3 class="am-icon-users"><em></em> <a href="">用户管理</a></h3>
      <ul>
        <li><a href="<?php echo U('member/list');?>" class="tran3s">用户列表</a> </li>
        <li>未激活用户</li>
        <li>团队系谱图</li>
        <li>用户推荐图</li>
        <li>推荐列表</li>
      </ul>
      <h3 class="am-icon-volume-up"><em></em> <a href="<?php echo U('message/news');?>">信息通知</a></h3>
      <ul>
        <li>站内消息 /留言 </li>
        <li>短信</li>
        <li>邮件</li>
        <li>微信</li>
        <li>客服</li>
      </ul>
      <h3 class="am-icon-gears"><em></em> <a href="<?php echo U('system/set');?>">系统设置</a></h3>
      <ul>
        <li>数据备份</li>
        <li>邮件/短信管理</li>
        <li>上传/下载</li>
        <li>权限</li>
        <li>网站设置</li>
        <li>第三方支付</li>
        <li>提现 /转账 出入账汇率</li>
        <li>平台设置</li>
        <li>声音文件</li>
      </ul>
    </div>
    <!-- sideMenu End --> 
    <script type="text/javascript">
			jQuery(".sideMenu").slide({
				titCell:"h3", //鼠标触发对象
				targetCell:"ul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
				effect:"slideDown", //targetCell下拉效果
				delayTime:300 , //效果时间
				triggerTime:150, //鼠标延迟触发时间（默认150）
				defaultPlay:true,//默认是否执行效果（默认true）
				returnDefault:true //鼠标从.sideMen移走后返回默认状态（默认false）
				});
		</script> 

    
</div>