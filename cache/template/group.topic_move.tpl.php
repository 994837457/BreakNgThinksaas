<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="midder">
<div class="mc">
<h1>移动帖子：<?php echo $strTopic['title'];?></h1>
<div class="cleft">
<form method="POST" action="<?php echo SITE_URL;?>index.php?app=group&ac=topicmove&ts=do">
<p>选择文化：
<select name="groupid">
<?php foreach((array)$arrGroup as $key=>$item) {?>
<option value="<?php echo $item['groupid'];?>"><?php echo $item['groupname'];?></option>
<?php }?>
</select>
</p>
<p>
<input type="hidden" name="topicid" value="<?php echo $topicid;?>" />
<button class="btn btn-success" type="submit">移动</button>
</p>
</form>
</div>
</div>
</div>
<?php include template('footer'); ?>