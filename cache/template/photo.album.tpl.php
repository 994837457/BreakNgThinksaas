<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div>
<div class="panel panel-default">
<div class="panel-body">
<h1><?php echo $title;?></h1>
<div>
<?php if($strAlbum['userid'] == $TS_USER['userid'] || $TS_USER['isadmin']==1) { ?>    &nbsp;&gt;&nbsp;<a href="<?php echo SITE_URL;?>index.php?app=photo&ac=album&ts=edit&albumid=<?php echo $strAlbum['albumid'];?>">修改圖属性</a>
&nbsp;&gt;&nbsp;<a href="<?php echo SITE_URL;?>index.php?app=photo&ac=upload&albumid=<?php echo $strAlbum['albumid'];?>">添加照片</a>
<?php if($strAlbum['count_photo']>'0') { ?>&nbsp;&gt;&nbsp;<a href="<?php echo SITE_URL;?>index.php?app=photo&ac=album&ts=info&albumid=<?php echo $strAlbum['albumid'];?>">批量修改</a><?php } ?><?php } ?>
&nbsp;&gt;&nbsp;<a href="<?php echo tsurl('photo','album',array(ts=>user,userid=>$strAlbum['userid']))?>">返回<?php if($strAlbum['userid'] == $TS_USER['userid']) { ?>我<?php } else { ?><?php echo $strUser['username'];?><?php } ?>的圖首页</a>
</div>
<div class="row">
<?php if($arrPhoto) { ?>
<?php foreach((array)$arrPhoto as $key=>$item) {?>
<div class="col-sm-6 p3">
<div class="thumbnail">
<a href="<?php echo tsurl('photo','show',array('id'=>$item['photoid']))?>"><img src="<?php echo tsXimg($item['photourl'],'photo',300,'300',$item['path'],1)?>" alt="<?php echo $strAlbum['albumname'];?><?php echo $item['photoname'];?>" class="p3"></a>
<div class="caption">
</div>
</div>
</div>
<?php }?>
<?php } else { ?>
<br>
<div class="pl">这个圖现在还没有照片
<?php if($strAlbum['userid'] == $TS_USER['userid']) { ?>, 你可以<a href="<?php echo SITE_URL;?>index.php?app=photo&ac=upload&albumid=<?php echo $strAlbum['albumid'];?>">添加照片</a><?php } ?>
</div>
<br>
<?php } ?>
</div>
<div class="page"><?php echo $pageUrl;?></div>
<div><?php echo $strAlbum['albumdesc'];?></div>
<div>
<?php echo $strAlbum['count_view'];?> 人浏览
<?php echo $strAlbum['count_photo'];?>&nbsp;张照片
&nbsp;<?php echo $strAlbum['addtime'];?>&nbsp;创建
<?php if($strAlbum['userid'] == $TS_USER['userid'] || $TS_USER['isadmin']==1) { ?>
&nbsp;&gt;&nbsp;<a  class="j a_confirm_link" rel="nofollow" href="<?php echo SITE_URL;?>index.php?app=photo&ac=album&ts=del&albumid=<?php echo $strAlbum['albumid'];?>">删除圖</a>
<?php } ?>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>