<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<style type="text/css">@media screen and (max-width:30.00em){.sub-item {width: 45%;}}</style>
<div class="container" >
<ul class="nav nav-pills">
<li role="presentation" <?php if($cateid==0) { ?>class="active"<?php } ?>><a href="<?php echo tsurl('group')?>">全部</a></li>
<?php foreach((array)$arrGroupCate as $key=>$item) {?>
<li role="presentation" <?php if($cateid==$item['cateid']) { ?>class="active"<?php } ?>><a href="<?php echo tsurl('group','index',array('cateid'=>$item['cateid']))?>"><?php echo $item['catename'];?></a></li>
<?php }?>
</ul>
<div class="row">
<div class="col-md-8">
<div class="bbox">
<div class="be">
<div id="group_content" style="margin-top:10px;">
<?php foreach((array)$arrGroup as $key=>$item) {?>
<div class="sub-item">
<div class="pic">
<a href="<?php echo tsurl('group','show',array('id'=>$item['groupid']))?>">
<img src="<?php if($item['photo']) { ?><?php echo tsXimg($item['photo'],'group','120','120',$item['path'],1)?><?php } else { ?><?php echo SITE_URL;?>public/images/group.jpg<?php } ?>" alt="<?php echo $item['groupname'];?>" />
</a>
<div class="joing">
<?php if(in_array($item['groupid'],$myGroup)) { ?>
已加入
<?php } else { ?>
<a href="javascript:void('0')" onclick="joinGroup('<?php echo $item['groupid'];?>')">+加入</a>
<?php } ?>
</div>
</div>
<div class="info">
<a href="<?php echo tsurl('group','show',array('id'=>$item['groupid']))?>"><?php echo $item['groupname'];?></a>  <font color="#999999">(<?php echo $item['count_user'];?>人)</font>
<p><?php echo $item['groupdesc'];?></p>
</div>
</div>
<?php }?>
<div class="clear"></div>
<div class="page"><?php echo $pageUrl;?></div>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<?php if($TS_APP['iscreate']==0 || $TS_USER['isadmin']==1) { ?>
<div><a class="btn btn-info btn-block btn-lg" href="<?php echo tsurl('group','create')?>">创建文化</a></div>
<p></p>
<?php } ?>
<div class="bs">
<div class="bbox">
<div class="btitle">热分享</div>
<ul class="bc titles">
<?php foreach((array)$arrTopic as $key=>$item) {?>
<li>
<h3><a href="<?php echo tsurl('group','topic',array('id'=>$item['topicid']))?>" target="_blank"><?php echo $item['title'];?></a></h3>
<span class="titles-r-grey"><?php echo $item['count_comment'];?></span>
<p class="titles-b">
<span class="titles-b-l">来自：<a title="<?php echo $item['group']['groupname'];?>" target="_blank" href="<?php echo tsurl('group','show',array('id'=>$item['groupid']))?>"><?php echo $item['group']['groupname'];?></a>&nbsp;文化
</span>
</p>
</li>
<?php }?>
</ul>
</div></div>
<div class="bs">
<div class="bbox">
<div class="btitle">新文化</div>
<div class="bc commlist">
<?php if($arrNewGroup) { ?>
<ul>
<?php foreach((array)$arrNewGroup as $key=>$item) {?>
<li><a href="<?php echo tsurl('group','show',array('id'=>$item['groupid']))?>"><?php echo $item['groupname'];?></a> (<?php echo $item['count_user'];?>)<br></li>
<?php }?>
</ul>
<?php } ?>
</div></div>
</div>
<!--广告位-->
<?php doAction('gobad','300')?>
</div>
</div>
</div>
<?php include template('footer'); ?>