<?php defined('IN_TS') or die('Access Denied.'); ?><div class="photoalbumlist">
<ul class="bc">
<?php foreach((array)$arrAlbum as $key=>$item) {?>
<li>
<div class="pimg"><a href="<?php echo tsurl('photo','album',array('id'=>$item['albumid']))?>" class="album_photo"><img src="<?php if($item['albumface'] == '') { ?><?php echo SITE_URL;?>app/photo/skins/default/photo_album.png<?php } else { ?><?php echo tsXimg($item['albumface'],'photo',320,'300',$item['path'],1)?><?php } ?>" alt="<?php echo $item['albumname'];?>" class="hp"/></a>
</div>
</li>
<?php }?>
</ul>
<div class="clear"></div>
</div>