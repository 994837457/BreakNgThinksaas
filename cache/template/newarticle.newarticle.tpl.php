<?php defined('IN_TS') or die('Access Denied.'); ?><div class="bbox">
<div class="bc topic_list">
<ul>
<?php foreach((array)$arrArticle as $key=>$item) {?>
<li class="clearf">
<div class="re_thumb">
<span class="lp">
<a href="<?php echo tsurl('user','space',array('id'=>$item['user'][userid]))?>">
<img class="wb" src="<?php echo $item['user'][face];?>"  alt="<?php echo $item['user']['username'];?>" title="<?php echo $item['user']['username'];?>" /></a>
<a href="<?php echo tsurl('user','space',array('id'=>$item['userid']))?>"><?php echo $item['user'][username];?></a>
</span>
<span class="rp">
<span  id="time"><?php echo getTime(strtotime($item['addtime']),time())?></span>
<span class="actticle-from"><i class="glyphicon glyphicon-file"></i><a href="<?php echo tsurl('article','cate',array('id'=>$item['cateid']))?>"><?php echo $item['catename'];?></a></span>
<span><i class="glyphicon glyphicon-eye-open like-color"></i>(<?php echo $item['count_view'];?>)</span>
<span><i class="glyphicon glyphicon-heart   like-color"></i>(<?php echo $item['count_recommend'];?>)</span>
<span><i class="glyphicon glyphicon-comment   like-color"></i>
<a class="rank"  href="<?php echo tsurl('group','topic',array('id'=>$item['topicid']))?>">(<?php echo $item['count_comment'];?>)</a></span>
</span>
<?php if($item['thumb']) { ?><span><img src="<?php echo $item['thumb'][1];?>" class="ni"  /></span><?php } ?>
<div class="topic_title">
<div class="ntitle">&nbsp;
<a title="<?php echo $item['title'];?>" href="<?php echo tsurl('article','show',array('id'=>$item['articleid']))?>"><?php echo $item['title'];?></a>
</div>
<div class="topic_info">
<div class="re_desc"><?php echo $item['desc'];?></div>

</div>
</div>
</div>
<div class="clear"></div>
</li>
<?php }?>
</ul>
</div>
</div>