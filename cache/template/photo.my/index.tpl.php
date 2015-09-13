<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="container">
<div class="my">
<div class="col-md-3">
<div class="my_left">
<?php include pubTemplate("my")?>
</div>
</div>
<div class="col-md-9">
<div class="my_right">
<div class="rc">
<?php doAction('my_right_top')?>
<ul class="nav nav-tabs" role="tablist">
<li role="presentation" class="active"><a href="">我的圖</a></li>
</ul>
<?php foreach((array)$arrAlbum as $key=>$item) {?>
<div class="box albumlst">
<a target="_blank" href="<?php echo tsurl('photo','album',array('id'=>$item['albumid']))?>" class="album_photo"><img src="<?php if($item['albumface'] == '') { ?><?php echo SITE_URL;?>app/<?php echo $app;?>/skins/<?php echo $skin;?>/photo_album.png<?php } else { ?><?php echo tsXimg($item['albumface'],'photo',170,'170',$item['path'],1)?><?php } ?>" width="170" alt="<?php echo $item['albumname'];?>" /></a>
<div class="albumlst_r">
<p class="pd05"><a target="_blank" href="<?php echo tsurl('photo','album',array('id'=>$item['albumid']))?>"><?php echo $item['albumname'];?></a></p>
<p class="pd05">
<?php echo $item['count_photo'];?>张照片
<br />
<?php echo $item['addtime'];?>创建<br>
</p>
</div>
</div>
<?php if(is_int(($key+1)/5)) { ?>
<?php } ?>
<?php }?>
<div class="page"><?php echo $pageUrl;?></div>
</div></div>
</div>
</div>
</div>
<?php include template('footer'); ?>