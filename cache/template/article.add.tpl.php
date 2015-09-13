<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<?php doAction('tseditor')?>
<div class="container">
<ol class="breadcrumb">
<li><a href="<?php echo SITE_URL;?>">首页</a></li>
<li><a href="<?php echo tsurl('article')?>"></a>夢想</li>
<li class="active">写夢想</li>
</ol>
<div class="panel panel-default">
<div class="panel-body">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8 tc">
<form method="POST" action="<?php echo SITE_URL;?>index.php?app=article&ac=add&ts=do"  enctype="multipart/form-data">
<div class="form-group">
<input name="title" type="text" class="form-control" placeholder="主题">
</div>
<?php if($arrCate) { ?>
<div class="form-group">
<label>分类：</label>
<select id="cateid" name="cateid">
<?php foreach((array)$arrCate as $key=>$item) {?>
<option value="<?php echo $item['cateid'];?>"><?php echo $item['catename'];?></option>
<?php }?>
</select>
</div>
<?php } ?>
<div class="form-group">
<textarea name="content" id="tseditor" placeholder="内容"></textarea>
</div>
<div class="form-group">
<input name="tag" type="text" class="form-control" placeholder="标签">
</div>
<div class="form-group">
<label>封面图片：</label>
<input name="photo" type="file">
</div>
<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" />
<button class="btn btn-success" type="submit">发布夢想</button>
</form>
</div>
<div class="col-md-2"></div>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>