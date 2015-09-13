<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="bbox">
<div class="bc">
<h1><a href="<?php echo tsurl('group','tag',array('id'=>$strTag['tagname']))?>"><?php echo $strTag['tagname'];?></a></h1>
</div>
</div>
<div class="bbox">
<div class="btitle"><?php echo $strTag['tagname'];?>相关的小组</div>
<div class="bc">
<div class="facelist">
<ul>
<?php foreach((array)$arrGroup as $key=>$item) {?>
<li><a href="<?php echo tsurl('group','show',array('id'=>$item['groupid']))?>"><img src="<?php echo $item['photo'];?>" width="48" alt="<?php echo $item['groupname'];?>" /></a>
<p><a href="<?php echo tsurl('group','show',array('id'=>$item['groupid']))?>"><?php echo $item['groupname'];?></a></p>
</li>
<?php }?>
</ul>
</div>
</div>
</div>
<div class="bbox">
<div class="btitle"><?php echo $strTag['tagname'];?>相关的帖子</div>
<div class="bc">
<div class="topic_list">
<ul>
<?php if($arrTopic) { ?>
<?php foreach((array)$arrTopic as $key=>$item) {?>
<li>
<div class="userimg"><a href="<?php echo tsurl('user','space',array('id'=>$item['user'][userid]))?>"><img src="<?php echo $item['user'][face];?>" width="32"></a></div>
<div class="topic_title">
<div class="title"><a title="<?php echo $item['title'];?>" href="<?php echo tsurl('group','topic',array('id'=>$item['topicid']))?>"><?php echo $item['title'];?></a>
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
<div class="clear"></div>
</li>
<?php }?>
<?php } ?>
</ul>
</div>
<div class="page"><?php echo $pageUrl;?></div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="bbox tags">
<div class="btitle">热门标签</div>
<div class="bc">
<?php foreach((array)$arrTag as $key=>$item) {?>
<a href="<?php echo tsurl('group','tag',array('id'=>urlencode($item['tagname'])))?>"><?php echo $item['tagname'];?></a>
<?php }?>
<a href="<?php echo tsurl('group','tags')?>">更多...</a>
</div>
</div>
<div class="clear"></div>
<!--广告位-->
<?php doAction('gobad','300')?>
</div>
</div>
</div>
<?php include template('footer'); ?>