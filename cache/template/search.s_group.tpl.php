<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>

<div class="container">

<div class="bbox">
<div class="bc">
<?php include template('s_menu'); ?>
<div class="s_top">获得约 <?php echo $group_num;?> 条结果</div>

<?php foreach((array)$arrGroup as $key=>$item) {?>
<div class="result">
<div class="content">
<h3><span>[小组] </span>&nbsp;<a  href="<?php echo tsurl('group','show',array('id'=>$item['groupid']))?>"><?php echo tsTitle($item['groupname'])?></a></h3>
<div class="info">创建于 <?php echo date('Y-m-d',$item['addtime'])?> &nbsp; <a href="#"><?php echo $item['count_user'];?> 人</a></div>
<p><?php echo tsCutContent($item['groupdesc'])?></p>
</div>
</div>
<?php }?>

<div class="page"><?php echo $pageUrl;?></div>
</div>
</div>

</div>

<?php include template('footer'); ?>