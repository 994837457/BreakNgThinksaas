<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="midder">
<div class="mc">
<?php include template('menu'); ?>
<div class="tags">
<?php foreach((array)$arrTag as $key=>$item) {?>
<a href="<?php echo tsurl('article','tag',array('id'=>urlencode($item['tagname'])))?>"><?php echo $item['tagname'];?></a>
<?php }?>
</div>
<div class="clear"></div>
<div style="height:30px;"></div>
<div class="page"><?php echo $pageUrl;?></div>
</div>
</div>
<?php include template('footer'); ?>