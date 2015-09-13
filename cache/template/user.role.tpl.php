<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<!--main-->
<div class="container">
<ol class="breadcrumb">
<li><a href="<?php echo SITE_URL;?>">首页</a></li>
<li><a href="<?php echo tsurl('user')?>">用户</a></li>
<li class="active">角色</li>
</ol>
<div class="panel panel-default">
<div class="panel-body">
<table class="table">
<thead>
<tr><th>角色名称</th><th>开始积分</th><th>结束积分</th><th>权限</th></tr>
</thead>
<tbody>
<?php foreach((array)$arrRole as $key=>$item) {?>
<tr><td><?php echo $item['rolename'];?></td><td><?php echo $item['score_start'];?></td><td><?php echo $item['score_end'];?></td><td></td></tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</div>
<?php include template('footer'); ?>