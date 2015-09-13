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
<form role="form" method="POST" action="<?php echo tsurl('my','setting',array('ts'=>'emaildo'))?>">
<div class="form-group">
<label>当前Email：</label>
<p><?php echo $strUser['email'];?></p>
</div>
<div class="form-group">
<input class="form-control" name="email" type="email" placeholder="新Email"/>
</div>
<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" />
<button class="btn btn-success btn-lg" type="submit">修改</button>
（修改帐号将重新验证Email）
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