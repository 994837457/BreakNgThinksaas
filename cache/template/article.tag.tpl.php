<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="midder">
<div class="mc">
<?php include template('menu'); ?>
<h1><?php echo $strTag['tagname'];?></h1>
<div class="cleft">
<div class="clist">
<ul>
<?php foreach((array)$arrArticle as $key=>$item) {?>
<li>
<?php if($item['photo']) { ?><a href="<?php echo tsurl('article','show',array('id'=>$item['articleid']))?>">
<img style="float:left;" src="<?php echo tsXimg($item['photo'],'article',180,140,$item['path'],'1')?>" />
</a>
<?php } ?>
<div><a href="<?php echo tsurl('article','show',array('id'=>$item['articleid']))?>"><?php echo htmlspecialchars($item['title'])?></a></div>
<span><a href="<?php echo tsurl('user','space',array('id'=>$item['user'][userid]))?>"><?php echo $item['user'][username];?></a> 发表于 <?php echo $item['addtime'];?></span>
<p><?php echo $item['content'];?> (<a href="<?php echo tsurl('article','show',array('id'=>$item['articleid']))?>">查看全文</a>)</p>
<div class="clear"></div>
</li>
<?php }?>
</ul>
</div>
<div class="page"><?php echo $pageUrl;?></div>
</div>
<div class="cright">
<div class="bbox">
<div class="btitle">热门标签</div>
<div class="bc">
<div class="tags">
<?php foreach((array)$arrTag as $key=>$item) {?>
<a href="<?php echo tsurl('article','tag',array('id'=>urlencode($item['tagname'])))?>"><?php echo $item['tagname'];?></a>
<?php }?>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>