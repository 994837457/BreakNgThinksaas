<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<article class="ui">
<?php include template('userinfo'); ?>
</article>
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="bbox">
<div class="bc">
<?php include template('menu'); ?>
<div class="obss">
<?php foreach((array)$arrUser as $key=>$item) {?>
<dl class="obu"><dt><a class="nbg" href="<?php echo tsurl('user','space',array('id'=>$item['userid']))?>"><img alt="<?php echo $item['username'];?>" title="<?php echo $item['username'];?>" class="m_sub_img" src="<?php echo $item['face'];?>" width="48" /></a></dt>
<dd><a href="<?php echo tsurl('user','space',array('id'=>$item['userid']))?>"><?php echo $item['username'];?></a></dd></dl>
<?php }?>
</div>
<div class="clear"></div>
<div class="page"><?php echo $pageUrl;?></div>
</div>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>