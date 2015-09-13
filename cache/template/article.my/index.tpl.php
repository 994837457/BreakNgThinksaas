<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="container">
<div class="my">
<div class="col-md-3">
<div class="my_left">
<?php include pubTemplate("my")?>
</div>
</div>
<div class="col-md-9">
<div class="my_right">
<div class="rc">
<?php doAction('my_right_top')?>
<ul class="nav nav-tabs" role="tablist">
<li role="presentation" class="active"><a href="">我的夢想</a></li>
</ul>
<table class="table">
<thead>
<tr><th>标题</th><th>时间</th><th>操作</th></tr>
</thead>
<tbody>
<?php foreach((array)$arrArticle as $key=>$item) {?>
<tr><td>
<a target="_blank" href="<?php echo tsurl('article','show',array('id'=>$item['articleid']))?>"><?php echo $item['title'];?></a></td><td><?php echo $item['addtime'];?></td><td>
<a target="_blank" href="<?php echo SITE_URL;?>index.php?app=article&ac=edit&articleid=<?php echo $item['articleid'];?>">修改</a> |
<a target="_blank" href="<?php echo SITE_URL;?>index.php?app=article&ac=delete&articleid=<?php echo $item['articleid'];?>">删除</a>
</td></tr>
<?php }?>
<tbody>
</table>
<div class="clear"></div>
<div class="page"><?php echo $pageUrl;?></div>
</div></div>
</div>
</div>
</div>
<?php include template('footer'); ?>