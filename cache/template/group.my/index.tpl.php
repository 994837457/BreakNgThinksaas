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
<ul class="nav nav-tabs" role="tablist">
<li role="presentation" class="active"><a href="<?php echo tsurl('group','my',array('my'=>'index'))?>">加入的文化</a></li>
<li role="presentation"><a href="<?php echo tsurl('group','my',array('my'=>'created'))?>">创建的文化</a></li>
</ul>
<div class="facelist">
<ul>
<?php foreach((array)$arrGroup as $key=>$item) {?>
<li>
<a href="<?php echo tsurl('group','show',array('id'=>$item['groupid']))?>">
<img alt="<?php echo $item['groupname'];?>" title="<?php echo $item['groupname'];?>" src="<?php echo $item['photo'];?>" width="48" />
<p><?php echo $item['groupname'];?></p>
<?php if($strUser['userid']!=$item['userid']) { ?>
<p><a onclick="return " href="javascript:void('0')" onclick="exitGroup('<?php echo $item['groupid'];?>')">退出</a></p>
<?php } ?>
</a>
</li>
<?php }?>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>