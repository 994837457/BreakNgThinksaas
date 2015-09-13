<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<script type="text/javascript" src="<?php echo SITE_URL;?>public/js/city/jquery.cityselect.js"></script>
<script type="text/javascript">
var city1 = "<?php echo $strUser['province'];?>";
if(city1==''){city1 = '北京';}
var city2 = "<?php echo $strUser['city'];?>";
if(city2==''){city2 = '朝阳区';}
$(function(){
$("#city_3").citySelect({
prov:city1,
city:city2
});
});
</script>
<div class="container">
<div class="my">
<div class="col-md-3">
<div class="my_left">
<?php include pubTemplate("my")?>
</div>
</div>
<div class="col-md-9">
<div class="my_right">
<div class="rc">
<?php doAction('my_right_top')?>
<?php include template('setting_menu'); ?>
<div style="height:30px;"></div>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-7">
<form role="form" method="POST" action="<?php echo tsurl('my','setting',array('ts'=>'citydo'))?>">
<div class="form-group">
<label>修改常居地：</label>
<div id="city_3">
<p><select name="province" class="prov form-control"></select></p>
<p><select name="city" class="city form-control" disabled="disabled"></select></p>
</div>
</div>
</div>
<button class="btn btn-success" type="submit">提交修改</button>
</form>
</div>
<div class="col-md-4"></div>
</div>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>