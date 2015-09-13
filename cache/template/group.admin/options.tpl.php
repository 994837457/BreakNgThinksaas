<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template("admin/header");?>
<div class="midder">
<?php include template("admin/menu");?>
<form method="POST" action="<?php echo SITE_URL;?>index.php?app=group&ac=admin&mg=options&ts=do">
<table  cellpadding="0" cellspacing="0">
<tr><td width="150">APP名称：</td><td><input style="width:300px;" name="option[appname]" value="<?php echo $strOption['appname'];?>" /></td></tr>
<tr><td>APP介绍：</td><td><textarea style="width:300px;" name="option[appdesc]"><?php echo $strOption['appdesc'];?></textarea></td></tr>
<tr><td>APP关键词：</td><td><input style="width:300px;" name="option[appkey]" value="<?php echo $strOption['appkey'];?>" /></td></tr>
<tr><td>是否允许用户创建文化 :</td><td><input <?php if($strOption['iscreate']=='0') { ?>checked="select"<?php } ?> name="option[iscreate]" type="radio" value="0" />允许 <input <?php if($strOption['iscreate']=='1') { ?>checked="select"<?php } ?> name="option[iscreate]" type="radio" value="1" />不允许(只有管理员可以创建文化)</td></tr>
<tr><td>创建文化是否需要审核 :</td><td><input <?php if($strOption['isaudit']=='1') { ?>checked="select"<?php } ?> name="option[isaudit]" type="radio" value="1" />审核 <input <?php if($strOption['isaudit']=='0') { ?>checked="select"<?php } ?> name="option[isaudit]" type="radio" value="0" />不审核</td></tr>
<tr><td>每个会员加入文化数 :</td><td><input type="text" name="option[joinnum]" value="<?php echo $strOption['joinnum'];?>" width="50" /> (创建和加入的总和)</td></tr>
<tr><td>是否允许用户发帖 :</td><td><input <?php if($strOption['isallowpost']=='1') { ?>checked="select"<?php } ?> name="option[isallowpost]" type="radio" value="1" />不允许 <input <?php if($strOption['isallowpost']=='0') { ?>checked="select"<?php } ?> name="option[isallowpost]" type="radio" value="0" />允许</td></tr>
<tr><td></td><td>
<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" />
<input type="submit" value="提 交" /></td></tr>
</table>
</form>
</div>
<?php include template("admin/footer");?>