<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<article class="ui">
<?php include template('userinfo'); ?>
</article>
<div class="container">
<article class="us">
<div class="bbox">
<div class="be">
<?php include template('menu'); ?>
<p></p>
<?php foreach((array)$arrGroupList as $key=>$item) {?>
<div class="sub-item">
<div class="pic">
<a href="<?php echo tsurl('group','show',array('id'=>$item['groupid']))?>">
<img src="<?php echo $item['photo'];?>" alt="<?php echo $item['groupname'];?>" />
</a>
</div>
<div class="info">
<a href="<?php echo tsurl('group','show',array('id'=>$item['groupid']))?>"><?php echo $item['groupname'];?></a>  <font color="#999999"><?php echo $item['count_user'];?>人加入</font>
<p><?php echo t($item['groupdesc'])?></p>
</div>
</div>
<?php }?>
</div>
</div>
</article>
</div>
<?php include template('footer'); ?>