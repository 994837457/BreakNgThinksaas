<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="midder container">
<div class="mc">
<div class="cleft">
<div class="bbox">
<div class="btitle"><?php echo $strGroup['groupname'];?>组长</div>
<div class="bc">
<a class="nbg" href="<?php echo tsurl('user','space',array('id'=>$strLeader['userid']))?>"><img alt="<?php echo $strLeader['username'];?>" src="<?php echo $strLeader['face'];?>" width="48" height="48" /></a>
<p><?php echo $strLeader['username'];?></p>
</div>
</div>
<div class="bbox">
<div class="btitle"><?php echo $strGroup['groupname'];?>管理员</div>
<div class="bc">
<div class="facelist">
<ul>
<?php foreach((array)$arrAdmin as $key=>$item) {?>
<li>
<a href="<?php echo tsurl('user','space',array('id'=>$item['userid']))?>"><img alt="<?php echo $item['username'];?>" src="<?php echo $item['face'];?>" width="48" height="48" /></a>
<p><?php echo $item['username'];?></p>
<p><?php if($strGroup['userid']==$TS_USER['userid'] || $TS_USER['isadmin']==1) { ?>
<a href="javascript:void('0');" onclick="setAdmin('<?php echo $strGroup['groupid'];?>','<?php echo $item['userid'];?>','<?php echo $_SESSION['token'];?>')">
<?php if($item['isadmin']==1) { ?>
取消管理员
<?php } elseif ($item['isadmin']==0) { ?>
设为管理员
<?php } ?>
</a>
<?php } ?></p>
</li>
<?php }?>
</ul>
</div>
</div>
</div>
<div class="bbox">
<div class="btitle"><?php echo $strGroup['groupname'];?>成员</div>
<div class="bc">
<div class="facelist">
<ul>
<?php foreach((array)$arrGroupUser as $key=>$item) {?>
<li>
<a href="<?php echo tsurl('user','space',array('id'=>$item['userid']))?>"><img alt="<?php echo $item['username'];?>" src="<?php echo $item['face'];?>" width="48" height="48" /></a>
<p><?php echo $item['username'];?></p>
<p>
<?php if($strGroup['userid']==$TS_USER['userid'] || $TS_USER['isadmin']==1) { ?>
<?php if($item['isadmin']==1) { ?>
<a href="javascript:void('0');" onclick="setAdmin('<?php echo $strGroup['groupid'];?>','<?php echo $item['userid'];?>','<?php echo $_SESSION['token'];?>')">取消管理员</a>
<?php } elseif ($item['isadmin']==0 && $strGroup['userid']!=$item['userid']) { ?>
<a href="javascript:void('0');" onclick="setAdmin('<?php echo $strGroup['groupid'];?>','<?php echo $item['userid'];?>','<?php echo $_SESSION['token'];?>')">设为管理员</a>
<br /><a href="javascript:void('0');" onclick="kickedGroup('<?php echo $strGroup['groupid'];?>','<?php echo $item['userid'];?>')" title="踢出">X</a>
<?php } ?>
<?php } ?></p>
</li>
<?php }?>
</ul>
</div>
</div>
</div>
</div>
<div class="cright">
<div class="bbox">
<div class="bc">
<a href="<?php echo tsurl('group','show',array('id'=>$strGroup['groupid']))?>">返回<?php echo $strGroup['groupname'];?></a>
</div>
</div>
</div>
</div>
</div>
<?php include template('footer'); ?>