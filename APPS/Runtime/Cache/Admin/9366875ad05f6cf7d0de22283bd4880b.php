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
      
      <dl class="am-icon-home" style="float: right;"> 当前位置： 首页 > <a href="#">商品列表</a></dl>
      
      <dl>
       <a href="<?php echo U('Shop/add');?>"><button type="button" class="am-btn am-btn-danger am-round am-btn-xs am-icon-plus"> 添加产品</button></a> 
      </dl>
      
      
    </div>
	
	<div class="am-btn-toolbars am-btn-toolbar am-kg am-cf">
  <ul>
    <li>
      <div class="am-btn-group am-btn-group-xs">
        <select data-am-selected="{btnWidth: 90, btnSize: 'sm', btnStyle: 'default'}">
          <option value="b">产品分类</option>
          <option value="o">下架</option>
        </select>
      </div>
    </li>
    <li>
      <div class="am-btn-group am-btn-group-xs">
      <select data-am-selected="{btnWidth: 90, btnSize: 'sm', btnStyle: 'default'}">
        <option value="b">产品分类</option>
        <option value="o">下架</option>
      </select>
      </div>
    </li>
    <li style="margin-right: 0;">
    	<span class="tubiao am-icon-calendar"></span>
      <input type="text" class="am-form-field am-input-sm am-input-zm  am-icon-calendar" placeholder="开始日期" data-am-datepicker="{theme: 'success',}"  readonly/>
    </li>
       <li style="margin-left: -4px;">
    	<span class="tubiao am-icon-calendar"></span>
      <input type="text" class="am-form-field am-input-sm am-input-zm  am-icon-calendar" placeholder="开始日期" data-am-datepicker="{theme: 'success',}"  readonly/>
    </li>
    
        <li style="margin-left: -10px;">
      <div class="am-btn-group am-btn-group-xs">
      <select data-am-selected="{btnWidth: 90, btnSize: 'sm', btnStyle: 'default'}">
        <option value="b">产品分类</option>
        <option value="o">下架</option>
      </select>
      </div>
    </li>
    <li><input type="text" class="am-form-field am-input-sm am-input-xm" placeholder="关键词搜索" /></li>
    <li><button type="button" class="am-btn am-radius am-btn-xs am-btn-success" style="margin-top: -1px;">搜索</button></li>
  </ul>
</div>


    <form class="am-form am-g">
          <table width="100%" class="am-table am-table-bordered am-table-radius am-table-striped">
            <thead>
              <tr class="am-success">
                <th class="table-check"><input type="checkbox" /></th>
                <th class="table-id">排序</th>
                <th class="table-id">ID</th>
                <th class="table-title">标题</th>
                <th class="table-type">类别</th>
                <th class="table-author am-hide-sm-only">上架/下架</th>
                <th class="table-date am-hide-sm-only">添加日期</th>
                <th width="163px" class="table-set">操作</th>
              </tr>
            </thead>
            <tbody>
              <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr gid="<?php echo ($v["id"]); ?>">
                <td><input type="checkbox" /></td>
                <td><input type="text" value="<?php echo ($v["sort"]); ?>" id="sort" class="am-form-field am-radius am-input-sm"/></td>
                <td><?php echo ($v["id"]); ?></td>
                <td><a href="#"><?php echo ($v["name"]); ?></a></td>
                <td><?php echo ($v["tname"]); ?></td>
                <td class="am-hide-sm-only">

                  <?php if($v["goods_status"] == 0): ?><i class="am-icon-close am-text-primary"></i>
                  <?php else: ?>
                    <i class="am-icon-check am-text-warning"></i><?php endif; ?>

                </td>
                <td class="am-hide-sm-only"><?=date('Y-m-d H:i:s',$v['time'])?></td>
                <td><div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                      <button class="am-btn am-btn-default am-btn-xs am-text-success am-round"><span class="am-icon-search"></span> </button>
                      <span class="am-btn am-btn-default am-btn-xs am-text-secondary am-round" title="审核" id="shen"><span class="am-icon-pencil-square-o"></span></span>

                      <button class="am-btn am-btn-default am-btn-xs am-text-warning  am-round"><span class="am-icon-copy"></span></button>
                      <span id="del" class="am-btn am-btn-default am-btn-xs am-text-danger am-round" title="删除"><span class="am-icon-trash-o"></span></span>
                    </div>
                  </div></td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
          </table>
          
                 <div class="am-btn-group am-btn-group-xs">
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 删除</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 上架</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 下架</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 移动</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 移动</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
            </div>
          
          <ul class="am-pagination am-fr">
                <li class="am-disabled"><a href="#">«</a></li>
                <li class="am-active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
               
                <li><a href="#">»</a></li>
              </ul>
          
          <hr />
          <p>注：点击审核修改商品上下架状态</p>
        </form>
 
 
</div>

</div>

</div>

<script src="/pet/Public/assets/js/amazeui.min.js"></script>
<script type="text/javascript">
     $(document).on('click','#shen',function(){
        var gid = $(this).parents('tr').attr('gid');
         $.ajax({
           type : "post",
           url  : "/pet/index.php/Admin/Shop/save_status",
           data : "gid="+gid,
           success:function(e){
              load();
           }
        })
        
   
     })

     $(document).on('click','#del',function(){
        var gid = $(this).parents('tr').attr('gid');
         $.ajax({
           type : "post",
           url  : "/pet/index.php/Admin/Shop/goods_del",
           data : "gid="+gid,
           success:function(e){
              load();
           }
        })
        
   
     })

     function load(){
        window.location.reload();
     }

     $(document).on('blur','#sort',function(){

        var num = $(this).val();
        if (isNaN(num)) {
　　　　    alert("请输入数字");
　　　　   frm.num.focus();

　　　　    return false;
　　     } 
        if(num == "")
        {
          num =0;
        }
        var gid = $(this).parents('tr').attr('gid');
        $.ajax({
           type : "post",
           url  : "/pet/index.php/Admin/Shop/save_sort",
           data : "gid="+gid+"&num="+num,
           success:function(e){
              
           }
        })
     })
</script>

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