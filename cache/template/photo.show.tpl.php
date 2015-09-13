<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<?php doAction('tseditor','mini')?>
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="panel panel-default">
<div class="panel-body">
<h1><?php echo $title;?></h1>
<div>
&gt; <a href="<?php echo tsurl('photo','album',array('id'=>$strAlbum['albumid']))?>">返回圖</a>第<?php echo $nowPage;?>张 / 共<?php echo $conutPage;?>张
<?php if($nowPage >1) { ?>
<link href="#" rel="prev">
<a id="pre_photo" title="用方向键←可以向前翻页" href="<?php echo tsurl('photo','show',array('id'=>$prev))?>">上一张</a>
<?php if($nowPage < $conutPage) { ?>
/
<?php } ?>
<?php } ?>
<?php if($nowPage < $conutPage) { ?>
<link href="#" rel="next">
<a id="next_photo" title="用方向键→可以向后翻页" name="next_photo" href="<?php echo tsurl('photo','show',array('id'=>$next))?>">下一张</a>
<?php } ?>
</div>
<div class="tac show_photo">
<?php if($nowPage < $conutPage) { ?>
<a title="点击查看下一张" href="<?php echo tsurl('photo','show',array('id'=>$next))?>" class="mainphoto">
<?php } ?>
<img src="<?php echo tsXimg($strPhoto['photourl'],'photo',600,'',$strPhoto['path'])?>" alt="<?php echo $strAlbum['albumname'];?><?php echo $strPhoto['photoname'];?>" title="<?php echo $strAlbum['albumname'];?><?php echo $strPhoto['photoname'];?>" />
<?php if($nowPage < $conutPage) { ?>
</a>
<?php } ?>
</div>
<div>
<?php echo $strPhoto['photoname'];?>  <?php echo $strPhoto['photodesc'];?>
<?php if($TS_USER['userid'] == $strPhoto['userid'] || $TS_USER['isadmin']==1) { ?><a href="<?php echo tsurl('photo','edit',array('photoid'=>$strPhoto['photoid']))?>">修改</a><?php } ?>
</div>
<div class="c9">
<?php echo $strPhoto['count_view'];?>人浏览　
上传于<?php echo $strPhoto['addtime'];?>
<a class="thickbox" target="_blank" href="<?php echo SITE_URL;?>uploadfile/photo/<?php echo $strPhoto['photourl'];?>">查看原圖</a>
　<?php if($TS_USER['userid'] == $strPhoto['userid'] || $TS_USER['isadmin']==1) { ?>&gt;&nbsp;<a title="删除这张照片" rel="nofollow" href="<?php echo SITE_URL;?>index.php?app=photo&ac=do&ts=photo_del&photoid=<?php echo $strPhoto['photoid'];?>">删除照片</a><?php } ?>
</div>
<div id="comments">
<table class="wr" id="c-80243627">
<tbody>
<?php foreach((array)$arrComment as $key=>$item) {?>
<tr><td width="75" valign="top"><a href="<?php echo tsurl('user','space',array('id'=>$item['user']['userid']))?>"><img src="<?php echo $item['user'][face];?>" width="48" height="48" class="pil"></a>
</td>
<td valign="top">
<span class="wrap">
<h4><?php echo date('Y-m-d H:i:s',$item['addtime'])?>: <a href="<?php echo tsurl('user','space',array('id'=>$item['user'][userid]))?>"><?php echo $item['user'][username];?></a></h4>
</span><?php echo $item['content'];?><br>
<div class="align-right">
<?php if(intval($TS_USER['isadmin']) == 1 || $strPhoto['userid']==$TS_USER['userid']) { ?>
<span class="gact">&gt; <a class="j a_confirm_link" href="<?php echo SITE_URL;?>index.php?app=photo&ac=do&ts=delcomment&commentid=<?php echo $item['commentid'];?>">删除</a></span>
<?php } ?>
</div>
</td></tr>
<?php }?>
</tbody></table>
<div class="txd">
<?php if(intval($TS_USER['userid']) > 0) { ?>
<form method="POST" action="<?php echo SITE_URL;?>index.php?app=photo&ac=do&ts=comment_do">
<textarea  name="content" id="tseditor"></textarea><br>
<input type="hidden" value="<?php echo $strPhoto['photoid'];?>" name="photoid">
<button class="btn btn-success" type="submit">分享</button>
</form>
<?php } else { ?>
请登录后再评论哦^_^
<?php } ?>
</div>
<br>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-body">
<?php doAction('gobad','300')?>
</div>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>