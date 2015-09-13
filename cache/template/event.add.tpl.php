<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<script>
function insertGps(dd){
	$('#gps').val(dd);
	$('#myModal').modal('hide');
}
function openmap(){
	tsNotice('<iframe frameborder="0" scrolling="no" width="100%" height="400" src="<?php echo SITE_URL;?>index.php?app=event&ac=add&ts=map"></iframe>');
}
</script>

<script language="javascript" type="text/javascript" src="<?php echo SITE_URL;?>public/js/date/WdatePicker.js?4.72"></script>

<div class="container">

<ol class="breadcrumb">
  <li><a href="<?php echo SITE_URL;?>">首页</a></li>
  <li><a href="<?php echo tsurl('event')?>">活动</a></li>
  <li class="active">发布活动</li>
</ol>

<div class="panel panel-default">
  <div class="panel-body">


<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
  
  
<form method="POST" action="<?php echo SITE_URL;?>index.php?app=event&ac=add&ts=do"  enctype="multipart/form-data">

  <div class="form-group">
    <label>标题：</label>
    <input name="title" type="text" class="form-control">
  </div>
  
  
  <?php if($arrType) { ?>
  <div class="form-group">
    <label>类型：</label>

<select class="form-control" name="typeid">
<?php foreach((array)$arrType as $key=>$item) {?>
<option value="<?php echo $item['typeid'];?>"><?php echo $item['typename'];?></option>
<?php }?>
</select>
  </div>
  <?php } ?>
  
  <div class="form-group">
    <label>开始时间：</label>
    <p><input class="form-control" name="starttime" readonly value="" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',minDate:'<?php echo date('Y-m-d')?> 00:00',maxDate:'<?php echo date('Y-m-d',time()+604800)?> 00:00'})" /> * 7天以内。
	</p>
  </div>
  
  <div class="form-group">
    <label>结束时间：</label>
    <p><input class="form-control" name="endtime" readonly value="" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',minDate:'<?php echo date('Y-m-d')?> 00:00',maxDate:'<?php echo date('Y-m-d',time()+2502000)?> 00:00'})"  /> * 30天以内。</p>
  </div>
  
  <div class="form-group">
    <label>地点：</label>
    <p><input class="form-control" name="address" /> (例如：北京市朝阳区三里屯工人体育馆)</p>
  </div>
  
  <div class="form-group">
    <label>坐标：</label>
    <p><input class="form-control" id="gps" name="coordinate" readonly /> <a onclick="openmap();" href="javascript:void('0');">点击从地图中选择</a> (例如：30.238747,120.14532)</p>
  </div>
  
  
  <div class="form-group">
    <label>内容：</label>
    <textarea id="tseditor" name="content"><?php echo $strEvent['content'];?></textarea>
  </div>
  
  <div class="form-group">
    <label>活动海报：</label>
    <input type="file" name="photo" />
  </div>
  
  <input class="btn btn-success" type="submit" value="发布活动">
  
</form>
  
  
  </div>
  <div class="col-md-2"></div>
</div>

</div>
</div>



</div>
<?php doAction('tseditor')?>
<?php include template('footer'); ?>