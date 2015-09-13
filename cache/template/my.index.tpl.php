<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="container">
<div class="panel panel-default">
<div class="panel-body">
<div class="row">
<div class="col-md-3">
<div class="my_left">
<?php include pubTemplate("my")?>
</div>
</div>
<div class="col-md-9">
<div class="my_right">
<div class="rc">
<?php doAction('my_right_top')?>
<ul class="nav nav-tabs" role="tablist">
<li role="presentation" class="active"><a href="">最新帖子</a></li>
</ul>
<div class="clear"></div>
<div class="newtopic">
<ul>
<?php foreach((array)$arrTopic as $key=>$item) {?>
<li>
<div class="photo"><img src="<?php echo $item['user']['face'];?>" width="24" /></div>
<div class="info">
<div class="title"><a target="_blank" href="<?php echo tsurl('group','topic',array('id'=>$item['topicid']))?>"><?php echo $item['title'];?></a></div>
<div class="comment"><?php echo $item['count_comment'];?>回应</div>
<div class="uptime"><?php echo getTime($item['uptime'])?></div>
<div class="group"><a href="<?php echo tsurl('group','show',array('id'=>$item['group']['groupid']))?>"><?php echo $item['group']['groupname'];?></a></div>
</div>
</li>
<?php }?>
</ul>
</div>
</div>
<div class="col-md-4">
<div class="qiandao"><?php if($TS_USER['signin']<strtotime(date('Y-m-d 00:00:00'))) { ?><a href="javascript:void('0');" onclick="qianDao();">每日签到+5积分</a><?php } else { ?>今日已签到<?php } ?></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>