<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="container">
<ol class="breadcrumb">
<li><a href="<?php echo SITE_URL;?>">首页</a></li>
<li class="active">活动</li>
</ol>
<div class="row">
<div class="col-md-2">
<div class="list-group">
<a class="list-group-item active" href="<?php echo tsurl('event')?>">全部</a></li>
<?php foreach((array)$arrType as $key=>$item) {?>
<a class="list-group-item" href="<?php echo tsurl('event','type',array(id=>$item['typeid']))?>"><?php echo $item['typename'];?></a>
<?php }?>
</div>
<p><a class="btn btn-success btn-block" href="<?php echo tsurl('event','add')?>">发布活动</a></p>
</div>
<div class="col-md-10">
<div class="panel panel-default">
<div class="panel-body">
<div class="row">
<?php foreach((array)$arrEvent as $key=>$item) {?>
<div class="col-sm-6">
<a href="<?php echo tsurl('event','show',array('id'=>$item['eventid']))?>"><img src="<?php if($item['photo']) { ?><?php echo tsXimg($item['photo'],'event','300','220',$item['path'],'1')?><?php } else { ?><?php echo SITE_URL;?>app/event/skins/default/event.jpg<?php } ?>" alt="<?php echo $item['title'];?>" height="150"></a>
<div>
<h3><a href="<?php echo tsurl('event','show',array('id'=>$item['eventid']))?>"><?php echo cututf8($item['title'],0,10,false)?></a></h3>
<p>开始时间：<?php echo date('Y-m-d H:i',strtotime($item['starttime']))?> <br />
结束时间：<?php echo date('Y-m-d H:i',strtotime($item['endtime']))?><br>
<?php echo $item['count_userdo'];?>人参加   <?php echo $item['count_userwish'];?>人感兴趣</p>
</div>
</div>
<?php }?>
</div>
<div class="clear"></div>
<div class="page"><?php echo $pageUrl;?></div>
</div>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>