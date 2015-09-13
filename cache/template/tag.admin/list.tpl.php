<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template("admin/header");?>

<!--main-->
<div class="midder">

<?php include template("admin/menu");?>

<div><form method="post" action="<?php echo SITE_URL;?>index.php?app=tag&ac=admin&mg=do&ts=adddo"><input type="text" name="tag" /><input type="submit" value="添加标签" /></form></div>

<div class="page"><?php echo $pageUrl;?></div>

<table  cellpadding="0" cellspacing="0">
<tr class="old"><td width="20">ID</td><td width="100">标签名字</td><td>创建时间</td><td>操作</td></tr>
<?php foreach((array)$arrTags as $key=>$item) {?>
<tr class="odd"><td><?php echo $item['tagid'];?></td><td><?php echo $item['tagname'];?></td><td><?php echo date('Y-m-d H:i:s',$item['uptime'])?></td><td>

<a href="<?php echo SITE_URL;?>index.php?app=tag&ac=admin&mg=do&ts=opt&tagid=<?php echo $item['tagid'];?>">[优化]</a>

<a href="<?php echo SITE_URL;?>index.php?app=tag&ac=admin&mg=do&ts=isenable&tagid=<?php echo $item['tagid'];?>&isenable=<?php if($item['isenable']=='0') { ?>1<?php } else { ?>0<?php } ?>"><?php if($item['isenable']=='0') { ?>[禁用]<?php } else { ?><font color="red">[启用]</font><?php } ?></a> <a href="<?php echo SITE_URL;?>index.php?app=tag&ac=admin&mg=do&ts=del&tagid=<?php echo $item['tagid'];?>&page=<?php echo $page;?>">[删除]</a></td></tr>
<?php }?>
</table>

</div>
<?php include template("admin/footer");?>