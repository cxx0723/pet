<?php if (!defined('THINK_PATH')) exit();?><table>
	<tr>
		<td>学号</td>
		<td>姓名</td>
		<td>头像</td>
	</tr>
	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
			<td><?php echo ($v["hao"]); ?></td>
			<td><?php echo ($v["name"]); ?></td>
			<td><img src="/siyue/3.13zhoukao/Uploads/<?php echo ($v["img"]); ?>" width="150"></td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>