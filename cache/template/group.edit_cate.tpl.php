<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<script>
$(document).ready(function() {
//选择一级区域
$('#cateid').change(function(){
$("#select2").html('<img src="'+siteUrl+'public/images/loading.gif" />');
var cateid = $(this).children('option:selected').val();  //弹出select的值
if(cateid==0){
$("#select2").html('');
$("#select3").html('');
}else{
$("#select3").html('');
$.ajax({
type: "GET",
url:  "<?php echo SITE_URL;?>index.php?app=group&ac=cate&ts=two&cateid="+cateid,
success: function(msg){
$("#select2").html(msg);
//选择二级区域
$('#cateid2').change(function(){
$("#select3").html('<img src="'+siteUrl+'public/images/loading.gif" />');
var cateid2 = $(this).children('option:selected').val();  //弹出select的值
if(cateid2 == 0){
$("#select3").html('');
}else{
//ajax
$.ajax({
type: "GET",
url:  "<?php echo SITE_URL;?>index.php?app=group&ac=cate&ts=three&cateid2="+cateid2,
success: function(msg){
$('#select3').html(msg);
}
});
}
});
}
});
}
});
});
</script>
<div class="container">
<div class="bbox">
<div class="bc">
<?php include template('edit_xbar'); ?>
<div class="row">
<div class="col-md-8">
<form method="post" action="<?php echo SITE_URL;?>index.php?app=group&ac=cate&ts=do">
<select  id="cateid" name="cateid">
<option value="0">请选择一级分类</option>
<?php foreach((array)$arrCate as $key=>$item) {?>
<option value="<?php echo $item['cateid'];?>"><?php echo $item['catename'];?></option>
<?php }?>
</select>
<span id="select2"></span>
<span id="select3"></span>
<input type="hidden" name="groupid" value="<?php echo $strGroup['groupid'];?>" />
<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" />
<button class="btn btn-success" type="submit">修改</button>
</form>
<div>
<?php if($strCate) { ?>
一级：<?php echo $strCate['catename'];?>
<?php } ?>
<?php if($strCate2) { ?>
二级：<?php echo $strCate2['catename'];?>
<?php } ?>
<?php if($strCate3) { ?>
三级：<?php echo $strCate3['catename'];?>
<?php } ?>
</div>
</div>
<div class="col-md-4"></div>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>