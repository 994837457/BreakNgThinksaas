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
<form role="form" method="POST" action="<?php echo tsurl('my','setting',array('ts'=>'pwddo'))?>">
<div class="form-group">
<input class="form-control" name="oldpwd" value="" type="password" placeholder="旧密码" />
</div>
<div class="form-group">
<input class="form-control" name="newpwd" value="" type="password" placeholder="新密码"/>
</div>
<div class="form-group">
<input class="form-control" name="renewpwd" value="" type="password" placeholder="输入新密码"/>
</div>
<button class="btn btn-success btn-bg" type="submit">提交修改</button>
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