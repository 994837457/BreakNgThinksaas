<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template("admin/header");?>
<!--main-->
<div class="midder">
<?php include template("admin/menu");?>
<form method="post" action="<?php echo SITE_URL;?>index.php?app=home&ac=admin&mg=info&ts=adddo">
<table>
<tr>
<td>InfoKey:</td><td><input style="width:300px;padding:5px;" name="infokey"  /></td>
</tr>
<tr>
<td>标题:</td><td><input style="width:300px;padding:5px;" name="title"  /></td>
</tr>
<tr>
<td>内容:</td><td>
<textarea style="width:500px;height:200px;padding:5px;" name="content"></textarea>
</td>
</tr>
<tr>
<td></td><td>
<input type="submit" value="提交" />
</td>
</tr>
</table>
</form>
</div>
<?php include template("admin/footer");?>