<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="container">
<div class="panel panel-default">
<div class="panel-body">
<?php include template('menu'); ?>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<form role="form" method="POST" action="<?php echo tsurl('photo','create',array('ts'=>'do'))?>">
<div class="form-group">
<input type="text" name="albumname" class="form-control" placeholder="圖名" >
</div>
<div class="form-group">
<textarea class="form-control" rows="3" name="albumdesc" placeholder="圖介绍"></textarea>
</div>
<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" />
<button class="btn btn-success" type="submit">创建圖</button> <a href="<?php echo tsurl('photo','album',array(ts=>user,userid=>$userid))?>">返回我的圖</a>
</form>
<p>
</p>
</div>
<div class="col-md-4"></div>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>