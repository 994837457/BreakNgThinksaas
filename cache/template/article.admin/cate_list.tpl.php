<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template("admin/header");?>
<!--main-->
<div class="midder">
<?php include template("admin/menu");?>
<table  cellpadding="0" cellspacing="0">
<tr class="old"><td>分类ID</td><td>分类名字</td><td>排序</td><td>操作</td></tr>
<?php foreach((array)$arrCate as $key=>$item) {?>
<tr class="odd"><td><?php echo $item['cateid'];?></td><td><?php echo $item['catename'];?></td>
<td><?php echo $item['orderid'];?></td>
<td>
<a href="<?php echo SITE_URL;?>index.php?app=article&ac=admin&mg=cate&ts=edit&cateid=<?php echo $item['cateid'];?>">[修改]</a> <a href="<?php echo SITE_URL;?>index.php?app=article&ac=admin&mg=cate&ts=del&cateid=<?php echo $item['cateid'];?>" onclick="return confirm('确定删除?')">[删除]</a></td></tr>
<?php }?>
</table>
</div>
<?php include template("admin/footer");?>