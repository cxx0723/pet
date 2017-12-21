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
<title>宠物家后台</title>
<div class=" admin-content">
		<div class="daohang">
			<ul>
				<li><button type="button" class="am-btn am-btn-default am-radius am-btn-xs"> 首页 </li>
				<li><button type="button" class="am-btn am-btn-default am-radius am-btn-xs">帮助中心<a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close="">×</a></button></li>
				<li><button type="button" class="am-btn am-btn-default am-radius am-btn-xs">奖金管理<a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close="">×</a></button></li>
				<li><button type="button" class="am-btn am-btn-default am-radius am-btn-xs">产品管理<a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close="">×</a></button></li>
			</ul>
</div>
<div class="admin">
   <div class="admin-index">
      <dl data-am-scrollspy="{animation: 'slide-right', delay: 100}">
        <dt class="qs"><i class="am-icon-users"></i></dt>
        <dd>455</dd>
        <dd class="f12">团队数量</dd>
      </dl>
      <dl data-am-scrollspy="{animation: 'slide-right', delay: 300}">
        <dt class="cs"><i class="am-icon-area-chart"></i></dt>
        <dd>455</dd>
        <dd class="f12">今日收入</dd>
      </dl>
      <dl data-am-scrollspy="{animation: 'slide-right', delay: 600}">
        <dt class="hs"><i class="am-icon-shopping-cart"></i></dt>
        <dd>455</dd>
        <dd class="f12">商品数量</dd>
      </dl>
      <dl data-am-scrollspy="{animation: 'slide-right', delay: 900}">
        <dt class="ls"><i class="am-icon-cny"></i></dt>
        <dd>455</dd>
        <dd class="f12">全部收入</dd>
      </dl>
    </div>
    <div class="admin-biaoge">
      <div class="xinxitj">信息概况</div>
      <table class="am-table">
        <thead>
          <tr>
            <th>团队统计</th>
            <th>全部会员</th>
            <th>全部未激活</th>
            <th>今日新增</th>
            <th>今日未激活</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>普卡</td>
            <td>普卡</td>
            <td><a href="#">4534</a></td>
            <td>+20</td>
            <td> 4534 </td>
          </tr>
          <tr>
            <td>银卡</td>
            <td>银卡</td>
            <td>4534</td>
            <td>+2</td>
            <td> 4534 </td>
          </tr>
          <tr>
            <td>金卡</td>
            <td>金卡</td>
            <td>4534</td>
            <td>+10</td>
            <td> 4534 </td>
          </tr>
          <tr>
            <td>钻卡</td>
            <td>钻卡</td>
            <td>4534</td>
            <td>+50</td>
            <td> 4534 </td>
          </tr>
          <tr>
            <td>合计</td>
            <td>合计</td>
            <td>4534</td>
            <td>+50</td>
            <td> 4534 </td>
          </tr>
        </tbody>
      </table>
      <table class="am-table">
        <thead>
          <tr>
            <th>团队统计</th>
            <th>全部会员</th>
            <th>全部未激活</th>
            <th>今日新增</th>
            <th>今日未激活</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>普卡</td>
            <td>普卡</td>
            <td>4534</td>
            <td>+50</td>
            <td> 4534 </td>
          </tr>
          <tr>
            <td>银卡</td>
            <td>银卡</td>
            <td>4534</td>
            <td>+2</td>
            <td> 4534 </td>
          </tr>
          <tr>
            <td>金卡</td>
            <td>金卡</td>
            <td>4534</td>
            <td>+10</td>
            <td> 4534 </td>
          </tr>
          <tr>
            <td>钻卡</td>
            <td>钻卡</td>
            <td>4534</td>
            <td>+50</td>
            <td> 4534 </td>
          </tr>
          <tr>
            <td>合计</td>
            <td>合计</td>
            <td>4534</td>
            <td>+50</td>
            <td> 4534 </td>
          </tr>
        </tbody>
      </table>
      <table class="am-table">
        <thead>
          <tr>
            <th>资金统计</th>
            <th>账户总收入</th>
            <th>账户总支出</th>
            <th>账户余额</th>
            <th>今日收入</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>普卡</td>
            <td>普卡</td>
            <td>4534</td>
            <td>+20</td>
            <td> 4534 </td>
          </tr>
          <tr>
            <td>银卡</td>
            <td>银卡</td>
            <td>4534</td>
            <td>+2</td>
            <td> 4534 </td>
          </tr>
          <tr>
            <td>金卡</td>
            <td>金卡</td>
            <td>4534</td>
            <td>+10</td>
            <td> 4534 </td>
          </tr>
          <tr>
            <td>钻卡</td>
            <td>钻卡</td>
            <td>4534</td>
            <td>+50</td>
            <td> 4534 </td>
          </tr>
          <tr>
            <td>合计</td>
            <td>合计</td>
            <td>4534</td>
            <td>+50</td>
            <td> 4534 </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="shuju">
      <div class="shujuone">
        <dl>
          <dt>全盘收入：  1356666</dt>
          <dt>全盘支出：   5646465.98</dt>
          <dt>全盘利润：  546464</dt>
        </dl>
        <ul>
          <h2>26.83%</h2>
          <li>全盘拨出</li>
        </ul>
      </div>
      <div class="shujutow">
        <dl>
          <dt>全盘收入：  1356666</dt>
          <dt>全盘支出：   5646465.98</dt>
          <dt>全盘利润：  546464</dt>
        </dl>
        <ul>
          <h2>26.83%</h2>
          <li>全盘拨出</li>
        </ul>
      </div>
      <div class="slideTxtBox">
        <div class="hd">
          <ul>
            <li>其他信息</li>
            <li>工作进度表</li>
          </ul>
        </div>
        <div class="bd">
          <ul>
            <table width="100%" class="am-table">
              <tbody>
                <tr>
                  <td width="7%"  align="center">1 </td>
                  <td width="83%" >工作进度名称</td>
                  <td width="10%"  align="center"><a href="#">10%</a></td>
                </tr>
                <tr>
                  <td align="center">1 </td>
                  <td>工作进度名称</td>
                  <td  align="center"><a href="#">10%</a></td>
                </tr>
                <tr>
                  <td  align="center">1 </td>
                  <td>工作进度名称</td>
                  <td  align="center"><a href="#">10%</a></td>
                </tr>
                <tr>
                  <td  align="center">1 </td>
                  <td>工作进度名称</td>
                  <td  align="center"><a href="#">10%</a></td>
                </tr>
                
                <tr>
                  <td  align="center">1 </td>
                  <td>工作进度名称</td>
                  <td  align="center"><a href="#">10%</a></td>
                </tr>
                
                <tr>
                  <td  align="center">1 </td>
                  <td>工作进度名称</td>
                  <td  align="center"><a href="#">10%</a></td>
                </tr>
                
                <tr>
                  <td  align="center">1 </td>
                  <td>工作进度名称</td>
                  <td  align="center"><a href="#">10%</a></td>
                </tr>
                
                
                
                
                
                
                
                
              </tbody>
            </table>
          </ul>
          <ul>
            <table class="am-table">
              <tbody>
                <tr>
                  <td>普卡</td>
                  <td>普卡</td>
                  <td><a href="#">4534</a></td>
                  <td>+20</td>
                  <td> 4534 </td>
                </tr>
                <tr>
                  <td>银卡</td>
                  <td>银卡</td>
                  <td>4534</td>
                  <td>+2</td>
                  <td> 4534 </td>
                </tr>
                <tr>
                  <td>金卡</td>
                  <td>金卡</td>
                  <td>4534</td>
                  <td>+10</td>
                  <td> 4534 </td>
                </tr>
                <tr>
                  <td>钻卡</td>
                  <td>钻卡</td>
                  <td>4534</td>
                  <td>+50</td>
                  <td> 4534 </td>
                </tr>
                <tr>
                  <td>合计</td>
                  <td>合计</td>
                  <td>4534</td>
                  <td>+50</td>
                  <td> 4534 </td>
                </tr>
              </tbody>
            </table>
          </ul>
        </div>
      </div>
      <script type="text/javascript">jQuery(".slideTxtBox").slide();</script> 
   
   
</div>

</div>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/pet/Public/assets/js/polyfill/rem.min.js"></script>
<script src="/pet/Public/assets/js/polyfill/respond.min.js"></script>
<script src="/pet/Public/assets/js/amazeui.legacy.js"></script>
<![endif]--> 

<!--[if (gte IE 9)|!(IE)]><!--> 
<script src="/pet/Public/assets/js/amazeui.min.js"></script>
<!--<![endif]-->



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