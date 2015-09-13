<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div>
<div class="panel panel-default">
<div class="panel-body">
<?php include template('menu'); ?>
<div class="row">
<?php foreach((array)$arrAlbum as $key=>$item) {?>
<div class="col-xs-6 p3">
<div class="photo">
<a href="<?php echo tsurl('photo','album',array('id'=>$item['albumid']))?>" class="thumbnail">
<img src="<?php if($item['albumface'] == '') { ?><?php echo SITE_URL;?>app/<?php echo $app;?>/skins/<?php echo $skin;?>/photo_album.png<?php } else { ?><?php echo tsXimg($item['albumface'],'photo',320,'300',$item['path'],1)?><?php } ?>" alt="<?php echo $item['albumname'];?>" >
<p class="caption"> <?php echo $item['count_photo'];?></p>
</a>
<div>
<h3 style=" bottom: 40px; position: relative;
"><a href="<?php echo tsurl('photo','album',array('id'=>$item['albumid']))?>"><?php echo $item['albumname'];?></a></h3></div>
</div>
</div>
<?php }?>
</div>
<div class="clear"></div>
<div class="page"><?php echo $pageUrl;?></div>
</div>
</div>
</div>
<?php include template('footer'); ?>