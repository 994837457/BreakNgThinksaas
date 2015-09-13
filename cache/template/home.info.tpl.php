<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="container">
<div class="row">
<div class="col-md-3">
<div class="list-group">
<?php foreach((array)$arrInfo as $k=>$v) {?>
<a href="<?php echo tsurl('home','info',array('key'=>$v['infokey']))?>" class="list-group-item <?php if($keys==$v['infokey']) { ?>active<?php } ?>">
<?php echo $v['title'];?>
</a>
<?php }?>
</div>
</div>
<div class="col-md-9">
<div class="bbs">
<div class="panel panel-default">
<div class="panel-body">
<h1><?php echo $strInfo['title'];?></h1>
<div class="lh30 f14">
<?php echo $strInfo['content'];?>
</div>
</div>
</div>
</div>
</div>
</div></div>
<?php include template('footer'); ?>