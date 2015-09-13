<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="container">

<ol class="breadcrumb">
  <li><a href="<?php echo SITE_URL;?>">首页</a></li>
  <li class="active">积分兑换</li>
</ol>

<div class="bbox">


<div class="bc">


<ul class="nav nav-tabs" role="tablist">
<li role="presentation" <?php if($ac=='index' && $cateid==0) { ?>class="active"<?php } ?>><a href="<?php echo tsurl('redeem')?>">最新兑换</a></li>

<?php foreach((array)$arrCate as $key=>$item) {?>
<li role="presentation" <?php if($ac=='index' && $cateid==$item['cateid']) { ?>class="active"<?php } ?>><a href="<?php echo tsurl('redeem','index',array('cateid'=>$item['cateid']))?>"><?php echo $item['catename'];?></a></li>
<?php }?>
</ul>


<div class="goodslist">
<ul>
<?php foreach((array)$arrGoods as $key=>$item) {?>
<li><a href="<?php echo tsurl('redeem','goods',array('id'=>$item['goodsid']))?>"><img src="<?php if($item['photo']) { ?><?php echo tsXimg($item['photo'],'redeem','150','150',$item['path'],1)?><?php } else { ?><?php echo SITE_URL;?>public/images/redeem.png<?php } ?>" alt="<?php echo $item['title'];?>" width="150" /></a>
<p class="content"><a href="<?php echo tsurl('redeem','goods',array('id'=>$item['goodsid']))?>"><?php echo $item['title'];?></a></p>
<div class="info"><span class="scores"><?php echo $item['scores'];?>积分</span><span class="dui"><a class="btn btn-success btn-mini" href="<?php echo tsurl('redeem','goods',array('id'=>$item['goodsid']))?>">兑换</a></span></div>
</li>
<?php }?>
</ul>
</div>
</div>
</div>


</div>
<?php include template('footer'); ?>