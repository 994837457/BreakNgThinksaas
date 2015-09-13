<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template("admin/header");?>
<!--main-->
<div class="midder">
<?php include template("admin/menu");?>
<form method="post" action="<?php echo SITE_URL;?>index.php?app=user&ac=admin&mg=user&ts=pwddo">
<table  cellpadding="0" cellspacing="0">
<tr><td width="100">Email：</td><td><?php echo $strUser['email'];?></td></tr>
<tr><td>密码：</td><td><input type="password" name="pwd"  /></td></tr>
<tr><td></td><td>
<input type="hidden" name="userid" value="<?php echo $strUser['userid'];?>" />
<input type="submit" value="修改" />
</td></tr>
<table>
</form>
</div>
<?php include template("admin/footer");?>