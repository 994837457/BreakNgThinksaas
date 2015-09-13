<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template("admin/header");?>
<!--main-->
<div class="midder">
<?php include template("admin/menu");?>
<table  cellpadding="0" cellspacing="0">
<tr class="old"><td>分类ID</td><td>分类名字</td><td>操作</td></tr>
<?php foreach((array)$arrCatess as $key=>$item) {?>
<tr class="odd"><td><?php echo $item['cateid'];?></td><td>I、<?php echo $item['catename'];?></td>
<td>
<a href="<?php echo SITE_URL;?>index.php?app=group&ac=admin&mg=cate&ts=add&referid=<?php echo $item['cateid'];?>">[添加二级分类]</a>
<a href="<?php echo SITE_URL;?>index.php?app=group&ac=admin&mg=cate&ts=edit&cateid=<?php echo $item['cateid'];?>">[修改] <a href="<?php echo SITE_URL;?>index.php?app=group&ac=admin&mg=cate&ts=del&cateid=<?php echo $item['cateid'];?>" onclick="return confirm('确定删除?')">[删除]</a></a></td></tr>
<?php foreach((array)$item['two'] as $tkey=>$titem) {?>
<tr class="odd"><td><?php echo $titem['cateid'];?></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;II、<?php echo $titem['catename'];?></td>
<td>
<a href="<?php echo SITE_URL;?>index.php?app=group&ac=admin&mg=cate&ts=add&referid=<?php echo $titem['cateid'];?>">[添加三级分类]</a>
<a href="<?php echo SITE_URL;?>index.php?app=group&ac=admin&mg=cate&ts=edit&cateid=<?php echo $titem['cateid'];?>&referid=1">[修改] <a href="<?php echo SITE_URL;?>index.php?app=group&ac=admin&mg=cate&ts=del&cateid=<?php echo $titem['cateid'];?>" onclick="return confirm('确定删除?')">[删除]</a></a></td></tr>
<?php foreach((array)$titem['three'] as $ttkey=>$ttitem) {?>
<tr class="odd"><td><?php echo $ttitem['cateid'];?></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;III、<?php echo $ttitem['catename'];?></td>
<td>
<!-- <a href="<?php echo SITE_URL;?>index.php?app=group&ac=admin&mg=cate&ts=add&referid=<?php echo $ttitem['cateid'];?>">[添加下级分类]</a> -->
<a href="<?php echo SITE_URL;?>index.php?app=group&ac=admin&mg=cate&ts=edit&cateid=<?php echo $ttitem['cateid'];?>">[修改] <a href="<?php echo SITE_URL;?>index.php?app=group&ac=admin&mg=cate&ts=del&cateid=<?php echo $ttitem['cateid'];?>" onclick="return confirm('确定删除?')">[删除]</a></a></td></tr>
<?php }?>
<?php }?>
<?php }?>
</table>
</div>
<?php include template("admin/footer");?>