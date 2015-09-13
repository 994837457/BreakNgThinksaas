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
<?php include template('menu'); ?>
<div class="msgbox">
<ul>
<?php foreach((array)$arrToUser as $key=>$item) {?>
<li>
<a href="<?php echo tsurl('message','user',array('touserid'=>$item['userid']))?>"><img alt="<?php echo $item['user'][username];?>" class="m_sub_img" width="16" src="<?php echo $item['user'][face];?>" align="absmiddle" /> <?php echo $item['user'][username];?> </a><?php if($item['count'] > 0) { ?>(<?php echo $item['count'];?>)<?php } ?>
</li>
<?php }?>
</ul>
</div>
</div>
<div class="page"><?php echo $pageUrl;?></div>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>