<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="container">


<div class="my">


<div class="my_left">

<?php include pubTemplate("my")?>

</div>

<div class="my_right">

<div class="rc">


<?php doAction('my_right_top')?>

<ul class="nav nav-tabs" role="tablist">
<li role="presentation" class="active"><a href="">我的唠叨</a></li>
</ul>

    <div style="height:20px"></div>




<div>
<form method="post" class="form text-form" action="<?php echo tsurl('weibo','add',array('ts'=>'do'))?>" enctype="multipart/form-data">
<textarea class="form-control" rows="3" name="content"></textarea>
<div style="padding:5px 0;">

<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" />

<button  class="btn btn-success"  type="submit">发布</button>
</div>
</form>
</div>

<ul>
<?php foreach((array)$arrWeibo as $key=>$item) {?>
<li class="mbtl">
<a href="<?php echo tsurl('user','space',array('id'=>$strUser['userid']))?>"><img title="<?php echo $strUser['username'];?>" alt="<?php echo $strUser['username'];?>" src="<?php echo $strUser['face'];?>" width="48" /></a>
</li>
<li class="mbtr">
<div class="author"><a href="<?php echo tsurl('user','space',array('id'=>$strUser['userid']))?>"><?php echo $strUser['username'];?></a> <?php echo $item['addtime'];?></div>
<div class="title"><a href="<?php echo tsurl('group','topic',array('id'=>$item['topicid']))?>"><?php echo $item['title'];?></a></div>
<div class="content">
<?php if($item['photo']) { ?><a target="_blank" href="<?php echo SITE_URL;?>uploadfile/weibo/<?php echo $item['photo'];?>"><img src="<?php echo tsXimg($item['photo'],'weibo',240,'',$item['path'])?>" /></a><?php } ?>
<?php echo tsDecode($item['content'])?>
</div>
<p style="text-align:right;">

<a href="<?php echo tsurl('weibo','show',array('id'=>$item['weiboid']))?>"><?php if($item['count_comment'] > '0') { ?>(<?php echo $item['count_comment'];?>)<?php } ?>回复</a>

<?php if($GLOBALS['TS_USER']['isadmin'] == 1) { ?>
<a href="<?php echo tsurl('weibo','delete',array('weiboid'=>$item['weiboid']))?>">删除</a>
<?php } ?>

</p>
</li>
<div class="clear"></div>
<?php }?>
</ul>

<div class="clear"></div>
<div class="page"><?php echo $pageUrl;?></div>
<div>

</div>





</div>

</div>


</div>
</div>
<?php include template('footer'); ?>