<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>

<div class="container">

<div class="bbox">
<div class="bc">
<?php include template('s_menu'); ?>

<div class="s_top">获得约 <?php echo $articleNum;?> 条结果</div>

<?php foreach((array)$arrArticle as $key=>$item) {?>
<div class="result">

<div class="content">
<h3><span>[文章] </span>&nbsp;<a  href="<?php echo tsurl('article','show',array('id'=>$item['articleid']))?>"><?php echo tsTitle($item['title'])?></a></h3>
<div class="info">发表于 <?php echo $item['addtime'];?> &nbsp; <a href="#"><?php echo $item['count_comment'];?> 回复</a></div>
<p></p>
</div>
</div>
<?php }?>


<div class="page"><?php echo $pageUrl;?></div>
</div>
</div>

</div>

<?php include template('footer'); ?>