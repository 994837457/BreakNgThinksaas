<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template("admin/header");?>
<!--main-->
<div class="midder">
<?php include template("admin/menu");?>
<div class="page"><?php echo $pageUrl;?></div>
<table>
<tr class="old"><td>ID</td><td>UserID</td><td>标题</td><td>时间</td><td>操作</td></tr>
<?php foreach((array)$arrTopic as $key=>$item) {?>
<tr class="odd"><td><?php echo $item['topicid'];?></td><td><?php echo $item['userid'];?></td><td><a target="_blank" href="<?php echo tsurl('group','topic',array('id'=>$item['topicid']))?>"><?php echo $item['title'];?></a></td><td><?php echo date('Y-m-d H:i:s',$item['addtime'])?></td><td>
<a href="<?php echo SITE_URL;?>index.php?app=group&ac=admin&mg=topic&ts=isaudit&topicid=<?php echo $item['topicid'];?>">
<?php if($item['isaudit']==0) { ?>
已审核
<?php } else { ?>
<font color="red">未审核</a>
<?php } ?>
</a>
<a href="<?php echo SITE_URL;?>index.php?app=group&ac=admin&mg=topic&ts=delete&topicid=<?php echo $item['topicid'];?>">删除</a>
</td></tr>
<?php }?>
</table>
</div>
<?php include template("admin/footer");?>