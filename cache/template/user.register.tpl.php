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
<?php if($TS_APP['isregister']=='2') { ?>
<p>系统升级中，暂时关闭用户注册！</p>
<p><a href="<?php echo SITE_URL;?>">返回首页</a></p>
<?php } else { ?>
<form id="comm-form" method="POST" action="<?php echo SITE_URL;?>index.php?app=user&ac=register&ts=do">
<?php if($TS_SITE['isinvite']=='1') { ?>
<div class="form-group">
<label>邀请码</label>
<input name="invitecode" type="text" class="form-control" placeholder="" check-type="required">
</div>
<?php } ?>
<div class="form-group">
<input name="email" type="email" class="form-control" placeholder="Email" check-type="required">
</div>
<div class="form-group">
<input name="pwd" type="password" class="form-control" placeholder="password" check-type="required">
</div>
<div class="form-group">
<input name="username" type="text" class="form-control" placeholder="用户名" check-type="required">
</div>
<?php if($TS_SITE['isauthcode']) { ?>
<div class="form-group">
<label>验证码：</label>
<input name="authcode" type="text" class="form-control" placeholder="" check-type="required">
<img align="absmiddle" src="<?php echo SITE_URL;?>index.php?app=pubs&ac=code" onclick="javascript:newgdcode(this,this.src);" title="点击刷新验证码" alt="点击刷新验证码" style="cursor:pointer;" />
</div>
<?php } ?>
<div class="form-group">
<input type="hidden" name="fuserid" value="<?php echo $fuserid;?>" />
<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" />
<button id="comm-submit" type="submit" class="btn btn-fat btn-success iw">注册</button>
</div>
</form>
<div>
<?php doAction('user_login_footer')?>
</div>
<?php } ?>
</div>
</div>
</div>
<div class="col-md-3"></div>
</div>
</div>
<?php include template('footer'); ?>