<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="container">
<div class="bbox">
<div class="be">
<?php include template('edit_xbar'); ?>
<div class="row">
<div class="col-md-10">
<form method="POST" action="<?php echo SITE_URL;?>index.php?app=group&ac=do&ts=photo" enctype="multipart/form-data" >
<div class="form-group">
<label class="col-sm-2 control-label">文化图标：</label>
<div class="col-sm-10">
<img alt="<?php echo $strGroup['groupname'];?>" title="<?php echo $strGroup['groupname'];?>" valign="middle" src="<?php if($strGroup['photo']) { ?><?php echo tsXimg($strGroup['photo'],'group','120','120',$strGroup['path'])?>?v=<?php echo rand();?><?php } else { ?><?php echo SITE_URL;?>public/images/group.jpg<?php } ?>">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label pd10"></label>
<div class="col-sm-10">
<input type="file" name="picfile">
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10 pd10">
<input type="hidden" name="groupid" value="<?php echo $strGroup['groupid'];?>" />
<button type="submit" class="btn btn-success">上传照片</button>
</div>
</div>
</form>
</div>
<div class="col-md-2"></div>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>