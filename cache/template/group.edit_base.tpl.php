<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<?php doAction('tseditor','mt')?>
<div class="container">
<div class="bbox">
<div class="bc">
<?php include template('edit_xbar'); ?>
<div class="row">
<div class="col-md-8">
<form class="form-horizontal" method="post" action="<?php echo SITE_URL;?>index.php?app=group&ac=do&ts=edit_base">
<div class="form-group">
<label class="col-sm-2 control-label">名称：</label>
<div class="col-sm-10">
<input  class="form-control" type="text" value="<?php echo $strGroup['groupname'];?>" name="groupname">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">介绍：</label>
<div class="col-sm-10">
<textarea id="tseditor" name="groupdesc"><?php echo $strGroup['groupdesc'];?></textarea>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">标签：</label>
<div class="col-sm-10">
<input  class="form-control" type="text" value="<?php echo $strGroup['tag'];?>" name="tag"> (多个请用英文,号分割)
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">加入方式：</label>
<div class="col-sm-10">
<input <?php if($strGroup['joinway']=='0') { ?>checked="select"<?php } ?> name="joinway" type="radio" value="0" />自由加入(开放小组) <input <?php if($strGroup['joinway']=='1') { ?>checked="select"<?php } ?>  name="joinway" type="radio" value="1" />禁止加入(私密小组)  <input <?php if($strGroup['joinway']=='2') { ?>checked="select"<?php } ?>  name="joinway" type="radio" value="2" />申请加入(需要审核)
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">发帖方式：</label>
<div class="col-sm-10">
<input <?php if($strGroup['ispost']=='0') { ?>checked="select"<?php } ?> type="radio" name="ispost" value="0" />允许会员发帖 <input <?php if($strGroup['ispost']=='1') { ?>checked="select"<?php } ?> type="radio" name="ispost" value="1" />不允许会员发帖
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">浏览权限：</label>
<div class="col-sm-10">
<input <?php if($strGroup['isopen']=='0') { ?>checked="select"<?php } ?> type="radio" name="isopen" value="0" />完全开放 <input <?php if($strGroup['isopen']=='1') { ?>checked="select"<?php } ?> type="radio" name="isopen" value="1" />仅组员
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">发帖审核：</label>
<div class="col-sm-10">
<input <?php if($strGroup['ispostaudit']=='1') { ?>checked="select"<?php } ?> type="radio" name="ispostaudit" value="1" />审核 <input <?php if($strGroup['ispostaudit']=='0') { ?>checked="select"<?php } ?> type="radio" name="ispostaudit" value="0" />不审核
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<input type="hidden" name="groupid" value="<?php echo $strGroup['groupid'];?>" />
<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" />
<button type="submit" class="btn btn-success">提交修改</button> <a href="<?php echo tsurl('group','show',array('id'=>$strGroup['groupid']))?>">返回</a>
</div>
</div>
</form>
</div>
<div class="col-md-4"></div>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>