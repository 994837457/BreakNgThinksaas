<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<body >
<div class="container">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<div class="main">
<div class="page-header">
<h4>BreakNg</h4>
</div>
<div class="be">
<form id="comm-form" method="POST" action="<?php echo SITE_URL;?>index.php?app=user&ac=login&ts=do" role="form">
<div class="form-group">
<input name="email" type="email" class="form-control" required placeholder="Email" check-type="required">
</div>
<div class="form-group">
<input name="pwd" type="password" class="form-control" required placeholder="Password" check-type="required">
</div>
<div class="form-group">
<input type="hidden" name="jump" value="<?php echo $jump;?>" />
<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" />
<button id="comm-submit" type="submit" class="btn btn-fat btn-success iw">登录</button>
</div>
<div><a href="<?php echo tsurl('user','register')?>">还没有注册？</a> | <a href="<?php echo tsurl('user','forgetpwd')?>">忘记密码？</a></div>
<div class="form-group">
<div class="checkbox">
<label>
<input type="checkbox" name="cktime" value="31536000"> 记住我
</label>
</div>
</div>
</form>
<div>
<?php doAction('user_login_footer')?>
</div>
</div>
</div>
</div>
<div class="col-md-3"></div>
</div>
</div>
<?php include template('footer'); ?>