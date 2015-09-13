<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<?php doAction('tseditor')?>
<div class="container">
<ol class="breadcrumb">
<li><a href="<?php echo SITE_URL;?>">分享</a></li>
<li><a href="<?php echo tsurl('group')?>">文化</a></li>
<li><a href="<?php echo tsurl('group','show',array('id'=>$strGroup['groupid']))?>"><?php echo $strGroup['groupname'];?></a></li>
<li class="active">分享<?php echo $strGroup['groupname'];?></li>
</ol>
<div class="panel panel-default">
<div class="panel-body">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<?php if($isGroupUser == '0') { ?>
<div class="alert alert-info" role="alert">不好意思，你不是本文化成员不能发表帖子，请加入后再发帖</div>
<?php } else { ?>
<form method="POST" action="<?php echo SITE_URL;?>index.php?app=group&ac=add&ts=do"  enctype="multipart/form-data">
<div class="form-group">
<input name="title" type="text" class="form-control" placeholder="标题">
</div>
<?php if($arrGroupType) { ?>
<div class="form-group">
<label>类型</label>
<select name="typeid">
<option value="0">选择类型</option>
<?php foreach((array)$arrGroupType as $key=>$item) {?>
<option value="<?php echo $item['typeid'];?>"><?php echo $item['typename'];?></option>
<?php }?>
</select>
</div>
<?php } ?>
<div class="form-group">
<textarea name="content" id="tseditor" placeholder="内容"></textarea>
</div>
<div class="form-group">
<input name="tag" type="text" class="form-control" placeholder="标签">
</div>
<div class="form-group">
<label>评论</label>
<input type="radio" checked="select" name="iscomment" value="0" />允许 <input type="radio" name="iscomment" value="1" />不允许
</div>
<div class="form-group">
<label>回复可读</label>
<input type="radio" checked="select" name="iscommentshow" value="0" />不需要 <input type="radio" name="iscommentshow" value="1" />需要
</div>
<?php if($TS_SITE ['base'] ['isauthcode']) { ?>
<div class="form-group">
<label>验证码</label>
<input name="authcode" />
<img align="absmiddle" src="<?php echo SITE_URL;?>index.php?app=pubs&ac=code" onclick="javascript:newgdcode(this,this.src);" title="点击刷新验证码" alt="点击刷新验证码" style="cursor:pointer;"/>
</div>
<?php } ?>
<input type="hidden" name="groupid" value="<?php echo $strGroup['groupid'];?>" />
<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" />
<button class="btn btn-success" type="submit">提交</button>
<a href="<?php echo tsurl('group','show',array('id'=>$strGroup['groupid']))?>" id="back">返回</a>
<p></p>
</form>
<?php } ?>
</div>
<div class="col-md-2"></div>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>