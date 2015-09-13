<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>

<div class="container">


<div class="bbox">
<div class="bc">
<?php include template('s_menu'); ?>

<div class="s_top">获得约 <?php echo $all_num;?> 条结果</div>

<?php foreach((array)$arrGroup as $key=>$item) {?>
<div class="result">
<div class="content">
<h3><span>[小组] </span>&nbsp;<a  href="<?php echo tsurl('group','show',array('id'=>$item['groupid']))?>"><?php echo tsTitle($item['groupname'])?></a></h3>
<div class="info">创建于 <?php echo date('Y-m-d',$item['addtime'])?> &nbsp; <a href="#"><?php echo $item['count_user'];?> 人</a></div>
<p><?php echo tsCutContent($item['groupdesc'])?></p>
</div>
</div>
<?php }?>

<?php foreach((array)$arrTopic as $key=>$item) {?>
<div class="result">
<div class="content">
<h3><span>[话题] </span>&nbsp;<a  href="<?php echo tsurl('group','topic',array('id'=>$item['topicid']))?>"><?php echo tsTitle($item['title'])?></a></h3>
<div class="info">发表于 <?php echo date('Y-m-d',$item['addtime'])?> &nbsp; <a href="#"><?php echo $item['count_comment'];?> 回复</a></div>
<p></p>
</div>
</div>
<?php }?>

<?php foreach((array)$arrUser as $key=>$item) {?>
<div class="result">
<div class="content">
<h3><span>[用户] </span>&nbsp;<a  href="<?php echo tsurl('user','space',array('id'=>$item['userid']))?>"><?php echo tsTitle($item['username'])?></a></h3>
<div class="info"><?php echo date('Y-m-d',$item['addtime'])?> 加入&nbsp; <a href="#"><?php echo $item['count_followed'];?> 人关注</a></div>
<p><?php echo $item['signed'];?></p>
</div>
</div>
<?php }?>


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