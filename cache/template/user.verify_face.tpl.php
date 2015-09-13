<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="container">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-body">
<?php if($strUser['face']=='' && intval($TS_SITE['isface'])==1) { ?>
<div class="alert alert-info">提示：你必须上传头像才可以正常使用本社区</div>
<?php } ?>
<?php if($strUser['path']) { ?>
<div class="alert alert-success">
您已经上传头像！现在可以随便点点看看我们的社区！
</div>
<?php } else { ?>
<form method="post" action="<?php echo tsurl('user','verify',array('ts'=>'facedo'))?>" enctype="multipart/form-data">
<div class="form-group">
<label>上传头像：</label>
<p><img alt="<?php echo $strUser['username'];?>" src="<?php echo $strUser['face'];?>?v=<?php echo rand();?>" width="120" /></p>
</div>
<div class="form-group">
<label>选择图片:</label>
<input type="file" name="picfile" />
</div>
<div class="form-group">
<button class="btn btn-success btn-block" type="submit">提交修改</button>
</div>
</form>
<?php } ?>
</div>
</div>
</div>
<div class="col-md-4"></div>
</div>
</div>
<?php include template('footer'); ?>