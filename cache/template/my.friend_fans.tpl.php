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
<li role="presentation"><a href="<?php echo tsurl('my','friend',array('ts'=>'follow'))?>">我关注的人</a></li>
<li role="presentation" class="active"><a href="<?php echo tsurl('my','friend',array('ts'=>'fans'))?>">我的粉丝</a></li>
</ul>
<div class="facelist">
<ul>
<?php foreach((array)$arrUser as $key=>$item) {?>
<li>
<a href="<?php echo tsurl('user','space',array('id'=>$item['userid']))?>">
<img alt="<?php echo $item['username'];?>" title="<?php echo $item['username'];?>" src="<?php echo $item['face'];?>" width="48" />
<p><?php echo $item['username'];?></p>
</a>
</li>
<?php }?>
</ul>
</div>
<div class="clear"></div>
<div class="page"><?php echo $pageUrl;?></div>
</div></div>
</div>
</div>
</div>
<?php include template('footer'); ?>