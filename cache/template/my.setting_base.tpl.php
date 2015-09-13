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
<div class="col-md-7 tc">
<form role="form" method="POST" action="<?php echo tsurl('my','setting',array('ts'=>'basedo'))?>">
<div class="form-group">
<input type="text" class="form-control" name="username" value="<?php echo $strUser['username'];?>" placeholder="用户名" />
</div>
<div class="form-group">
<label>性别：</label>
<input <?php if($strUser['sex']=='0') { ?>checked="select"<?php } ?> name="sex" type="radio" value="0" />保密
<input <?php if($strUser['sex']=='1') { ?>checked="select"<?php } ?> name="sex" type="radio" value="1" />男
<input <?php if($strUser['sex']=='2') { ?>checked="select"<?php } ?> name="sex" type="radio" value="2" />女
</div>
<div class="form-group">
<input type="phone"  class="form-control" name="phone" value="<?php echo $strUser['phone'];?>"  placeholder="电话"/>
</div>
<div class="form-group">
<input type="url" class="form-control" name="blog" value="<?php echo $strUser['blog'];?>"  placeholder="博客"/>
</div>
<div class="form-group">
<textarea class="form-control" rows="3" name="signed" placeholder="签名"><?php echo $strUser['signed'];?></textarea>
</div>
<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" />
<button class="btn btn-success" type="submit">修改设置</button>
</form>
</div>
</div>
<div class="col-md-4"></div>
</div>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>