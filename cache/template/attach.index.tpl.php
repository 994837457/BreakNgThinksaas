<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="container">

<ol class="breadcrumb">
  <li><a href="<?php echo SITE_URL;?>">首页</a></li>
  <li class="active">资料</li>
</ol>

<div class="bbox mh400">


<div class="bc">

<?php include template('menu'); ?>

<div class="albumlist">
<ul>
<?php foreach((array)$arrAlbum as $key=>$item) {?>
<li>
<div>
<h2><a href="<?php echo tsurl('attach','album',array('id'=>$item['albumid']))?>"><?php echo $item['title'];?></a></h2>
<p>作者：<?php echo $item['user']['username'];?></p>
<p>时间：<?php echo date('Y-m-d',strtotime($item['addtime']))?></p>
<p>资料：<?php echo $item['count_attach'];?>个</p>
</div>
</li>
<?php }?>
</ul>
</div>

</div>

</div>


</div>

<?php include template('footer'); ?>