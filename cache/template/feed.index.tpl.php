<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="container">

    <ol class="breadcrumb">
        <li><a href="<?php echo SITE_URL;?>">首页</a></li>
        <li class="active">动态</li>
    </ol>

<div class="row">

<div class="col-md-8">

<div class="bbox">
<div class="bc">

<div class="feed">
<ul>
<?php foreach((array)$arrFeed as $key=>$item) {?>
<li class="mbtl">
<?php if($item['user'][userid] !=$arrFeed[$key-1][user][userid]) { ?>
<a href="<?php echo tsurl('user','space',array('id'=>$item['user'][userid]))?>"><img title="<?php echo $item['user'][username];?>" alt="<?php echo $item['user'][username];?>" src="<?php echo $item['user'][face];?>" width="48" height="48" /></a>
<?php } ?>
</li>
<li class="mbtr">
<a href="<?php echo tsurl('user','space',array('id'=>$item['user'][userid]))?>"><?php echo $item['user'][username];?></a> 
<?php echo $item['content'];?>
</li>
<div class="clear"></div>
<?php }?>
</ul>

</div>

<div class="clear"></div>
<div class="page"><?php echo $pageUrl;?></div>
</div>
</div>
</div>

<div class="col-md-4">


<div class="clear"></div>
<!--广告位-->
<?php doAction('gobad','300')?>
</div>

</div>
</div>

<?php include template('footer'); ?>