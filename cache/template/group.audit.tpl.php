<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="bbox">
<div class="bc">
<h1>审核帖子</h1>
<table class="table">
<thead>
<tr><th>帖子</th><th>操作</th></tr>
</thead>
<tbody>
<?php foreach((array)$arrTopic as $key=>$item) {?>
<tr><td><a target="_blank" href="<?php echo tsurl('group','topic',array('id'=>$item['topicid']))?>"><?php echo $item['title'];?></a></td><td>
<a href="<?php echo SITE_URL;?>index.php?app=group&ac=audit&ts=do&topicid=<?php echo $item['topicid'];?>&groupid=<?php echo $item['groupid'];?>">审核</a> |  <a href="<?php echo SITE_URL;?>index.php?app=group&ac=audit&ts=delete&topicid=<?php echo $item['topicid'];?>&groupid=<?php echo $item['groupid'];?>" onClick="return confirm('确定删除吗？')">删除</a>
</td></tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</div>
<div class="col-md-4">
<div class="bbox">
<div class="bc">
&gt; <a href="<?php echo tsurl('group','show',array('id'=>$groupid))?>">返回文化</a>
</div>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>