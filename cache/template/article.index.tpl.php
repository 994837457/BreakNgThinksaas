<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="container">
<ol class="breadcrumb">
<li><a href="<?php echo SITE_URL;?>">分享</a></li>
<li class="active">夢想</li>
</ol>
<div class="row">
<div class="col-md-12">
<div><a class="btn btn-info btn-block btn-lg" href="<?php echo tsurl('article','add')?>">写夢想</a></div>
<div class="bbox">
<div class="btitle">夢想分类</div>
<div class="bc">
<ul class="nav nav-pills nav-stacked" role="tablist">
<?php foreach((array)$arrCate as $key=>$item) {?>
<li role="presentation" <?php if($ac=='cate' && $cateid==$item['cateid']) { ?>class="active"<?php } ?>><a href="<?php echo tsurl('article','cate',array('id'=>$item['cateid']))?>"><?php echo $item['catename'];?></a></li>
<?php }?>
<li role="presentation" <?php if($ac=='tags') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('article','tags')?>">标签</a></li>
</ul>
</div>
</div>
<div class="bbox">
<div class="btitle">推荐阅读</div>
<div class="bc">
<div class="commlist">
<ul>
<?php foreach((array)$arrRecommend as $key=>$item) {?>
<li><a href="<?php echo tsurl('article','show',array('id'=>$item['articleid']))?>"><?php echo $item['title'];?></a></li>
<?php }?>
</ul>
</div>
</div>
</div>
<div class="bbox">
<div class="btitle">一周热门</div>
<div class="bc">
<div class="commlist">
<ul>
<?php foreach((array)$arrHot7 as $key=>$item) {?>
<li><a href="<?php echo tsurl('article','show',array('id'=>$item['articleid']))?>"><?php echo $item['title'];?></a></li>
<?php }?>
</ul>
</div>
</div>
</div>
<div class="bbox">
<div class="btitle">一月热门</div>
<div class="bc">
<div class="commlist">
<ul>
<?php foreach((array)$arrHot30 as $key=>$item) {?>
<li><a href="<?php echo tsurl('article','show',array('id'=>$item['articleid']))?>"><?php echo $item['title'];?></a></li>
<?php }?>
</ul>
</div>
</div>
</div>
<div class="col-md-12">
<div class="bbox">
<div class="btitle">最新夢想</div>
<div class="bc">
<div class="clist">
<ul>
<?php foreach((array)$arrArticle as $key=>$item) {?>
<li>
<?php if($item['photo']) { ?>
<a href="<?php echo tsurl('article','show',array('id'=>$item['articleid']))?>">
<img style="float:left;" src="<?php echo tsXimg($item['photo'],'article',180,140,$item['path'],'1')?>" />
</a>
<?php } ?>
<div class="title"><a href="<?php echo tsurl('article','show',array('id'=>$item['articleid']))?>"><?php echo $item['title'];?></a></div>
<div class="content"><?php echo $item['content'];?> (<a href="<?php echo tsurl('article','show',array('id'=>$item['articleid']))?>">查看全文</a>)</div>
<span style="float:left;">
<a href="<?php echo tsurl('user','space',array('id'=>$item['user'][userid]))?>">
<img class="wb" src="<?php echo $item['user'][face];?>" alt="<?php echo $item['user']['username'];?>" title="<?php echo $item['user']['username'];?>" /></a>
<span class="info"><a href="<?php echo tsurl('user','space',array('id'=>$item['user'][userid]))?>"><?php echo $item['user'][username];?> </a> <?php echo $item['addtime'];?></span>
<span class="actticle-from">by:<a href="<?php echo tsurl('group','show',array('id'=>$item['groupid']))?>"><?php echo $item['group'][groupname];?></a></span>
<span><i class="glyphicon glyphicon-eye-open like-color"></i>(<?php echo $item['count_view'];?>)</span>
<span><i class="glyphicon glyphicon-heart   like-color"></i>(<?php echo $item['count_recommend'];?>)</span>
<span><i class="glyphicon glyphicon-comment   like-color"></i>
<a class="rank"  href="<?php echo tsurl('group','topic',array('id'=>$item['topicid']))?>">(<?php echo $item['count_comment'];?>)</a></span></span>
<div class="clear"></div>
</li>
<?php }?>
</ul>
</div>
<div class="page"><?php echo $pageUrl;?></div>
</div>
</div>
</div>

<!--广告位-->
<?php doAction('gobad','300')?>
</div>
</div>
</div>
<?php include template('footer'); ?>