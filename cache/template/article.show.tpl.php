<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<?php doAction('tseditor','mini')?>
<div class="container">
<ol class="breadcrumb">
<li><a href="<?php echo SITE_URL;?>">首页</a></li>
<li><a href="<?php echo tsurl('article')?>">夢想</a></li>
<li><?php if($strArticle['cate']) { ?><a href="<?php echo tsurl('article','cate',array('id'=>$strArticle['cate']['cateid']))?>"><?php echo $strArticle['cate']['catename'];?></a><?php } ?></li>
<li class="active"><?php echo $strArticle['title'];?></li>
</ol>
<div class="row">
<div class="col-md-8">
<div class="bbox">
<div class="bc">
<h1><?php echo $strArticle['title'];?></h1>
<div class="media mb20">
<a class="pull-left" href="<?php echo tsurl('user','space',array('id'=>$strArticle['user'][userid]))?>"><img class="media-object img-circle" title="<?php echo $strArticle['user'][username];?>" alt="<?php echo $strArticle['user'][username];?>" src="<?php echo $strArticle['user'][face];?>" width="48" height="48"></a>
<div class="media-body">
<h4 class="media-heading"><a href="<?php echo tsurl('user','space',array('id'=>$strArticle['userid']))?>"><?php echo $strArticle['user'][username];?></a></h4>
<p class="c9"><i class="glyphicon glyphicon-calendar  article-info"></i> <?php echo $strArticle['addtime'];?></p>
</div>
</div>
<?php if($strArticle['tags']) { ?>
<div class="tags">
<?php foreach((array)$strArticle['tags'] as $key=>$item) {?> <a
href="<?php echo tsurl('article','tag',array('id'=>$item['tagname']))?>"><?php echo $item['tagname'];?></a>
<?php }?>
</div>
<div class="clear"></div>
<?php } ?>
<div class="fs14 lh30">
<?php echo $strArticle['content'];?>
<?php doAction('gobad','468')?>
</div>
<div class="tar">
<a class="btn" href="javascript:void('0');"
onclick="recommend('<?php echo $strArticle['articleid'];?>');"><?php echo $strArticle['count_recommend'];?>喜歡</a>
<a class="btn" href=""><?php echo $strArticle['count_comment'];?>評論</a>
</div>
<?php if($TS_USER['isadmin']==1) { ?>
<div class="tar pd100">
<a
href="<?php echo SITE_URL;?>index.php?app=article&ac=edit&articleid=<?php echo $strArticle['articleid'];?>">修改</a>
<a
href="<?php echo SITE_URL;?>index.php?app=article&ac=delete&articleid=<?php echo $strArticle['articleid'];?>">删除</a>
</div>
<?php } ?>
</div>
</div>
<div class="bbox">
<div class="btitle"></div>
<div class="bc">
<ul class="comment">
<?php foreach((array)$arrComment as $key=>$item) {?>
<li class="clearfix">
<div class="user-face">
<a
href="<?php echo tsurl('user','space',array('id'=>$item['user'][userid]))?>"><img
title="<?php echo $item['user'][username];?>" alt="<?php echo $item['user'][username];?>"
src="<?php echo $item['user'][face];?>" class="img-circle" /></a>
</div>
<div class="reply-doc">
<h4> <a href="<?php echo tsurl('user','space',array('id'=>$item['userid']))?>"><?php echo $item['user'][username];?></a>
<?php echo date('Y-m-d H:i:s',$item['addtime'])?>
</h4>
<p><?php echo $item['content'];?></p>
<?php if($TS_USER['userid'] == $strArticle['userid'] ||
$TS_USER['isadmin']==1) { ?>
<div class="group_banned">
<span><a class="j a_confirm_link"
href="<?php echo SITE_URL;?>index.php?app=article&ac=comment&ts=delete&commentid=<?php echo $item['commentid'];?>"
rel="nofollow">删除</a> </span>
</div>
<?php } ?>
</div>
</li> <?php }?>
</ul>
<div class="page"><?php echo $pageUrl;?></div>
<div>
<?php if(intval($TS_USER['userid'])==0) { ?>
<div class="pd20 tac">
<a href="<?php echo tsurl('user','login')?>">登录</a> | <a
href="<?php echo tsurl('user','register')?>">注册</a>
</div>
<?php } else { ?>
<form method="POST"
action="<?php echo SITE_URL;?>index.php?app=article&ac=comment&ts=do"
onSubmit="return submitonce(this)" id="formMini">
<textarea style="width: 100%;" type="text" id="tseditor"
name="content"></textarea>
<p class="tc" style="margin: 10px;">
<input type="hidden" name="articleid"
value="<?php echo $strArticle['articleid'];?>" /> <input type="hidden"
name="token" value="<?php echo $_SESSION['token'];?>" />
<button class="btn btn-success" type="submit">回复</button>
</p>
</form>
<?php } ?>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="bbox">
<div class="btitle">夢想分类</div>
<div class="bc">
<ul class="nav nav-pills nav-stacked" role="tablist">
<?php foreach((array)$arrCate as $key=>$item) {?>
<li role="presentation" <?php if($ac=='cate' && $cateid==$item['cateid']) { ?>class="active"<?php } ?>><a href="<?php echo tsurl('article','cate',array('id'=>$item['cateid']))?>"><?php echo $item['catename'];?></a></li>
<?php }?>
<li role="presentation" <?php if($ac=='tags') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('article','tags')?>">标签</a></li>
<li role="presentation" <?php if($ac=='add') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('article','add')?>">写夢想</a></li>
</ul>
</div>
</div>
<div class="bbox">
<div class="btitle">一周热门</div>
<div class="bc commlist">
<ul>
<?php foreach((array)$arrHot7 as $key=>$item) {?>
<li><a
href="<?php echo tsurl('article','show',array('id'=>$item['articleid']))?>"><?php echo $item['title'];?></a></li>
<?php }?>
</ul>
</div>
</div>
<div class="bbox">
<div class="btitle">一月热门</div>
<div class="bc commlist">
<ul>
<?php foreach((array)$arrHot30 as $key=>$item) {?>
<li><a
href="<?php echo tsurl('article','show',array('id'=>$item['articleid']))?>"><?php echo $item['title'];?></a></li>
<?php }?>
</ul>
</div>
</div>
<!--广告位-->
<?php doAction('gobad','300')?>
</div>
</div>
</div>
<?php include template('footer'); ?>
