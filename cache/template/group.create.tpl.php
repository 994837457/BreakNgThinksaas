<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<?php doAction('tseditor','mt')?>
<div class="container">
<div class="panel panel-default">
<div class="panel-body">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<form role="form" method="POST" action="<?php echo SITE_URL;?>index.php?app=group&ac=create&ts=do"  enctype="multipart/form-data">
<div class="form-group">
<input name="groupname" type="text" class="form-control" placeholder="文化名称">
</div>
<div class="form-group">
<textarea name="groupdesc" id="tseditor" placeholder="文化介绍"></textarea>
</div>
<div class="form-group">
<label>文化图标</label>
<input name="photo" type="file">
</div>
<div class="form-group">
<input name="tag" type="text" class="form-control" placeholder="文化标签">
</div>
<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" />
<button type="submit" class="btn btn-success">创建文化</button>
</form>
</div>
<div class="col-md-2"></div>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>