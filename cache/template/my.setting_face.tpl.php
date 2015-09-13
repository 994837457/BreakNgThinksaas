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
<?php include template('setting_menu'); ?>
<div style="height:30px;"></div>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-7">
<?php if($TS_SITE['isface']=='1' && $strUser['face'] == SITE_URL.'public/images/user_normal.jpg') { ?>
<div class="alert alert-info" role="alert">提示：你需要上传头像才可以正常使用网站！</div>
<?php } ?>
<form role="form" method="post" action="<?php echo tsurl('my','setting',array('ts'=>'facedo'))?>"  enctype="multipart/form-data">
<div class="form-group">
<label>当前头像</label>
<p><img alt="<?php echo $strUser['username'];?>" src="<?php echo $strUser['face'];?>?v=<?php echo rand();?>" width="120" /></p>
</div>
<div class="form-group">
<label>选择本地头像</label>
<p><input type="file" name="picfile" /></p>
</div>
<input class="btn btn-success btn-lg" type="submit" value="上传头像" /> <a class="btn btn-default btn-lg" href="<?php echo tsurl('my','setting',array('ts'=>'flash'))?>">使用Flash上传并裁切头像</a>
</form>
</div>
<div class="col-md-4"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>