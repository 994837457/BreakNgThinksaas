<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template("admin/header");?>
<!--main-->
<div class="midder">
<?php include template("admin/menu");?>
<form method="post" action="<?php echo SITE_URL;?>index.php?app=home&ac=admin&mg=info&ts=editdo">
<table>
<tr>
<td>InfoKey:</td><td><input style="width:300px;padding:5px;" name="infokey" value="<?php echo $strInfo['infokey'];?>" /></td>
</tr>
<tr>
<td>标题:</td><td><input style="width:300px;padding:5px;" name="title" value="<?php echo $strInfo['title'];?>" /></td>
</tr>
<tr>
<td>内容:</td><td>
<textarea style="width:500px;height:200px;padding:5px;" name="content"><?php echo $strInfo['content'];?></textarea>
</td>
</tr>
<tr>
<td></td><td>
<input type="hidden" name="infoid" value="<?php echo $strInfo['infoid'];?>" />
<input type="submit" value="提交" />
</td>
</tr>
</table>
</form>
</div>
<?php include template("admin/footer");?>