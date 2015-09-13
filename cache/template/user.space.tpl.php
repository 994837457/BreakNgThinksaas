<?php defined('IN_TS') or die('Access Denied.'); ?>
<?php include template('header'); ?>
<style type="text/css">
@media screen and (max-width:30em){
#time{display: none;}
.wrap {
margin-top: -20px;
padding: 10px;
}
.wb {
width:40px;
}
.ns{width: 100%;height: 250px;}
.clears{
padding-bottom: 10px;
width: 97.5%;
float: left;
margin: 5px;
height: 375px;
}
.re_desc {
white-space: nowrap;
}
.ntitle {
white-space: nowrap;
font-size: 15px;
}
}
</style>
<article class="ui">
<?php include template('userinfo'); ?>
</article>
<div class="container">
<article class="us">
<div class="bbox">
<div class="be">
<?php include template('menu'); ?>
<div class="feed">
<?php if($arrFeed) { ?>
<ul>
<?php foreach((array)$arrFeed as $key=>$item) {?>
<li class="clears">
<div class="re_thumb">
<span class="lp">
<span>
<a href="<?php echo tsurl('user','space',array('id'=>$item['user'][userid]))?>">
<img class="wb" src="<?php echo $item['user'][face];?>"  alt="<?php echo $item['user']['username'];?>" title="<?php echo $item['user']['username'];?>" />
</a>
<a href="<?php echo tsurl('user','space',array('id'=>$item['userid']))?>"><?php echo $item['user'][username];?></a>
</span>
</span>
<span class="rp">
<span id="time"><?php echo getTime($item['addtime'],time())?></span>
<span class="actticle-from"><i class="glyphicon glyphicon-file"></i><a href="<?php echo tsurl('group','show',array('id'=>$item['groupid']))?>"><?php echo $item['group'][groupname];?></a></span>
<span><i class="glyphicon glyphicon-eye-open like-color"></i>(<?php echo $item['count_view'];?>)</span>
<span><i class="glyphicon glyphicon-heart   like-color"></i>(<?php echo $item['count_recommend'];?>)</span>
<span><i class="glyphicon glyphicon-comment   like-color"></i>
<a class="rank"  href="<?php echo tsurl('group','topic',array('id'=>$item['topicid']))?>">(<?php echo $item['count_comment'];?>)</a></span>
</span><a title="<?php echo $item['title'];?>" href="<?php echo tsurl('group','topic',array('id'=>$item['topicid']))?>">
<?php if($item['thumb']) { ?><span><img src="<?php echo $item['thumb'][1];?>" class="ns" style="width: 100%;"/></span><?php } ?>
<div class="topic_title">
<div class="ntitle">
<?php if($item['appkey'] != 'group' && $item['appkey']!='') { ?>
<a title="<?php echo $item['title'];?>" href="<?php echo SITE_URL;?><?php echo tsUrl($item['appkey'],$item['appaction'],array('id'=>$item['appid']))?>"><?php echo $item['title'];?></a>
<?php } else { ?>
<?php echo $item['title'];?></a>
<?php } ?>
<?php if($item['postby']==1) { ?><a href="<?php echo tsurl('home','phone')?>"><img align="absmiddle" alt="通过Iphone手机端发布" title="通过Iphone手机端发布" src="<?php echo SITE_URL;?>public/images/ios.jpg" /></a><?php } ?>
</div>
<div class="topic_info">
<div class="re_desc"><?php echo $item['desc'];?></div>
</div>
</div>
</div>
<div class="clear"></div>
</li>
<div class="clear"></div>
<?php }?>
</ul>
<?php } else { ?>
<li class="tac pd500 c9">哎哟~还没有动态哦</li>
<?php } ?>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>