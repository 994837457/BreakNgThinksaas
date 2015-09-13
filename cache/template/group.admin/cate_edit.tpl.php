<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template("admin/header");?>
<!--main-->
<div class="midder">
<?php include template("admin/menu");?>
<form method="POST" action="<?php echo SITE_URL;?>index.php?app=group&ac=admin&mg=cate&ts=edit_do">
<table  cellpadding="0" cellspacing="0">
<tr><td width="100">分类名称：</td><td><input name="catename" value="<?php echo $strCate['catename'];?>" /></td></tr>
<?php if($referid) { ?>
<tr>
<td>上级分类：</td><td>
<select name="referid">
<?php foreach((array)$arrOneCate as $key=>$item) {?>
<option value="<?php echo $item['cateid'];?>"><?php echo $item['catename'];?></option>
<?php }?>
</select>
</td>
</tr>
<?php } ?>
<tr><td></td><td>
<input type="hidden" name="cateid" value="<?php echo $strCate['cateid'];?>" />
<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" />
<input type="submit" value="修改分类" />
</td></tr>
</table>
</form>
</div>
<?php include template("admin/footer");?>