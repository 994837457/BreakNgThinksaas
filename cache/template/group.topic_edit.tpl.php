<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<?php doAction('tseditor')?>
<div class="container">
<div class="panel panel-default">
<div class="panel-body">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<form method="POST" action="<?php echo SITE_URL;?>index.php?app=group&ac=topicedit&ts=do" enctype="multipart/form-data">
<div class="form-group">
<label>标题</label>
<input name="title" type="text" class="form-control" value="<?php echo $strTopic['title'];?>">
</div>
<?php if($arrGroupType) { ?>
<div class="form-group">
<label>类型</label>
<select name="typeid">
<option <?php if($strTopic['typeid']=='0') { ?>selected="select"<?php } ?> value="0">请选择</option>
<?php foreach((array)$arrGroupType as $key=>$item) {?>
<option <?php if($item['typeid']==$strTopic['typeid']) { ?>selected="select"<?php } ?> value="<?php echo $item['typeid'];?>"><?php echo $item['typename'];?></option>
<?php }?>
</select>
</div>
<?php } ?>
<div class="form-group">
<label>内容</label>
<textarea name="content" id="tseditor"><?php echo $strTopic['content'];?></textarea>
</div>
<div class="form-group">
<label>标签</label>
<input name="tag" type="text" class="form-control" value="<?php echo $strTopic['tag'];?>">
</div>
<div class="form-group">
<label>评论</label>
<input type="radio" name="iscomment" value="0" <?php if($strTopic['iscomment']=='0') { ?>checked="select"<?php } ?> />允许
<input type="radio" name="iscomment" value="1" <?php if($strTopic['iscomment']=='1') { ?>checked="select"<?php } ?> />不允许
</div>
<div class="form-group">
<label>回复可读</label>
<input type="radio" name="iscommentshow" value="0" <?php if($strTopic['iscommentshow']=='0') { ?>checked="select"<?php } ?> />不需要
<input type="radio" name="iscommentshow" value="1" <?php if($strTopic['iscommentshow']=='1') { ?>checked="select"<?php } ?> />需要
</div>
<input type="hidden" name="topicid" value="<?php echo $strTopic['topicid'];?>" />
<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" />
<button class="btn btn-success" type="submit">修改</button>
<a href="<?php echo tsurl('group','topic',array('id'=>$strTopic['topicid']))?>">返回</a>
<p></p>
</form>
</div>
<div class="col-md-2"></div>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>