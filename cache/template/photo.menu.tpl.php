<?php defined('IN_TS') or die('Access Denied.'); ?><ul class="nav nav-tabs" role="tablist" style="width: 200px;">
<li role="presentation" <?php if($ac=='index') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('photo')?>">最新圖</a></li>
<?php if($ac=='album' && $ts=='user') { ?>
<li role="presentation" class="active"><a href="<?php echo tsurl('photo','album',array(ts=>user,userid=>$userid))?>">我的圖</a></li>
<?php } ?>
<?php if($ts!='user' && intval($TS_USER['userid']) > '0') { ?>
<li role="presentation"><a href="<?php echo tsurl('photo','album',array(ts=>user,userid=>$TS_USER['userid']))?>">我的圖</a></li>
<?php } ?>
<li role="presentation" <?php if($ac=='create') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('photo','create')?>">创建圖</a></li>
</ul>