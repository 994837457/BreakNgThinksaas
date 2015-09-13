<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="container">
<div class="my">
<div class="col-md-3">
<div class="my_left">
<?php include pubTemplate("my")?>
</div>
</div>
<div class="col-md-9">
<div class="my_right">
<div class="rc">
<?php doAction('my_right_top')?>
<div class="tabnav">
<ul>
<li class="select"><a href="">我的积分</a></li>
</ul>
</div>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#cccccc">
<tr bgcolor="#f0f0f0"><td>名称</td><td>积分</td><td>状态</td><td>时间</td></tr>
<?php foreach((array)$arrScore as $key=>$item) {?>
<tr><td><?php echo $item['scorename'];?></td><td><?php echo $item['score'];?></td><td><?php if($item['status']==0) { ?>+<?php } else { ?>-<?php } ?></td><td><?php echo date('Y-m-d H:i:s',$item['addtime'])?></td></tr>
<?php }?>
</table>
<div class="clear"></div>
<div class="page"><?php echo $pageUrl;?></div>
</div></div>
</div>
</div>
</div>
<?php include template('footer'); ?>