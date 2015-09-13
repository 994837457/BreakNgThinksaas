<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template("admin/header");?>

<!--main-->
<div class="midder">

<?php include template("admin/menu");?>

<form  method="POST" action="index.php?app=feed&ac=admin&mg=options&ts=do">
<table>
<tr><td width="150">APP名称：</td><td><input style="width:300px;" name="option[appname]" value="<?php echo $strOption['appname'];?>" /></td></tr>

<tr><td>APP介绍：</td><td><textarea style="width:300px;" name="option[appdesc]"><?php echo $strOption['appdesc'];?></textarea></td></tr>

<tr><td>APP关键词：</td><td><input style="width:300px;" name="option[appkey]" value="<?php echo $strOption['appkey'];?>" /></td></tr>

<tr><td></td><td>
<input type="submit" value="提交修改" /></td></tr>
</table>
</form>


</div>

<?php include template("admin/footer");?>