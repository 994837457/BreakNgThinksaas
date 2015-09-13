<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="midder">
<div class="mc">
<div class="bbox">
<?php include template('menu'); ?>
<h1><?php echo $title;?></h1>
<div class="pl photitle">
&gt;<a href="<?php echo SITE_URL;?>index.php?app=photo&ac=upload&albumid=<?php echo $strAlbum['albumid'];?>">添加照片</a>
&nbsp;&gt; <a href="<?php echo SITE_URL;?>index.php?app=photo&ac=album&ts=info&albumid=<?php echo $strAlbum['albumid'];?>">批量修改</a>
&nbsp;&gt; <a href="<?php echo tsurl('photo','album',array('id'=>$strAlbum['albumid']))?>">返回圖</a><br></div>
<div style="margin:30px 0 30px 200px;">
<form method="POST" action="<?php echo SITE_URL;?>index.php?app=photo&ac=album&ts=edit_do">
<br>
<input style="width:300px;" name="albumname" value="<?php echo $strAlbum['albumname'];?>" placeholder="圖名"/>
<br>
<br>
<textarea style="width:300px;height:100px;" name="albumdesc" placeholder="圖名"><?php echo $strAlbum['albumdesc'];?></textarea>
<br>
<br>
<input type="hidden" name="albumid" value="<?php echo $strAlbum['albumid'];?>" />
<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" />
<input class="btn btn-success" type="submit" value="更改我的设置" />
</form>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>