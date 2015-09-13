<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="container">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-body">
<?php if(intval($strUser['isverify'])==0 && intval($TS_SITE['isverify'])==1) { ?>
<div class="alert alert-info">提示：你必须通过Email验证才可以正常使用本社区</div>
<?php } ?>
<?php if($strUser['isverify']==1) { ?>
<div class="alert alert-success">
您已经通过Email验证！现在可以随便点点看看我们的社区！
</div>
<?php } else { ?>
<form method="post" action="<?php echo tsurl('user','verify',array('ts'=>'setemail'))?>">
<div class="form-group">
<label>验证Email</label>
<input type="email" class="form-control" disabled value="<?php echo $strUser['email'];?>">
</div>
<a class="btn btn-success btn-block" href="<?php echo tsurl('user','verify',array('ts'=>'post','token'=>$_SESSION['token']))?>">开始验证</a>
<hr />
<div class="form-group">
<label>Email不对吗？更换帐号:</label>
<input type="email" name="email" class="form-control" >
</div>
<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" />
<input class="btn btn-default btn-block" type="submit" value="提交修改" />
</form>
<?php } ?>
</div>
</div>
</div>
<div class="col-md-4"></div>
</div>
</div>
<?php include template('footer'); ?>
