<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<!--main-->
<div class="midder">
<div class="mc">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<div class="bbox bbox050">
<div class="page-header">
<h1>忘记密码</h1>
</div>
<div class="be">
<form id="comm-form" method="post" action="<?php echo SITE_URL;?>index.php?app=user&ac=forgetpwd&ts=do" role="form">
<div class="form-group">
<label>Email</label>
<input name="email" type="email" class="form-control" value="" autocomplete="off">
</div>
<div class="form-group">
<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" />
<button type="submit" class="btn btn-fat btn-success">找回密码</button>
</div>
</form>
</div>
</div>
</div>
<div class="col-md-3"></div>
</div>
</div>
</div>
<?php include template('footer'); ?>