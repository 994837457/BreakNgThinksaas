<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="container">


<div class="my">


<div class="my_left">

<?php include pubTemplate("my")?>

</div>

<div class="my_right">

<div class="rc">


<?php doAction('my_right_top')?>


<ul class="nav nav-tabs" role="tablist">
<li role="presentation" class="active"><a href="">我的文件夹</a></li>
</ul>



<div class="albumlist">

<ul>
<?php foreach((array)$arrAlbum as $key=>$item) {?>
<li>
<div>
<h2><a target="_blank" href="<?php echo tsurl('attach','album',array('id'=>$item['albumid']))?>"><?php echo $item['title'];?></a></h2>
<p>创建于<?php echo $item['addtime'];?></p>
<p><?php echo $item['count_attach'];?>个资料</p>
</div>
</li>
<?php }?>
</ul>

</div>



</div>

</div>


</div>
</div>
<?php include template('footer'); ?>