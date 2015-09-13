<?php defined('IN_TS') or die('Access Denied.'); ?><ul class="nav nav-tabs" role="tablist">
<li role="presentation" <?php if($ts=="base") { ?>class="active"<?php } ?>><a href="<?php echo tsurl('group','edit',array('groupid'=>$strGroup['groupid'],'ts'=>'base'))?>">基本信息</a></li>
<li role="presentation" <?php if($ts=="icon") { ?>class="active"<?php } ?>><a href="<?php echo tsurl('group','edit',array('groupid'=>$strGroup['groupid'],'ts'=>'icon'))?>">文化图标</a></li>
<li role="presentation" <?php if($ts=="type") { ?>class="active"<?php } ?>><a href="<?php echo tsurl('group','edit',array('groupid'=>$strGroup['groupid'],'ts'=>'type'))?>">帖子分类</a></li>
<li role="presentation" <?php if($ts=="cate") { ?>class="active"<?php } ?>><a href="<?php echo tsurl('group','edit',array('groupid'=>$strGroup['groupid'],'ts'=>'cate'))?>">文化分类</a></li>
<?php if($strGroup['joinway']==2) { ?>
<li role="presentation" <?php if($ts=="useraudit") { ?>class="active"<?php } ?>><a href="<?php echo tsurl('group','edit',array('groupid'=>$strGroup['groupid'],'ts'=>'useraudit'))?>">成员审核</a></li>
<?php } ?>
</ul>
<div style="height:20px;"></div>