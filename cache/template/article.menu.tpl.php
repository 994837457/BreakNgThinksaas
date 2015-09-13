<?php defined('IN_TS') or die('Access Denied.'); ?><ul class="nav nav-tabs" role="tablist">
<li role="presentation" <?php if($ac=='index') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('article')?>">最新夢想</a></li>
<?php foreach((array)$arrCate as $key=>$item) {?>
<li role="presentation" <?php if($ac=='cate' && $cateid==$item['cateid']) { ?>class="active"<?php } ?>>
<a href="<?php echo tsurl('article','cate',array('id'=>$item['cateid']))?>"><?php echo $item['catename'];?></a>
</li><?php }?>
<li role="presentation" <?php if($ac=='tags') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('article','tags')?>">标签</a></li>
<li role="presentation" <?php if($ac=='add') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('article','add')?>">写夢想</a></li>
</ul>