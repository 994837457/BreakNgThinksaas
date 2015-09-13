<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template("admin/header");?>
<!--main-->
<div class="midder">
<?php include template("admin/menu");?>
<table>
<tr class="old">
<td>InfoID</td>
<td>InfoKey</td>
<td>InfoTitle</td>
<td>调用链接</td>
<td>操作</td>
</tr>
<?php foreach((array)$arrInfo as $key=>$item) {?>
<tr>
<td><?php echo $item['infoid'];?></td>
<td><?php echo $item['infokey'];?></td>
<td><?php echo $item['title'];?></td>
<td><?php echo tsurl('home','info',array('key'=>$item['infokey']))?></td>
<td><a href="<?php echo SITE_URL;?>index.php?app=home&ac=admin&mg=info&ts=edit&infoid=<?php echo $item['infoid'];?>">修改</a>  |  <a href="<?php echo SITE_URL;?>index.php?app=home&ac=admin&mg=info&ts=delete&infoid=<?php echo $item['infoid'];?>">删除</a></td>
</tr>
<?php }?>
</table>
</div>
<?php include template("admin/footer");?>