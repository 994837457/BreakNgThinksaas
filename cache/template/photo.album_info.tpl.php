<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="midder">
<div class="mc">
<div class="bbox">
<?php include template('menu'); ?>
<h1><?php echo $title;?></h1>
<div style="margin:30px 0 0 100px;">
<form method="post" action="<?php echo SITE_URL;?>index.php?app=photo&ac=album&ts=info_do">
<?php foreach((array)$arrPhoto as $key=>$item) {?>
<div class="photo-item">
<div class="cover">
<a href=""><img src="<?php echo tsXimg($item['photourl'],'photo',100,100,$item['path'])?>"></a>
<div class="choose-cover">
<input type="hidden" name="photoid[]" value="<?php echo $item['photoid'];?>" />
<input type="radio" <?php if($strAlbum['albumface']==$item['photourl']) { ?>checked="checked"<?php } ?> value="<?php echo $item['photourl'];?>" name="albumface"><label>设置为封面</label>
</div>
</div>
<div class="intro">
<textarea style="height:50px;" name="photodesc[]"><?php echo $item['photodesc'];?></textarea>
<p><a class="j a_confirm_link" title="删除这张照片" rel="nofollow" href="<?php echo SITE_URL;?>index.php?app=photo&ac=do&ts=photo_del&photoid=<?php echo $item['photoid'];?>">删除照片</a></p>
</div>
</div>
<div class="clear"></div>
<?php }?>
<input type="hidden" name="albumid" value="<?php echo $strAlbum['albumid'];?>" />
<input class="btn btn-success" type="submit" value="保存">
</form>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>