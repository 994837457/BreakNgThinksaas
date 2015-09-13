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
<li role="presentation" class="active"><a href="">我的积分兑换</a></li>
</ul>


<div class="goodslist">
<ul>
<?php foreach((array)$arrGoods as $key=>$item) {?>
<li><a href="<?php echo tsurl('redeem','goods',array('id'=>$item['goodsid']))?>"><img src="<?php echo tsXimg($item['photo'],'redeem','150','',$item['path'])?>" alt="<?php echo $item['title'];?>" /></a>
<p class="content"><a href="<?php echo tsurl('redeem','goods',array('id'=>$item['goodsid']))?>"><?php echo $item['title'];?></a></p>
<div class="info"><span class="scores"><?php echo $item['scores'];?>积分</span><span class="dui"><a class="btn btn-success btn-mini" href="<?php echo tsurl('redeem','goods',array('id'=>$item['goodsid']))?>">兑换</a></span></div>
</li>
<?php }?>
</ul>
</div>





</div>

</div>


</div>
</div>
<?php include template('footer'); ?>