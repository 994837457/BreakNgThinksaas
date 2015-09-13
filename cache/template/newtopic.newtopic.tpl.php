<?php defined('IN_TS') or die('Access Denied.'); ?><div class="bbox">
<div class="btitle">分享</div>
<div class="bc topic_list">
<ul>
<?php foreach((array)$arrTopic as $key=>$item) {?>
<li>
<div class="userimg"><a href="<?php echo tsurl('user','space',array('id'=>$item['user'][userid]))?>"><img class="img-circle" src="<?php echo $item['user'][face];?>" alt="<?php echo $item['user']['username'];?>" title="<?php echo $item['user']['username'];?>" /></a></div>
<div class="topic_title">
<div class="title">
<?php if($item['appkey'] != 'group' && $item['appkey']!='') { ?>
<a target="_blank" style="color:#999999;font-size: 12px;margin-right: 5px;" class="titles-type" href="<?php echo SITE_URL;?><?php echo tsUrl($item['appkey'])?>">[<?php echo $item['appname'];?>]</a>
<a title="<?php echo $item['title'];?>" href="<?php echo SITE_URL;?><?php echo tsUrl($item['appkey'],$item['appaction'],array('id'=>$item['appid']))?>"><?php echo $item['title'];?></a>
<?php } else { ?>
<a title="<?php echo $item['title'];?>" href="<?php echo tsurl('group','topic',array('id'=>$item['topicid']))?>"><?php echo $item['title'];?></a>
<?php } ?>
<?php if($item['postby']==1) { ?><a href="<?php echo tsurl('home','phone')?>"><img align="absmiddle" alt="通过Iphone手机端发布" title="通过Iphone手机端发布" src="<?php echo SITE_URL;?>public/images/ios.jpg" /></a><?php } ?>
</div>
<div class="topic_info">
<span style="float:left;">
<a href="<?php echo tsurl('group','show',array('id'=>$item['groupid']))?>"><?php echo $item['group'][groupname];?></a>
</span>
<span style="float:right;">
<?php echo getTime($item['uptime'],time())?>
<a href="<?php echo tsurl('user','space',array('id'=>$item['userid']))?>"><?php echo $item['user'][username];?></a>
<?php if($item['count_comment']>0) { ?><a class="rank" style="color:#FFFFFF;" href="<?php echo tsurl('group','topic',array('id'=>$item['topicid']))?>"><?php echo $item['count_comment'];?></a><?php } ?>
</span>
</div>
</div>
<div class="topic-content">
<div class="topic-view">
<?php echo $strTopic['content'];?>
<?php echo $tpUrl;?>
<?php doAction('gobad','468')?>
</div>
<div class="clear"></div>
</li>
<?php }?>
</ul>
</div>
</div>