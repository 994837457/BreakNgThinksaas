<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template("admin/header");?>
<div class="midder">
<?php include template("admin/menu");?>
<form  method="POST" action="index.php?app=article&ac=admin&mg=options&ts=do">
<table>
<tr><td width="150">APP名称：</td><td><input style="width:300px;" name="option[appname]" value="<?php echo $strOption['appname'];?>" /></td></tr>
<tr><td>APP介绍：</td><td><textarea style="width:300px;" name="option[appdesc]"><?php echo $strOption['appdesc'];?></textarea></td></tr>
<tr><td>APP关键词：</td><td><input style="width:300px;" name="option[appkey]" value="<?php echo $strOption['appkey'];?>" /></td></tr>
<tr><td>会员发布：</td><td><input type="radio" name="option[allowpost]" value="0" <?php if($strOption['allowpost']=='0') { ?>checked<?php } ?>  />不允许 <input type="radio" name="option[allowpost]" value="1" <?php if($strOption['allowpost']=='1') { ?>checked<?php } ?> />允许</td></tr>
<tr><td>夢想是否审核：</td><td><input type="radio" name="option[isaudit]" value="0" <?php if($strOption['isaudit']=='0') { ?>checked<?php } ?>  />不审核 <input type="radio" name="option[isaudit]" value="1" <?php if($strOption['isaudit']=='1') { ?>checked<?php } ?> />审核</td></tr>
<tr><td></td><td>
<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" />
<input type="submit" value="提交修改" /></td></tr>
</table>
</form>
</div>
<?php include template("admin/footer");?>