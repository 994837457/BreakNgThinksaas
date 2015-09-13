<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>

<!--main-->
<div class="midder">
<?php include template('anti_menu'); ?>


<div>
<form method="post" action="<?php echo SITE_URL;?>index.php?app=system&ac=anti&ts=worddo">
词语：<input name="word" /><input type="submit" value="添加" />
</form>
</div>


<div>
<table>

<tr class="old"><td>ID</td><td>敏感词</td><td>添加时间</td><td>操作</td></tr>

<?php foreach((array)$arrWord as $key=>$item) {?>
<tr class="odd"><td><?php echo $item['id'];?></td><td><?php echo $item['word'];?></td><td><?php echo $item['addtime'];?></td><td><a href="<?php echo SITE_URL;?>index.php?app=system&ac=anti&ts=worddel&id=<?php echo $item['id'];?>">删除</a></td></tr>
<?php }?>

</table>

</div>


</div>

<?php include template('footer'); ?>