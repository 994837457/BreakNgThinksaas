<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="container">
<div class="bbox">
<div class="bc">
<h1>标签</h1>
<div class="tags">
<?php foreach((array)$arrTag as $key=>$item) {?>
<a href="<?php echo tsurl('group','tag',array('id'=>urlencode($item['tagname'])))?>"><?php echo $item['tagname'];?></a>
<?php }?>
</div>
<div class="clear"></div>
<div style="height:30px;"></div>
<div class="page"><?php echo $pageUrl;?></div>
</div>
</div>
</div>
<?php include template('footer'); ?>