<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template("admin/header");?>
<!--main-->
<div class="midder">
<?php include template("admin/menu");?>
<div class="page"><?php echo $pageUrl;?></div>
<table>
<tr class="old"><td>ID</td><td>标题</td><td>时间</td><td>状态</td><td>操作</td></tr>
<?php foreach((array)$arrTopic as $key=>$item) {?>
<tr class="odd"><td><?php echo $item['topicid'];?></td><td><a href="index.php?app=group&ac=admin&mg=topic&ts=editview&topicid=<?php echo $item['topicid'];?>"><?php echo $item['title'];?></a></td><td><?php echo $item['addtime'];?></td><td><?php if($item['isupdate']==1) { ?><font color="green">已更新</font><?php } else { ?>未更新<?php } ?></td><td>
<a href="<?php echo SITE_URL;?>index.php?app=group&ac=admin&mg=topic&ts=update&topicid=<?php echo $item['topicid'];?>">更新</a>
</td></tr>
<?php }?>
</table>
</div>
<?php include template("admin/footer");?>